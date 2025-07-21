// assets/js/conditional-loader.js
(function() {
  'use strict';

  // -------------------------------------------------------------------------
  // 1. VARIABILI E PARAMETRI GLOBALI ALL'IIFE
  // -------------------------------------------------------------------------
  const themeScriptParams = window.themeScriptParams || {}; // Protezione nel caso non sia definito
  const breakpoint = parseInt(themeScriptParams.breakpoint) || 800;
  const resourcesToLoad = themeScriptParams.desktopResources || {};
  const themeVersion = themeScriptParams.themeVersion || Date.now().toString();

  // Mappa di 'handle' a 'Promise' per le risorse in caricamento o già caricate.
  const resourcePromises = {}; // Es: { 'gsap': Promise<pending/resolved/rejected>, ... }
  let initialLoadAttempted = false;

  // -------------------------------------------------------------------------
  // 2. FUNZIONI HELPER (definite prima di essere usate)
  // -------------------------------------------------------------------------

  /**
   * Aggiunge un parametro di versione agli URL locali per il cache busting.
   * @param {string} src L'URL originale della risorsa.
   * @returns {string} L'URL con il parametro di versione.
   */
  function getResourceUrlWithVersion(src) {
    if (!src) return ''; // Gestione src nullo o undefined
    // Non aggiungere la versione se è un URL esterno o ha già parametri
    if (src.includes('?') || src.startsWith('//') || src.startsWith('http://') || src.startsWith('https://')) {
      return src;
    }
    return src + '?ver=' + themeVersion;
  }

  /**
   * Crea e restituisce una Promise che si risolve/rigetta quando lo script o lo stile è caricato/fallito.
   * Questa funzione viene chiamata SOLO UNA VOLTA per handle, dopo che le dipendenze sono state gestite.
   * @param {string} handle L'handle della risorsa.
   * @param {object} resourceData I dati della risorsa (src, type, in_footer, ecc.).
   * @returns {Promise<string>} Una promise che si risolve con l'handle in caso di successo.
   */
  function createLoadPromise(handle, resourceData) {
    if (!resourceData || !resourceData.type || !resourceData.src) {
      const errorMsg = `Dati risorsa incompleti per ${handle} in createLoadPromise.`;
      console.error(errorMsg, resourceData);
      return Promise.reject(new Error(errorMsg));
    }

    if (resourceData.type === 'script') {
      return new Promise((resolve, reject) => {
        // console.log(`Inizio caricamento SCRIPT: ${handle}`);
        const scriptElement = document.createElement('script');
        scriptElement.id = handle + '-js';
        scriptElement.src = getResourceUrlWithVersion(resourceData.src);
        scriptElement.async = false; // Manteniamo per ordine sequenziale se il browser lo rispetta

        scriptElement.onload = () => {
          // console.log(`SCRIPT ${handle} caricato con successo.`);
          resolve(handle);
        };
        scriptElement.onerror = () => {
          console.error(`Errore caricamento SCRIPT: ${handle} da ${scriptElement.src}`);
          reject(new Error(`Fallito caricamento script ${handle}`));
        };
        // Se resourceData.in_footer è true (o non definito), mettere nel body.
        (resourceData.in_footer !== false ? document.body : document.head).appendChild(scriptElement);
      });
    } else if (resourceData.type === 'style') {
      return new Promise((resolve, reject) => {
        // console.log(`Inizio caricamento STYLE: ${handle}`);
        const linkElement = document.createElement('link');
        linkElement.id = handle + '-css';
        linkElement.rel = 'stylesheet';
        linkElement.href = getResourceUrlWithVersion(resourceData.src);
        // linkElement.media = resourceData.media || 'all'; // Se si passa 'media' da PHP

        linkElement.onload = () => {
          // console.log(`STYLE ${handle} caricato con successo.`);
          resolve(handle);
        };
        linkElement.onerror = () => {
          console.error(`Errore caricamento STYLE: ${handle} da ${linkElement.href}`);
          reject(new Error(`Fallito caricamento style ${handle}`));
        };
        document.head.appendChild(linkElement);
      });
    } else {
      const errorMsg = `Tipo risorsa sconosciuto per ${handle}: ${resourceData.type}`;
      console.warn(errorMsg);
      return Promise.reject(new Error(errorMsg));
    }
  }

  // -------------------------------------------------------------------------
  // 3. FUNZIONE PRINCIPALE PER LA GESTIONE DELLE RISORSE E DIPENDENZE
  // -------------------------------------------------------------------------

  /**
   * Processa una singola risorsa, gestendo le sue dipendenze e il caricamento.
   * Restituisce una promise che viene riutilizzata se la risorsa è già in fase di caricamento o caricata.
   * @param {string} handle L'handle della risorsa da processare.
   * @returns {Promise<string>} Una promise che si risolve con l'handle in caso di successo.
   */
  function processResource(handle) {
    // Se abbiamo già una promise per questa risorsa (sta caricando o è già caricata), restituiscila.
    if (resourcePromises[handle]) {
      // console.log(`Risorsa ${handle} già in processamento o processata, ritorno promise esistente.`);
      return resourcePromises[handle];
    }

    // CASI SPECIALI: Script gestiti da WordPress o globalmente disponibili
    if (handle === 'jquery') {
      if (typeof window.jQuery !== 'undefined') {
        // console.log("jQuery è già disponibile globalmente.");
        resourcePromises[handle] = Promise.resolve(handle); // Risolvi immediatamente
        return resourcePromises[handle];
      } else {
        const errorMsg = "jQuery (gestito da WordPress) non trovato nel loader. Controlla l'enqueue di WordPress.";
        console.error(errorMsg, "Valore di window.jQuery:", window.jQuery);
        resourcePromises[handle] = Promise.reject(new Error(errorMsg));
        return resourcePromises[handle];
      }
    }
    // Aggiungere altri 'else if' qui per altri script globali che non sono in resourcesToLoad, se necessario

    const resourceData = resourcesToLoad[handle];
    if (!resourceData) {
      const errorMsg = `Dati risorsa non trovati per l'handle: ${handle} (e non è uno script globale noto).`;
      console.error(errorMsg);
      // Crea e memorizza una promise rigettata per questo handle
      resourcePromises[handle] = Promise.reject(new Error(errorMsg));
      return resourcePromises[handle];
    }

    // Crea la promise per caricare questa risorsa, MA PRIMA gestisci le dipendenze.
    let loadChainPromise;

    if (resourceData.deps && resourceData.deps.length > 0) {
      // console.log(`Risorsa ${handle} ha dipendenze: ${resourceData.deps.join(', ')}`);
      const dependencyPromises = resourceData.deps.map(depHandle => {
        return processResource(depHandle); // Processa ricorsivamente la dipendenza
      });

      loadChainPromise = Promise.all(dependencyPromises)
        .then(() => {
          // console.log(`Tutte le dipendenze per ${handle} sono state caricate. Ora carico ${handle}.`);
          return createLoadPromise(handle, resourceData); // Chiamata a createLoadPromise
        })
        .catch(error => {
          const mainErrorMsg = `Fallimento dipendenze per ${handle}`;
          console.error(mainErrorMsg + (error && error.message ? ` -> ${error.message}`: ''), error);
          // Rigetta la promise per questo handle se le sue dipendenze falliscono
          throw new Error(mainErrorMsg + (error && error.message ? ` -> ${error.message}`: ''));
        });
    } else {
      // Nessuna dipendenza, crea direttamente la promise di caricamento
      loadChainPromise = createLoadPromise(handle, resourceData); // Chiamata a createLoadPromise
    }

    // Memorizza la promise della catena (dipendenze + caricamento) per questo handle.
    resourcePromises[handle] = loadChainPromise;
    return loadChainPromise;
  }

  // -------------------------------------------------------------------------
  // 4. FUNZIONE ORCHESTRAZIONE E TRIGGER
  // -------------------------------------------------------------------------

  /**
   * Funzione principale per avviare il caricamento di tutte le risorse desktop
   * se le condizioni di larghezza schermo sono soddisfatte.
   */
  async function loadDesktopResources() {
    if (window.innerWidth <= breakpoint || initialLoadAttempted) {
      // Se siamo su mobile o il caricamento è già stato tentato, non fare nulla.
      if (initialLoadAttempted && window.innerWidth <= breakpoint) {
        // console.log("Finestra ridimensionata a mobile, ma le risorse desktop sono già state caricate/tentate.");
      }
      return;
    }

    // console.log('Condizioni soddisfatte per caricare risorse desktop.');
    initialLoadAttempted = true;
    document.body.classList.add('desktop-resources-loading');

    const allResourceProcessingPromises = [];
    for (const handle in resourcesToLoad) {
      if (resourcesToLoad.hasOwnProperty(handle)) {
        allResourceProcessingPromises.push(processResource(handle));
      }
    }

    // Usiamo Promise.allSettled per aspettare che tutte le promise siano concluse (risolte o rigettate)
    const results = await Promise.allSettled(allResourceProcessingPromises);
    // console.log('Processo di caricamento di tutte le risorse desktop completato.', results);

    let allSucceeded = true;
    results.forEach(result => {
      if (result.status === 'rejected') {
        allSucceeded = false;
        // L'errore specifico dovrebbe essere già stato loggato da processResource o createLoadPromise
        // console.error(`Fallimento durante il caricamento (dettaglio Promise.allSettled): ${result.reason ? result.reason.message : 'Errore sconosciuto'}`);
      }
      // else { console.log(`Risorsa (o catena) "${result.value}" caricata/processata con successo.`); }
    });

    document.body.classList.remove('desktop-resources-loading');
    if (allSucceeded) {
      document.body.classList.add('desktop-resources-loaded');
      // console.log('Tutte le risorse desktop richieste sono state caricate con successo (o le loro catene di dipendenze).');
      document.dispatchEvent(new CustomEvent('desktopResourcesReady'));
    } else {
      document.body.classList.add('desktop-resources-errors');
      console.warn('Alcune risorse desktop (o le loro dipendenze) non sono state caricate correttamente.');
    }
  }

  // -------------------------------------------------------------------------
  // 5. EVENT LISTENERS PER AVVIARE IL CARICAMENTO
  // -------------------------------------------------------------------------

  // Controlla al caricamento del DOM
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', loadDesktopResources);
  } else {
    // DOM già caricato
    loadDesktopResources();
  }

  // Controlla anche al resize della finestra (con un debounce per performance)
  let resizeTimeout;
  window.addEventListener('resize', function() {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(function() {
      // Carica solo se stiamo passando da mobile a desktop e non è stato ancora fatto.
      if (window.innerWidth > breakpoint && !initialLoadAttempted) {
        loadDesktopResources();
      }
    }, 250);
  });

})(); // Fine dell'IIFE