document.addEventListener("DOMContentLoaded", () => {
  //CAMBIO COLORE
  document.querySelector('.js-dark-mode').addEventListener('change', function (ev) {
    if (ev.target.checked === true) {
      document.body.classList.add('light-mode');
    }
    else {
      document.body.classList.remove('light-mode');
    }
  })

  //MENU
  document.querySelector('.js-close-menu').addEventListener('click', function (ev) {
    ev.preventDefault();

    document.querySelector('.js-menu').style.display = 'none';
  })
  document.querySelector('.js-open-menu').addEventListener('click', function (ev) {
    ev.preventDefault();

    document.querySelector('.js-menu').style.display = 'flex';
  })

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //HOME PAGE
  if (document.body.classList.contains('home')){
    // 1° section: Controllo dimensione video
    /*
    var elem_video_cont = document.querySelector('.home-intro-top-hover-video');
    var elem_video = document.querySelector('.home-intro-top-hover-video video');
    if(elem_video.offsetWidth < elem_video_cont.offsetWidth){
      elem_video.style.width = elem_video_cont.offsetWidth + 'px';
    }
    window.addEventListener("resize", function (ev) {
      if(elem_video.offsetWidth < elem_video_cont.offsetWidth){
        elem_video.style.width = elem_video_cont.offsetWidth + 'px';
      }
    });
    */
    jQuery('.effetto-fascia-rossa').on('inview', function (event, isInView) {
      if (isInView) {
        // element is now visible in the viewport
        jQuery(this).addClass('is-inview');
      } else {
        jQuery(this).removeClass('is-inview');
        // element has gone out of viewport
        // $(this).removeClass('is-inview-elem');
      }
    });

    // 2° section: Animazione
    var controller = new ScrollMagic.Controller({
      globalSceneOptions: {
        triggerHook: 0.05,
        duration: "250%"
      }
    });

    var trigger = document.querySelectorAll(".home-video-scroll-inner");
    var slide = document.querySelectorAll(".home-video-scroll-livello-medio");

    var scenaTxt = new ScrollMagic.Scene({ triggerElement: trigger })
      .setClassToggle(".home-video-scroll-text", "is-fixed");

    var scene = new ScrollMagic.Scene({
      triggerElement: slide
    })
      .setPin(slide, { pushFollowers: false });

    controller.addScene([scenaTxt, scene]);

    // 3° section: category
    // define movement of panels
    var wipeAnimation = new TimelineMax()
      .fromTo(".category-section .panel.panel-2", 1, {y:  "100%"}, {y: "0%", ease: Linear.easeNone}); // in from top
    // create scene to pin and link animation
    new ScrollMagic.Scene({
      triggerElement: "#pinCategorySection",
      triggerHook: "onLeave",
      duration: "300%"
    })
      .setPin("#pinCategorySection")
      .setTween(wipeAnimation)
      .addIndicators() // add indicators (requires plugin)
      .addTo(controller);

  }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //ABOUT
  if (document.body.classList.contains('page-template-page-template--about')) {
    // init
    var controller = new ScrollMagic.Controller();

    // define movement of panels
    var wipeAnimation = new TimelineMax()
      .fromTo(".about-section .panel.panel-2", 1, {x:  "100%"}, {x: "0%", ease: Linear.easeNone}); // in from top

    // create scene to pin and link animation
    new ScrollMagic.Scene({
      triggerElement: "#pinContainer",
      triggerHook: "onLeave",
      duration: "300%"
    })
      .setPin("#pinContainer")
      .setTween(wipeAnimation)
      .addIndicators() // add indicators (requires plugin)
      .addTo(controller);

    var wipeAnimation = new TimelineMax()
      .fromTo(".sections-from-bottom .panel.panel-2", 1, {y:  "100%"}, {y: "0%", ease: Linear.easeNone})
      .fromTo(".sections-from-bottom .panel.panel-3", 1, {y:  "100%"}, {y: "0%", ease: Linear.easeNone})
    ; // in from top

    // create scene to pin and link animation
    new ScrollMagic.Scene({
      triggerElement: "#pinSectionFromBottom",
      triggerHook: "onLeave",
      duration: "300%"
    })
      .setPin("#pinSectionFromBottom")
      .setTween(wipeAnimation)
      .addIndicators() // add indicators (requires plugin)
      .addTo(controller);


    var about_we_are_tech = document.querySelector('.about-intro-top-hover-testo');
    if (about_we_are_tech) {
      about_we_are_tech.onmouseover = function (event) {
        var target = event.target;
        target.parentElement.classList.add('hover');
      };

      about_we_are_tech.onmouseout = function (event) {
        var target = event.target;
        target.parentElement.classList.remove('hover');
      };
    }

    var div_swiper_testi = document.querySelector('.swiper-testimonial');
    if (div_swiper_testi) {
      const swiper_testi = new Swiper('.swiper-testimonial', {
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        },

        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    }

    var video_hover = document.querySelectorAll('.js-video-hover');
    var obj_video = document.querySelector('.js-video');
    if (video_hover.length) {
      video_hover.forEach(function (elem) {
        elem.onmouseover = function (event) {
          obj_video.pause();

          document.querySelectorAll('.country').forEach(function (elem) {
            elem.classList.add('is-inview-elem');
          })
        };

        elem.onmouseout = function (event) {
          obj_video.play();

          var a_pos = ['country-1', 'country-2', 'country-3', 'country-4', 'country-5', 'country-6', 'country-7', 'country-8', 'country-9', 'country-10'];
          shuffle_array(a_pos);

          document.querySelectorAll('.country').forEach(function (elem, key) {
            elem.classList.remove('is-inview-elem');

            /*
            window.setTimeout(function () {
              var prefix = "country-";
              var classes = elem.className.split(" ").filter(function(c) {
                return c.lastIndexOf(prefix, 0) !== 0;
              });
              elem.className = classes.join(" ").trim();
              console.log(a_pos[key]);
              //elem.classList.add(a_pos[key]);
            }, 1200);
            +/
             */
          })

        };
      })
    }

    /*
    jQuery(".about-our-client-have .testo").lettering('words');
    var all_words = document.querySelectorAll(".about-our-client-have .testo span");
    if(all_words.length){
      all_words.forEach(function(elem, key){
        elem.classList.add('word-mod-i');

        if(key%4 == 0){
          elem.classList.add('word-mod');
          elem.classList.add('inview-elem');
          elem.classList.add('inview-elem-left');
        } else if(key%3 == 0){
          elem.classList.add('slide-from-top');
          elem.classList.add('delay-500');
        } else if(key%2 == 0){
          elem.classList.add('slide-from-top');
          elem.classList.add('delay-700');
        } else {
          elem.classList.add('slide-from-top');
          elem.classList.add('delay-900');
        }
      });


    }
    */

  jQuery('.about-our-client-have .testo .slide-from-top').on('inview', function (event, isInView) {
      if (isInView) {
        // element is now visible in the viewport
          jQuery(this).addClass('slide-from-top-delay');
      } else {
        // element has gone out of viewport
        // $(this).removeClass('is-inview-elem');
      }
    });

  }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  /// ARCHIVE
  if (document.body.classList.contains('archive')){
    var controller = new ScrollMagic.Controller();

    var wipeAnimation = new TimelineMax()
      .fromTo(".page-link", 1, {opacity:1}, {opacity:0.3, ease: Linear.easeNone});

    // create scene to pin and link animation
    new ScrollMagic.Scene({
      triggerElement: "#main",
      triggerHook: 0.6,
      duration: "100%"
    })
      .setTween(wipeAnimation)
      .addIndicators({name: "1 (duration: 0)"}) // add indicators (requires plugin)
      .addTo(controller);

  }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  /// SINGLE PROJECT
  if (document.body.classList.contains('single-projects')){
    jQuery('.owl-carousel').owlCarousel({
      loop:true,
      autoWidth:true,
      items:4,
      nav:true,
      navText: [
        "<img src='/wp-content/themes/technacysolutions/assets/img/arrow-navigation.svg' class='prev'>",
        "<img src='/wp-content/themes/technacysolutions/assets/img/arrow-navigation.svg' class='next'>"
      ]

    })
  }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  /// PAROLE IN FONDO
  jQuery("[data-paroller-factor]").paroller();


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // Inview elementi
  jQuery('.inview-elem').on('inview', function (event, isInView) {
    if (isInView) {
      // element is now visible in the viewport
      jQuery(this).addClass('is-inview-elem');
    } else {
      // element has gone out of viewport
      // $(this).removeClass('is-inview-elem');
    }
  });

});

function shuffle_array(array) {
  let currentIndex = array.length,  randomIndex;

  // While there remain elements to shuffle.
  while (currentIndex != 0) {

    // Pick a remaining element.
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;

    // And swap it with the current element.
    [array[currentIndex], array[randomIndex]] = [
      array[randomIndex], array[currentIndex]];
  }

  return array;
}
