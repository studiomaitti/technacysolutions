
jQuery(window).on('mousemove', moveCursor);

function moveCursor(e) {
  console.log('#########################');
  console.log(e);
  console.log('pageY: ' + e.pageY + ' pageX: ' + e.pageX);
  console.log('offsetY: ' + e.offsetY + ' offsetX: ' + e.offsetX);
  console.log('screenY: ' + e.screenY + ' screenY: ' + e.screenX);
  console.log('screenY: ' + e.y + ' screenY: ' + e.x);
  //debugger;
  if (window.mobileCheck() === false) {
    var $cursor = jQuery('.cursor');

    $cursor.addClass('is-moving');
    $cursor.css({top: e.originalEvent.y, left: e.originalEvent.x});

    clearTimeout(timer);

    var timer = setTimeout(function () {
      $cursor.removeClass('is-moving');
    }, 300);
  }
}

document.addEventListener("DOMContentLoaded", () => {
  //CAMBIO COLORE
  //Controllo il cookie
  if(getCookie('dmode') == '1'){
    document.body.classList.add('light-mode');
    document.querySelector('.js-dark-mode').checked = true;
  }

  document.querySelector('.js-dark-mode').addEventListener('change', function (ev) {
    if (ev.target.checked === true) {
      document.body.classList.add('light-mode');
      setCookie('dmode', '1', 1);
    }
    else {
      document.body.classList.remove('light-mode');
      setCookie('dmode', '0', -1);
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
  if (document.body.classList.contains('home')) {
    /// 1° SECTION: video in bg on over text
    var intro_sentence = document.querySelectorAll('.js-hover-intro');

    if (intro_sentence.length) {
      intro_sentence.forEach(function (elem) {
        elem.onmouseover = function (event) {
          var num_video = this.getAttribute('data-id-video');
          var video = document.querySelector('.home-intro-top-hover .video-' + num_video);

          if (video) {
            video.play();
            video.classList.add('selected');
          }
        };

        elem.onmouseout = function (event) {
          var num_video = this.getAttribute('data-id-video');
          var video = document.querySelector('.home-intro-top-hover .video-' + num_video);

          if (video) {
            //video.play();
            //video.classList.remove('selected');
          }
        };
      })
    }

    /// 2° SECTION: Animazione video sotto
    if (window.mobileCheck() === false) {
      var controller = new ScrollMagic.Controller({
        globalSceneOptions: {
          triggerHook: 0.05,
          duration: "250%"
        }
      });

      var trigger = document.querySelectorAll(".home-video-scroll-inner");
      var slide = document.querySelectorAll(".home-video-scroll-livello-medio");

      var scenaTxt = new ScrollMagic.Scene({triggerElement: trigger})
        .setClassToggle(".home-video-scroll-text", "is-fixed");

      var scene = new ScrollMagic.Scene({
        triggerElement: slide
      })
        .setPin(slide, {pushFollowers: false});

      controller.addScene([scenaTxt, scene]);
    }


    /// 3° SECTION: video in bg on over text
    if (window.mobileCheck() === false) {
      // element has gone out of viewport
      jQuery('.effetto-fascia-rossa').on('inview', function (event, isInView) {
        if (isInView) {
          // element is now visible in the viewport
          jQuery(this).addClass('is-inview');
        }
        else {
          jQuery(this).removeClass('is-inview');
          // element has gone out of viewport
          // $(this).removeClass('is-inview-elem');
        }
      });
    }


    /// 4° SECTION:
    var wipeAnimation = new TimelineMax()
      .fromTo(".category-section .panel.panel-2", 1, {x: "100%"}, {x: "0%", ease: Linear.easeNone});

    new ScrollMagic.Scene({
      triggerElement: "#pinCategorySection",
      triggerHook: "onLeave",
      duration: "300%"
    })
      .setPin("#pinCategorySection")
      .setTween(wipeAnimation)
      //.addIndicators() // add indicators (requires plugin)
      .addTo(controller);

  }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //ABOUT
  if (document.body.classList.contains('page-template-page-template--about')) {
    document.querySelector('.star').addEventListener('click', function (ev) {
      document.querySelectorAll('.cat-i').forEach(function (elem) {
        if (elem.classList.contains('opened')) {
          elem.classList.remove('opened');
        }
        else {
          elem.classList.add('opened');
        }
      })
    });

    var tmp = document.querySelector('.js-about-1-section');
    if (tmp) {
      tmp.onmouseover = function (event) {
        document.querySelector('.js-about-1-section-video').classList.add('hide-blur');
      };

      tmp.onmouseout = function (event) {
        document.querySelector('.js-about-1-section-video').classList.remove('hide-blur');
      };
    }

    // init
    var controller = new ScrollMagic.Controller();

    // define movement of panels
    var wipeAnimation = new TimelineMax()
      .fromTo(".about-section .panel.panel-2", 1, {x: "100%"}, {x: "0%", ease: Linear.easeNone}); // in from top

    // create scene to pin and link animation
    new ScrollMagic.Scene({
      triggerElement: "#pinContainer",
      triggerHook: "onLeave",
      duration: "300%"
    })
      .setPin("#pinContainer")
      .setTween(wipeAnimation)
      //.addIndicators() // add indicators (requires plugin)
      .addTo(controller);

    var wipeAnimation = new TimelineMax()
      .fromTo(".sections-from-bottom .panel.panel-2", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone})
      .fromTo(".sections-from-bottom .panel.panel-3", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone})
    ; // in from top

    // create scene to pin and link animation
    new ScrollMagic.Scene({
      triggerElement: "#pinSectionFromBottom",
      triggerHook: "onLeave",
      duration: "300%"
    })
      .setPin("#pinSectionFromBottom")
      .setTween(wipeAnimation)
      //.addIndicators() // add indicators (requires plugin)
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
          //obj_video.pause();

          document.querySelectorAll('.country').forEach(function (elem) {
            elem.classList.add('is-inview-elem');
          })
        };

        elem.onmouseout = function (event) {
          //obj_video.play();

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

    jQuery('.about-our-client-have .testo .slide-from-top').on('inview', function (event, isInView) {
      if (isInView) {
        // element is now visible in the viewport
        jQuery(this).addClass('slide-from-top-delay');
      }
      else {
        // element has gone out of viewport
        jQuery(this).removeClass('slide-from-top-delay');
      }
    });
  }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  /// ARCHIVE
  if (document.body.classList.contains('archive')) {
    var controller = new ScrollMagic.Controller();

    var wipeAnimation = new TimelineMax()
      .fromTo(".page-link", 1, {opacity: 1}, {opacity: 0.3, ease: Linear.easeNone})
    ;
    // create scene to pin and link animation
    new ScrollMagic.Scene({
      triggerElement: "#main",
      triggerHook: 0.6,
      duration: "100%"
    })
      .setTween(wipeAnimation)
      //.addIndicators({name: "1 (duration: 0)"}) // add indicators (requires plugin)
      .addTo(controller);
  }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  /// SINGLE PROJECT
  if (document.body.classList.contains('single-projects')) {
    jQuery('.owl-carousel').owlCarousel({
      loop: true,
      autoWidth: true,
      items: 4,
      margin: 20,
      nav: true,
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
    }
    else {
      if (window.mobileCheck() === false) {
        // element has gone out of viewport
        jQuery(this).removeClass('is-inview-elem');
      }
    }
  });

  //MOUSE EFFECT
  var ham_cir = document.querySelectorAll('.js-dot-to-cicle');
  var cursor = document.querySelector('.cursor');
  if (ham_cir.length) {
    ham_cir.forEach(function (elem) {
      elem.onmouseover = function (event) {
        console.log(event.target);
        console.log(event.target.classList.contains('js-white-cicle'));

        if (event.target.classList.contains('js-white-cicle') === true) {
          cursor.classList.add('white');
        }

        cursor.classList.add('is-hover');
      };
    })

    ham_cir.forEach(function (elem) {
      elem.onmouseout = function (event) {
        cursor.classList.remove('white');
        cursor.classList.remove('is-hover');
      };
    })
  }

  //GO BACK
  var go_back = document.querySelector('.js-go-back');
  if (go_back) {
    go_back.addEventListener('click', function (ev) {
      history.go(-1);
    })
  }

});

window.addEventListener("scroll", function (ev) {
});



function shuffle_array(array) {
  let currentIndex = array.length, randomIndex;

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

window.mobileCheck = function () {
  let check = false;
  (function (a) {
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
  })(navigator.userAgent || navigator.vendor || window.opera);
  return check;
};

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}