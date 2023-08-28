<?php
/**
 * Template Name: about
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Technacysolutions
 * @since Technacysolutions 1.0
 */

get_header();
?>
  <section class="about-section about-intro-top">
    <div class="video">
      <video src="/wp-content/uploads/technacy-we-are-technacy-smaller.mp4" autoplay playsinline muted loop></video>
    </div>

    <div class="testo-container js-about-1-section-video">
      <div class="testo inview-elem inview-elem-top js-about-1-section">
        WE ARE <span>TECHNACY</span>
      </div>
    </div>

    <div class="arrow-down bounce-down">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="Icon / Chevron Down">
          <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M12.3982 15.2025C12.1785 15.4221 11.8224 15.4221 11.6027 15.2025L5.86788 9.46759C5.64821 9.24792 5.64821 8.89182 5.86788 8.67214L6.13305 8.40694C6.35271 8.18727 6.70887 8.18727 6.92854 8.40694L12.0005 13.4789L17.0724 8.40694C17.2921 8.18727 17.6482 8.18727 17.8679 8.40694L18.1331 8.67214C18.3527 8.89182 18.3527 9.24792 18.1331 9.46759L12.3982 15.2025Z" fill="white"/>
        </g>
      </svg>
    </div>
  </section>

  <section class="about-section about-we-crush" id="pinContainer">
    <div class="panel panel-1">
      <div class="panel-content">
        <div class="content-width">
          <div class="sent-1 inview-elem inview-elem-top td-400">We crush</div>
          <div class="sent-2 inview-elem inview-elem-top td-550">every challenge <span class="sent-amp">&amp;</span></div>
          <div class="sent-3 inview-elem inview-elem-top td-620">
            <span class="sent-3-1 inview-elem inview-elem-top td-740">deliver with </span> <span class="sent-3-2 inview-elem inview-elem-top">style
            <span class="video">
              <video src="/wp-content/uploads/fashion-style.mp4" autoplay playsinline muted loop></video>
            </span>
          </span>
          </div>
        </div>
        <div class="dot dot-arrow">
          <span class="blob"></span>
          <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path id="Vector" d="M13.6394 3.04289L12.9323 2.33579L12.2252 3.04289L10.3452 4.92289L9.63871 5.62937L10.3446 6.33647L16.0811 12.0833H2.26562H1.26562V13.0833V15.75V16.75H2.26562H16.0811L10.3446 22.4969L9.63871 23.204L10.3452 23.9104L12.2252 25.7904L12.9323 26.4975L13.6394 25.7904L24.3061 15.1238L25.0132 14.4167L24.3061 13.7096L13.6394 3.04289Z" fill="white" stroke="white" stroke-width="2"/>
          </svg>
        </div>
      </div>
    </div>

    <div class="panel panel-2">
      <div class="panel-content">
        <div class="content-width">
          <div class="sent-1 inview-elem inview-elem-top td-620">No project is </div>
          <div class="sent-2 inview-elem inview-elem-top td-400">off-<br>limits-</div>
          <div class="sent-3 inview-elem inview-elem-top td-550">we've been<br> <span class="rocking">rocking</span> <span class="video">
              <video src="/wp-content/uploads/astronaut-smaller.mp4" autoplay playsinline muted loop></video>
            </span>
          </div>
          <div class="sent-4 inview-elem inview-elem-top td-550">it for a<br> decade!</div>
        </div>
        <div class="dot dot-arrow">
          <span class="blob white"></span>
          <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25.3712 14.1199L26.0783 13.4128L25.3712 12.7057L23.4912 10.8257L22.7847 10.1192L22.0776 10.825L16.3307 16.5616L16.3307 2.74609L16.3307 1.74609L15.3307 1.74609L12.6641 1.74609L11.6641 1.74609L11.6641 2.74609L11.6641 16.5616L5.9172 10.825L5.2101 10.1192L4.50362 10.8257L2.62362 12.7057L1.91651 13.4128L2.62362 14.1199L13.2903 24.7865L13.9974 25.4936L14.7045 24.7865L25.3712 14.1199Z" fill="black" stroke="white" stroke-width="2"/>
          </svg>
        </div>
      </div>
    </div>
  </section>

  <?php
  $txt = 'Our clients have been with us since the beginning, hooked on our top-notch solutions, service and transparency.<br><br>we are here to turn your ideas into reality!';
  $a_tmp = explode(' ', $txt);
  $a_tmp_finale = [];
  foreach ($a_tmp as $k => $v) {
    if ($k % 4 == 0) {
      $a_tmp_finale[] = '<span class="word-mod inview-elem inview-elem-left">' . $v . '</span>';
    }
    else if ($k % 3 == 0) {
      $a_tmp_finale[] = '<span class="slide-from-top delay-500">' . $v . '</span>';
    }
    else if ($k % 2 == 0) {
      $a_tmp_finale[] = '<span class="slide-from-top delay-700">' . $v . '</span>';
    }
    else {
      $a_tmp_finale[] = '<span class="slide-from-top delay-900">' . $v . '</span>';
    }
  }
  ?>
  <section class="about-section about-our-client-have">
    <div class="testo-container">
      <div class="content-width testo"><?php echo implode(' ', $a_tmp_finale); ?></div>
    </div>
  </section>

  <section class="sections-from-bottom" id="pinSectionFromBottom">
    <section class="panel panel-1 about-section about-world">
      <div class="video">
        <video class="js-video" src="/wp-content/uploads/technacysolutions-we-work-globally.mp4" autoplay playsinline muted loop></video>
      </div>

      <div class="testo-container">
        <div class="content-width testo inview-elem inview-elem-top">
          <div class="sent-1"><span class="js-video-hover">We work</span></div>
          <div class="sent-2"><span class="js-video-hover">Globally</span></div>
        </div>
        <div class="country-list">
          <div class="country country-1 inview-elem-top td-550">Saudi</div>
          <div class="country country-2 inview-elem-top td-740">Bahrain</div>
          <div class="country country-3 inview-elem-bottom td-620">Qatar</div>
          <div class="country country-4 inview-elem-bottom td-400">Oman</div>
          <div class="country country-5 inview-elem-bottom td-200">UAE</div>
          <div class="country country-6 inview-elem-top td-550">Holland</div>
          <div class="country country-7 inview-elem-bottom td-700">Mauritius</div>
          <div class="country country-8 inview-elem-right td-200">Seychelles</div>
          <div class="country country-9 inview-elem-right td-710">Egypt</div>
        </div>
      </div>
    </section>

    <section class="panel panel-2 about-partners">
      <div class="testo-container">
        <div class="content-width testo">
          <div class="title">Partners</div>
          <div class="logo-row logo-row-white inview-elem inview-elem-top">
            <div class="img-i img-i-first">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/white/logo-Active.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/white/logo-amino.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/white/logo-amt.png" alt=""></div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/white/logo-bns.png" alt=""></div>
            <div class="img-i img-i-last">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/white/logo-broadback.png" alt="">
            </div>
          </div>
          <div class="logo-row logo-row-white inview-elem inview-elem-top">
            <div class="img-i img-i-first">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/white/logo-CGC.png" alt=""></div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/white/logo-cubedots.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/white/logo-Dell.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/white/logo-Fortinet.png" alt="">
            </div>
            <div class="img-i img-i-last">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/white/logo-Harmonic.png" alt="">
            </div>
          </div>
          <div class="logo-row logo-row-white inview-elem inview-elem-top">
            <div class="img-i img-i-first">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/white/logo-IPmagic.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/white/logo-JMC-Group.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/white/logo-Min-erva.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/white/logo-Notomi.png" alt="">
            </div>
            <div class="img-i img-i-last">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/white/logo-Visual.png" alt="">
            </div>
          </div>

          <div class="logo-row logo-row-black inview-elem inview-elem-top">
            <div class="img-i img-i-first">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/black/logo-Active.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/black/logo-amino.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/black/logo-amt.png" alt=""></div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/black/logo-bns.png" alt=""></div>
            <div class="img-i img-i-last">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/black/logo-broadback.png" alt="">
            </div>
          </div>
          <div class="logo-row logo-row-black inview-elem inview-elem-top">
            <div class="img-i img-i-first">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/black/logo-CGC.png" alt=""></div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/black/logo-cubedots.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/black/logo-Dell.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/black/logo-Fortinet.png" alt="">
            </div>
            <div class="img-i img-i-last">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/black/logo-Harmonic.png" alt="">
            </div>
          </div>
          <div class="logo-row logo-row-black inview-elem inview-elem-top">
            <div class="img-i img-i-first">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/black/logo-IPmagic.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/black/logo-JMC-Group.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/black/logo-Min-erva.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/black/logo-Notomi.png" alt="">
            </div>
            <div class="img-i img-i-last">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/black/logo-Visual.png" alt="">
            </div>
          </div>


        </div>
      </div>
    </section>


    <section class="panel panel-3 about-section about-clients">
      <div class="testo-container">
        <div class="content-width testo">
          <div class="title">Clients</div>
          <div class="logo-row logo-row-white inview-elem inview-elem-top">
            <div class="img-i img-i-first">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-bairport.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-batelco.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-BIC.png" alt=""></div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-BTC.png" alt=""></div>
            <div class="img-i img-i-last">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-ccp.png" alt=""></div>
          </div>
          <div class="logo-row logo-row-white inview-elem inview-elem-top">
            <div class="img-i img-i-first">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-Emar.png" alt=""></div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-F1.png" alt=""></div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-formula-E.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-gulfir.png" alt="">
            </div>
            <div class="img-i img-i-last">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-icad.png" alt=""></div>
          </div>
          <div class="logo-row logo-row-white inview-elem inview-elem-top">
            <div class="img-i img-i-first">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-Kapsark.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-kohei.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-lambo.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-orange.png" alt="">
            </div>
            <div class="img-i img-i-last">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-stc.png" alt=""></div>
          </div>
          <div class="logo-row logo-row-white inview-elem inview-elem-top">
            <div class="img-i img-i-first">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-trined.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-vodafon.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-whirpool.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-youth.png" alt="">
            </div>
            <div class="img-i img-i-last">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/white/logo-zain.png" alt=""></div>
          </div>

          <div class="logo-row logo-row-black inview-elem inview-elem-top">
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-bairport.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-batelco.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-BIC.png" alt=""></div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-BTC.png" alt=""></div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-ccp.png" alt=""></div>
          </div>
          <div class="logo-row logo-row-black inview-elem inview-elem-top">
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-Emar.png" alt=""></div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-F1.png" alt=""></div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-formula-E.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-gulfir.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-icad.png" alt=""></div>
          </div>
          <div class="logo-row logo-row-black inview-elem inview-elem-top">
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-Kapsark.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-kohei.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-lambo.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-orange.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-stc.png" alt=""></div>
          </div>
          <div class="logo-row logo-row-black inview-elem inview-elem-top">
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-trined.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-vodafon.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-whirpool.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-youth.png" alt="">
            </div>
            <div class="img-i">
              <img src="/wp-content/themes/technacysolutions/assets/img/loghi-clienti/black/logo-zain.png" alt=""></div>
          </div>
        </div>
      </div>
    </section>
  </section>

  <section class="about-section about-testimonial">
    <div class="testo-container">
      <div class="content-width testo">
        <div class="title inview-elem inview-elem-top">What <span>they</span> say</div>
        <div class="testimonial-container swiper swiper-testimonial inview-elem inview-elem-left td-550">
          <div class="swiper-wrapper">
            <div class="testimonial-slide testimonial-slide-1 swiper-slide">
              <div class="img" style="background-image: url('/wp-content/themes/technacysolutions/assets/img/foto-marco-bonomo.jpg');">
                <img src="/wp-content/themes/technacysolutions/assets/img/foto-marco-bonomo.jpg">
              </div>
              <div class="data-container">
                <div class="data">
                  <div class="star">
                  <span><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.07088 0.667031C9.41462 -0.149428 10.5854 -0.149427 10.9291 0.667033L12.9579 5.48592C13.1029 5.83012 13.4306 6.0653 13.8067 6.09509L19.0727 6.51217C19.9649 6.58283 20.3267 7.68282 19.6469 8.25809L15.6348 11.6534C15.3482 11.8959 15.223 12.2765 15.3106 12.639L16.5363 17.7157C16.744 18.5758 15.7969 19.2557 15.033 18.7948L10.5245 16.0742C10.2025 15.8799 9.7975 15.8799 9.47548 16.0742L4.96699 18.7948C4.20311 19.2557 3.25596 18.5758 3.46363 17.7157L4.68942 12.639C4.77698 12.2765 4.65182 11.8959 4.36526 11.6534L0.353062 8.25809C-0.326718 7.68282 0.0350679 6.58283 0.927291 6.51217L6.19336 6.09509C6.5695 6.0653 6.89716 5.83012 7.04207 5.48592L9.07088 0.667031Z" fill="#FC0606"/>
