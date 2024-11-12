$(document).ready(function () {
  $(".destination-slider").owlCarousel({
    items: 4,
    loop: true,
    margin: 20,
    dots: true,
    dotsEach: true,
  });


  $('.main-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.nav-slider'
  });


  $('.nav-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.main-slider',
    dots: false,
    centerMode: true,
    focusOnSelect: true

    });
});


var header = document.getElementById("main-header")
window.addEventListener("scroll", function () {
  if (this.scrollY > 100) {
    header.classList.add("scrolled")
  } else {
    header.classList.remove("scrolled")
  }
})

