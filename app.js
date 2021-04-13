const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");
const menu = document.querySelector(".glyphicon glyphicon-menu-hamburger");

hamburger.addEventListener('click', () =>{
  navLinks.classList.toggle("open");
 

});

function myFunction(x) {
  x.classList.toggle("change");
}

 $(".carousel").owlCarousel({
  margin: 20,
  loop: true,
  autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      nav: false,
    },
    600: {
      items: 2,
      nav: false,
    },
    1000: {
      items: 3,
      nav: false,
    },
  },
});





//  document.getElementById("hamburger").className = "glyphicon glyphicon-remove"; 



