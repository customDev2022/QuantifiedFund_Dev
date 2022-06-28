// Mobile menu	
$( document ).ready(function() {
   $(".rmenubar").click(function(){
   $(".cmenu").toggleClass("navopen");
   $(".rmenubar").find('i').toggleClass('fa-bars').toggleClass('fa-times');
});
});

//  sticky header
window.onscroll = function() {myFunction()};
var header = document.getElementById("topHeader");
var sticky = header.offsetTop;
function myFunction() {
if (window.pageYOffset > sticky) {
header.classList.add("sticky");
} else {
header.classList.remove("sticky");
}
}

// sticky header color change


$(document).ready(function(){
  $(".dropdownmenu").hover(function(){
     $(".header").toggleClass("lightbg");
    });
});


// Header Mobile Accordion

$(".dropdownmenu a").click(function(){
    $(".dropdownmenu").removeClass("showmenu");
    $(this).parent().addClass("showmenu");
});



// Footer Mobile Accordion

$(".footer_right_block > h4").click(function(){
    $(".footer_right_block").removeClass("show");
    $(this).parent().addClass("show");
});

// First quarter slider for mobile


jQuery("#fundnamecarousel").owlCarousel({
    autoplay: true,
    lazyLoad: true,
    loop: true,
    margin: 20,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    // animateOut: 'fadeOut',
    // animateIn: 'fadeIn',
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 7000,
    smartSpeed: 800,
    nav: true,
    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 2
      },
      1024: {
        items: 3
      },
      1366: {
        items: 3
      }
    }
  });