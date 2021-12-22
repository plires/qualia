const toggle = document.getElementById('toggleIcon')
const hamburger = document.getElementById('hamburger')
const whatsapp = document.getElementById('whatsapp')
const nav = document.getElementById('menu')
const header = document.getElementsByTagName('header')
const nav_buttons = document.getElementsByClassName('btn_to')

function menuToggle() {
	nav.classList.toggle('active')
	toggle.classList.toggle('active')
	
	if (hamburger.classList.contains("fa-bars")) {
		hamburger.classList.remove('fa-bars')
		hamburger.classList.add('fa-times')
	} else {
		hamburger.classList.add('fa-bars')
		hamburger.classList.remove('fa-times')
	}
}

for (var i = 0; i < nav_buttons.length; i++) { // nav cuando se de click en botones en formato mobile

  nav_buttons[i].addEventListener('click', function(e) {

    if (document.body.getBoundingClientRect().width < 1024) { // chequea el ancho de la pantalla
      menuToggle()
    } 

  })

}

toggle.addEventListener('click', function(){
  menuToggle()
});

var scrollPos = 0;
window.addEventListener('scroll', function(){

  if ( (document.body.getBoundingClientRect()).top < 0 ) {
    header[0].classList.add('small')
  } else {
    header[0].classList.remove('small')
  }

});

AOS.init({
  easing: 'ease'
});

// jquery.easing
$(function() {
  $('.btn_to').bind('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - 100
    }, 1000, 'easeInOutExpo');
    event.preventDefault();
  });
});

function setLinkWhatsapp() {
  if (window.innerWidth < 768) {
    whatsapp.setAttribute('href', `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=Hola!%20Necesito%20hacer%20una%20consulta!`);
  }
  else {
    whatsapp.setAttribute('href', `https://web.whatsapp.com/send?phone=${whatsappNumber}&text=Hola!%20Necesito%20hacer%20una%20consulta!`);
  }
}

setLinkWhatsapp();

