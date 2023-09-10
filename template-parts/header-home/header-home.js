/* ------------------- Definições das logos ------------------- */
var custom_logo_link = document.querySelector('.logo-wrapper');
var logo_white = document.querySelector('.logo-wrapper').innerHTML;
const width = window.innerWidth;
var action = width >= 768 ? 'logo_desktop' : 'logo_mobile';
var logo_colorida = {
  value: ''
};

createAjaxRequest(
  ajax_object.ajax_url,
  'POST',
  'action=' + action,
  function (response) {
    logo_colorida.value = response;
  },
  function (error) {
    console.error(error);
  }
);

/* ------------------- Modificações de estilo associadas ao scroll ------------------- */
window.addEventListener('scroll', function () {

  var elemento = document.getElementById("main-header");

  if (window.scrollY > 200) {

    elemento.style.backgroundColor = "white";
    elemento.classList.add('sticky');
    custom_logo_link.innerHTML = logo_colorida.value;
    document.querySelector('#main-header > nav').classList.remove('navbar-dark');

  } else {

    elemento.style.backgroundColor = "transparent";
    elemento.classList.remove('sticky');
    document.querySelector('.logo-wrapper').innerHTML = logo_white;
    document.querySelector('#main-header > nav').classList.add('navbar-dark');

  }
});

/* ------------------- Modificações de estilo associadas ao menu ------------------- */
$size = window.innerWidth;

document.querySelector('#main-header > nav').classList.add('navbar-dark');

if ($size < 1024) {
  var menu_button = document.querySelector('#main-header .navbar-toggler');
  console.log(menu_button)

  menu_button.addEventListener('click', function () {

    if( !this.classList.contains('collapsed') ) { // Menu aberto

      document.querySelector('#main-header').style.backgroundColor = "white";
      custom_logo_link.innerHTML = logo_colorida.value;
      document.querySelector('#main-header > nav').classList.remove('navbar-dark');

    } else {

      document.querySelector('#main-header').style.backgroundColor = "transparent";
      document.querySelector('.logo-wrapper').innerHTML = logo_white;
      document.querySelector('#main-header > nav').classList.add('navbar-dark');

    }

  });
} else {
}
