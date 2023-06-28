document.addEventListener("DOMContentLoaded", () => {
  //CAMBIO COLORE
  document.querySelector('.js-dark-mode').addEventListener('change', function (ev) {
    if(ev.target.checked === true){
      document.body.classList.add('light-mode');
    } else {
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

  //ABOUT
  var about_we_are_tech = document.querySelector('.about-intro-top-hover-testo');
  if(about_we_are_tech){
    about_we_are_tech.onmouseover = function(event) {
      var target = event.target;
      target.parentElement.classList.add('hover');
    };

    about_we_are_tech.onmouseout = function(event) {
      var target = event.target;
      target.parentElement.classList.remove('hover');
    };
  }
});