</svg></span> <span><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.07088 0.667031C9.41462 -0.149428 10.5854 -0.149427 10.9291 0.667033L12.9579 5.48592C13.1029 5.83012 13.4306 6.0653 13.8067 6.09509L19.0727 6.51217C19.9649 6.58283 20.3267 7.68282 19.6469 8.25809L15.6348 11.6534C15.3482 11.8959 15.223 12.2765 15.3106 12.639L16.5363 17.7157C16.744 18.5758 15.7969 19.2557 15.033 18.7948L10.5245 16.0742C10.2025 15.8799 9.7975 15.8799 9.47548 16.0742L4.96699 18.7948C4.20311 19.2557 3.25596 18.5758 3.46363 17.7157L4.68942 12.639C4.77698 12.2765 4.65182 11.8959 4.36526 11.6534L0.353062 8.25809C-0.326718 7.68282 0.0350679 6.58283 0.927291 6.51217L6.19336 6.09509C6.5695 6.0653 6.89716 5.83012 7.04207 5.48592L9.07088 0.667031Z" fill="#FC0606"/>
</svg></span> <span><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.07088 0.667031C9.41462 -0.149428 10.5854 -0.149427 10.9291 0.667033L12.9579 5.48592C13.1029 5.83012 13.4306 6.0653 13.8067 6.09509L19.0727 6.51217C19.9649 6.58283 20.3267 7.68282 19.6469 8.25809L15.6348 11.6534C15.3482 11.8959 15.223 12.2765 15.3106 12.639L16.5363 17.7157C16.744 18.5758 15.7969 19.2557 15.033 18.7948L10.5245 16.0742C10.2025 15.8799 9.7975 15.8799 9.47548 16.0742L4.96699 18.7948C4.20311 19.2557 3.25596 18.5758 3.46363 17.7157L4.68942 12.639C4.77698 12.2765 4.65182 11.8959 4.36526 11.6534L0.353062 8.25809C-0.326718 7.68282 0.0350679 6.58283 0.927291 6.51217L6.19336 6.09509C6.5695 6.0653 6.89716 5.83012 7.04207 5.48592L9.07088 0.667031Z" fill="#FC0606"/>
</svg></span> <span><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.07088 0.667031C9.41462 -0.149428 10.5854 -0.149427 10.9291 0.667033L12.9579 5.48592C13.1029 5.83012 13.4306 6.0653 13.8067 6.09509L19.0727 6.51217C19.9649 6.58283 20.3267 7.68282 19.6469 8.25809L15.6348 11.6534C15.3482 11.8959 15.223 12.2765 15.3106 12.639L16.5363 17.7157C16.744 18.5758 15.7969 19.2557 15.033 18.7948L10.5245 16.0742C10.2025 15.8799 9.7975 15.8799 9.47548 16.0742L4.96699 18.7948C4.20311 19.2557 3.25596 18.5758 3.46363 17.7157L4.68942 12.639C4.77698 12.2765 4.65182 11.8959 4.36526 11.6534L0.353062 8.25809C-0.326718 7.68282 0.0350679 6.58283 0.927291 6.51217L6.19336 6.09509C6.5695 6.0653 6.89716 5.83012 7.04207 5.48592L9.07088 0.667031Z" fill="#FC0606"/>
</svg></span> <span><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.07088 0.667031C9.41462 -0.149428 10.5854 -0.149427 10.9291 0.667033L12.9579 5.48592C13.1029 5.83012 13.4306 6.0653 13.8067 6.09509L19.0727 6.51217C19.9649 6.58283 20.3267 7.68282 19.6469 8.25809L15.6348 11.6534C15.3482 11.8959 15.223 12.2765 15.3106 12.639L16.5363 17.7157C16.744 18.5758 15.7969 19.2557 15.033 18.7948L10.5245 16.0742C10.2025 15.8799 9.7975 15.8799 9.47548 16.0742L4.96699 18.7948C4.20311 19.2557 3.25596 18.5758 3.46363 17.7157L4.68942 12.639C4.77698 12.2765 4.65182 11.8959 4.36526 11.6534L0.353062 8.25809C-0.326718 7.68282 0.0350679 6.58283 0.927291 6.51217L6.19336 6.09509C6.5695 6.0653 6.89716 5.83012 7.04207 5.48592L9.07088 0.667031Z" fill="#FC0606"/>
</svg></span>
                  </div>
                  <div class="description">
                    "Technacy Solutions has strong expertise in system integration and high commitment to service excellence. They've demonstrated to be a trusted partner in the Video space, with in-depth technology know-how and a customer driven approach. Our overall experience has been extremely positive and we look forward to our continued collaboration in the years to come."
                  </div>
                  <div class="societa">
                    <div class="container">
                      <div class="nome">Marco Bonomi</div>
                      <div class="societa">VPS, EMEA</div>
                    </div>
                    <div class="logo">
                      <div class="logo-white">
                        <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/normal/logo-minerva-logo-66x50.png">
                      </div>
                      <div class="logo-black">
                        <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/normal/logo-minerva-logo-66x50.png">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="testimonial-slide testimonial-slide-2 swiper-slide">
              <div class="img" style="background-image: url('/wp-content/themes/technacysolutions/assets/img/ministry-of-youth-affairs.jpg');">
                <img src="/wp-content/themes/technacysolutions/assets/img/ministry-of-youth-affairs.jpg">
              </div>
              <div class="data-container">
                <div class="data">
                  <div class="star">
                  <span><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.07088 0.667031C9.41462 -0.149428 10.5854 -0.149427 10.9291 0.667033L12.9579 5.48592C13.1029 5.83012 13.4306 6.0653 13.8067 6.09509L19.0727 6.51217C19.9649 6.58283 20.3267 7.68282 19.6469 8.25809L15.6348 11.6534C15.3482 11.8959 15.223 12.2765 15.3106 12.639L16.5363 17.7157C16.744 18.5758 15.7969 19.2557 15.033 18.7948L10.5245 16.0742C10.2025 15.8799 9.7975 15.8799 9.47548 16.0742L4.96699 18.7948C4.20311 19.2557 3.25596 18.5758 3.46363 17.7157L4.68942 12.639C4.77698 12.2765 4.65182 11.8959 4.36526 11.6534L0.353062 8.25809C-0.326718 7.68282 0.0350679 6.58283 0.927291 6.51217L6.19336 6.09509C6.5695 6.0653 6.89716 5.83012 7.04207 5.48592L9.07088 0.667031Z" fill="#FC0606"/>
