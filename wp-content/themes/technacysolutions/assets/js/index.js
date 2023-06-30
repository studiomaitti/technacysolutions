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


});
