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
  jQuery("[data-paroller-factor]").paroller();

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //HOME PAGE
  if (document.body.classList.contains('home')){
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
        };

        elem.onmouseout = function (event) {
          obj_video.play();
        };
      })
    }

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

  }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  /// SINGLE PROJECT
  if (document.body.classList.contains('single-projects')){
    jQuery('.owl-carousel').owlCarousel({
      autoWidth:true,
      items:4,
      nav:true,
    })
  }

});