</svg></span> <span><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.07088 0.667031C9.41462 -0.149428 10.5854 -0.149427 10.9291 0.667033L12.9579 5.48592C13.1029 5.83012 13.4306 6.0653 13.8067 6.09509L19.0727 6.51217C19.9649 6.58283 20.3267 7.68282 19.6469 8.25809L15.6348 11.6534C15.3482 11.8959 15.223 12.2765 15.3106 12.639L16.5363 17.7157C16.744 18.5758 15.7969 19.2557 15.033 18.7948L10.5245 16.0742C10.2025 15.8799 9.7975 15.8799 9.47548 16.0742L4.96699 18.7948C4.20311 19.2557 3.25596 18.5758 3.46363 17.7157L4.68942 12.639C4.77698 12.2765 4.65182 11.8959 4.36526 11.6534L0.353062 8.25809C-0.326718 7.68282 0.0350679 6.58283 0.927291 6.51217L6.19336 6.09509C6.5695 6.0653 6.89716 5.83012 7.04207 5.48592L9.07088 0.667031Z" fill="#FC0606"/>
</svg></span> <span><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.07088 0.667031C9.41462 -0.149428 10.5854 -0.149427 10.9291 0.667033L12.9579 5.48592C13.1029 5.83012 13.4306 6.0653 13.8067 6.09509L19.0727 6.51217C19.9649 6.58283 20.3267 7.68282 19.6469 8.25809L15.6348 11.6534C15.3482 11.8959 15.223 12.2765 15.3106 12.639L16.5363 17.7157C16.744 18.5758 15.7969 19.2557 15.033 18.7948L10.5245 16.0742C10.2025 15.8799 9.7975 15.8799 9.47548 16.0742L4.96699 18.7948C4.20311 19.2557 3.25596 18.5758 3.46363 17.7157L4.68942 12.639C4.77698 12.2765 4.65182 11.8959 4.36526 11.6534L0.353062 8.25809C-0.326718 7.68282 0.0350679 6.58283 0.927291 6.51217L6.19336 6.09509C6.5695 6.0653 6.89716 5.83012 7.04207 5.48592L9.07088 0.667031Z" fill="#FC0606"/>
</svg></span> <span><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.07088 0.667031C9.41462 -0.149428 10.5854 -0.149427 10.9291 0.667033L12.9579 5.48592C13.1029 5.83012 13.4306 6.0653 13.8067 6.09509L19.0727 6.51217C19.9649 6.58283 20.3267 7.68282 19.6469 8.25809L15.6348 11.6534C15.3482 11.8959 15.223 12.2765 15.3106 12.639L16.5363 17.7157C16.744 18.5758 15.7969 19.2557 15.033 18.7948L10.5245 16.0742C10.2025 15.8799 9.7975 15.8799 9.47548 16.0742L4.96699 18.7948C4.20311 19.2557 3.25596 18.5758 3.46363 17.7157L4.68942 12.639C4.77698 12.2765 4.65182 11.8959 4.36526 11.6534L0.353062 8.25809C-0.326718 7.68282 0.0350679 6.58283 0.927291 6.51217L6.19336 6.09509C6.5695 6.0653 6.89716 5.83012 7.04207 5.48592L9.07088 0.667031Z" fill="#FC0606"/>
</svg></span> <span><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.07088 0.667031C9.41462 -0.149428 10.5854 -0.149427 10.9291 0.667033L12.9579 5.48592C13.1029 5.83012 13.4306 6.0653 13.8067 6.09509L19.0727 6.51217C19.9649 6.58283 20.3267 7.68282 19.6469 8.25809L15.6348 11.6534C15.3482 11.8959 15.223 12.2765 15.3106 12.639L16.5363 17.7157C16.744 18.5758 15.7969 19.2557 15.033 18.7948L10.5245 16.0742C10.2025 15.8799 9.7975 15.8799 9.47548 16.0742L4.96699 18.7948C4.20311 19.2557 3.25596 18.5758 3.46363 17.7157L4.68942 12.639C4.77698 12.2765 4.65182 11.8959 4.36526 11.6534L0.353062 8.25809C-0.326718 7.68282 0.0350679 6.58283 0.927291 6.51217L6.19336 6.09509C6.5695 6.0653 6.89716 5.83012 7.04207 5.48592L9.07088 0.667031Z" fill="#FC0606"/>
</svg></span>
                  </div>
                  <div class="description">
                    "I have always had positive experiences working with Technacy for the past couple of years. Technacy has always provided the most suitable and recommended solutions with the best price that is suitable for our business. I would highly recommend Technacy in the field of Innovation."
                  </div>
                  <div class="societa">
                    <div class="container">
                      <div class="nome">Nani Butti - Director, Information System</div>
                      <div class="societa">Information Systems Directorate</div>
                    </div>
                    <!--
                    <div class="logo">
                      <div class="logo-white">
                        <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/normal/logo-minerva-logo-66x50.png">
                      </div>
                      <div class="logo-black">
                        <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/normal/logo-minerva-logo-66x50.png">
                      </div>
                    </div>
                    -->
                  </div>
                </div>
              </div>
            </div>

            <div class="testimonial-slide testimonial-slide-2 swiper-slide">
              <div class="img" style="background-image: url('/wp-content/themes/technacysolutions/assets/img/technacy-Carlo-Boutagy.jpg');">
                <img src="/wp-content/themes/technacysolutions/assets/img/technacy-Carlo-Boutagy.jpg">
              </div>
              <div class="data-container">
                <div class="data">
                  <div class="star">
                  <span><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.07088 0.667031C9.41462 -0.149428 10.5854 -0.149427 10.9291 0.667033L12.9579 5.48592C13.1029 5.83012 13.4306 6.0653 13.8067 6.09509L19.0727 6.51217C19.9649 6.58283 20.3267 7.68282 19.6469 8.25809L15.6348 11.6534C15.3482 11.8959 15.223 12.2765 15.3106 12.639L16.5363 17.7157C16.744 18.5758 15.7969 19.2557 15.033 18.7948L10.5245 16.0742C10.2025 15.8799 9.7975 15.8799 9.47548 16.0742L4.96699 18.7948C4.20311 19.2557 3.25596 18.5758 3.46363 17.7157L4.68942 12.639C4.77698 12.2765 4.65182 11.8959 4.36526 11.6534L0.353062 8.25809C-0.326718 7.68282 0.0350679 6.58283 0.927291 6.51217L6.19336 6.09509C6.5695 6.0653 6.89716 5.83012 7.04207 5.48592L9.07088 0.667031Z" fill="#FC0606"/>
