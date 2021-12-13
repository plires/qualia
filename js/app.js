const toggle = document.getElementById('toggleIcon')
const hamburger = document.getElementById('hamburger')
const whatsapp = document.getElementById('whatsapp')
const nav = document.getElementById('menu')
const header = document.getElementsByTagName('header')
const nav_buttons = document.getElementsByClassName('btn_to')

console.log(whatsappNumber)

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
  // Global settings:
  // disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  // startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  // initClassName: 'aos-init', // class applied after initialization
  // animatedClassName: 'aos-animate', // class applied on animation
  // useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  // disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  // debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  // throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  // offset: 120, // offset (in px) from the original trigger point
  // delay: 0, // values from 0 to 3000, with step 50ms
  // duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  // once: false, // whether animation should happen only once - while scrolling down
  // mirror: false, // whether elements should animate out while scrolling past them
  // anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

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