</svg></span> <span><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.07088 0.667031C9.41462 -0.149428 10.5854 -0.149427 10.9291 0.667033L12.9579 5.48592C13.1029 5.83012 13.4306 6.0653 13.8067 6.09509L19.0727 6.51217C19.9649 6.58283 20.3267 7.68282 19.6469 8.25809L15.6348 11.6534C15.3482 11.8959 15.223 12.2765 15.3106 12.639L16.5363 17.7157C16.744 18.5758 15.7969 19.2557 15.033 18.7948L10.5245 16.0742C10.2025 15.8799 9.7975 15.8799 9.47548 16.0742L4.96699 18.7948C4.20311 19.2557 3.25596 18.5758 3.46363 17.7157L4.68942 12.639C4.77698 12.2765 4.65182 11.8959 4.36526 11.6534L0.353062 8.25809C-0.326718 7.68282 0.0350679 6.58283 0.927291 6.51217L6.19336 6.09509C6.5695 6.0653 6.89716 5.83012 7.04207 5.48592L9.07088 0.667031Z" fill="#FC0606"/>
</svg></span> <span><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.07088 0.667031C9.41462 -0.149428 10.5854 -0.149427 10.9291 0.667033L12.9579 5.48592C13.1029 5.83012 13.4306 6.0653 13.8067 6.09509L19.0727 6.51217C19.9649 6.58283 20.3267 7.68282 19.6469 8.25809L15.6348 11.6534C15.3482 11.8959 15.223 12.2765 15.3106 12.639L16.5363 17.7157C16.744 18.5758 15.7969 19.2557 15.033 18.7948L10.5245 16.0742C10.2025 15.8799 9.7975 15.8799 9.47548 16.0742L4.96699 18.7948C4.20311 19.2557 3.25596 18.5758 3.46363 17.7157L4.68942 12.639C4.77698 12.2765 4.65182 11.8959 4.36526 11.6534L0.353062 8.25809C-0.326718 7.68282 0.0350679 6.58283 0.927291 6.51217L6.19336 6.09509C6.5695 6.0653 6.89716 5.83012 7.04207 5.48592L9.07088 0.667031Z" fill="#FC0606"/>
</svg></span> <span><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.07088 0.667031C9.41462 -0.149428 10.5854 -0.149427 10.9291 0.667033L12.9579 5.48592C13.1029 5.83012 13.4306 6.0653 13.8067 6.09509L19.0727 6.51217C19.9649 6.58283 20.3267 7.68282 19.6469 8.25809L15.6348 11.6534C15.3482 11.8959 15.223 12.2765 15.3106 12.639L16.5363 17.7157C16.744 18.5758 15.7969 19.2557 15.033 18.7948L10.5245 16.0742C10.2025 15.8799 9.7975 15.8799 9.47548 16.0742L4.96699 18.7948C4.20311 19.2557 3.25596 18.5758 3.46363 17.7157L4.68942 12.639C4.77698 12.2765 4.65182 11.8959 4.36526 11.6534L0.353062 8.25809C-0.326718 7.68282 0.0350679 6.58283 0.927291 6.51217L6.19336 6.09509C6.5695 6.0653 6.89716 5.83012 7.04207 5.48592L9.07088 0.667031Z" fill="#FC0606"/>
</svg></span> <span><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.07088 0.667031C9.41462 -0.149428 10.5854 -0.149427 10.9291 0.667033L12.9579 5.48592C13.1029 5.83012 13.4306 6.0653 13.8067 6.09509L19.0727 6.51217C19.9649 6.58283 20.3267 7.68282 19.6469 8.25809L15.6348 11.6534C15.3482 11.8959 15.223 12.2765 15.3106 12.639L16.5363 17.7157C16.744 18.5758 15.7969 19.2557 15.033 18.7948L10.5245 16.0742C10.2025 15.8799 9.7975 15.8799 9.47548 16.0742L4.96699 18.7948C4.20311 19.2557 3.25596 18.5758 3.46363 17.7157L4.68942 12.639C4.77698 12.2765 4.65182 11.8959 4.36526 11.6534L0.353062 8.25809C-0.326718 7.68282 0.0350679 6.58283 0.927291 6.51217L6.19336 6.09509C6.5695 6.0653 6.89716 5.83012 7.04207 5.48592L9.07088 0.667031Z" fill="#FC0606"/>
</svg></span>
                  </div>
                  <div class="description">
                    "I have always had positive experiences working with Technacy for the past couple of years. Technacy has always provided the most suitable and recommended solutions with the best price that is suitable for our business. I would highly recommend Technacy in the field of Innovation."
                  </div>
                  <div class="societa">
                    <div class="container">
                      <div class="nome">Carlo Boutagy</div>
                      <div class="societa">CBX</div>
                    </div>
                    <div class="logo">
                      <div class="logo-white">
                        <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/normal/logo-cbx-66x50.jpg">
                      </div>
                      <div class="logo-black">
                        <img src="/wp-content/themes/technacysolutions/assets/img/loghi-partners/normal/logo-cbx-66x50.jpg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-buttons">
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev">
              <svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="24.5" cy="24" r="24" fill="white"/>
                <path d="M24.5 16L23.09 17.41L28.67 23H16.5V25H28.67L23.09 30.59L24.5 32L32.5 24L24.5 16Z" fill="black"/>
              </svg>
            </div>
            <div class="swiper-button-next">
              <svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="24.5" cy="24" r="24" fill="white"/>
                <path d="M24.5 16L23.09 17.41L28.67 23H16.5V25H28.67L23.09 30.59L24.5 32L32.5 24L24.5 16Z" fill="black"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
$a = [];
for ($i = 0; $i < 20; $i++) {
  $a[] = '<a href="/projects">projects</a>';
}
?>
  <section class="page-link">
    <div class="page-link-top-line" data-paroller-factor="0.35" data-paroller-type="foreground" data-paroller-direction="horizontal" data-paroller-transition="transform .35s linear">
      <?php echo implode('<span class="trattino">-</span>', $a); ?>
    </div>
    <div class="page-link-bottom-line" data-paroller-factor="-0.35" data-paroller-type="foreground" data-paroller-direction="horizontal" data-paroller-transition="transform .35s linear">
      <?php echo implode('<span class="trattino">-</span>', $a); ?>
    </div>
  </section>

<?php
get_footer();
