 jQuery(document).ready(function($) {
      // BOTÃO MENU
$(".button-collapse").sideNav();  

  // $('.carousel.carousel-slider').carousel({fullWidth: true,  });
    $('.parallax').parallax();    
          });



jQuery(document).ready(function($) {
              jQuery(".nav-item-dropdown-button").dropdown({constrainWidth: true});
              jQuery(".side-menu-nav-item-dropdown-button").dropdown({constrainWidth: false});
              jQuery(".button-collapse").sideNav();
              //$('.main-navigation').addClass('transparent');
              $('.custom-logo').addClass('responsive-img')
              
          });


  $(window).scroll(function(){
     if($(document).scrollTop() > 10){
       $('.main-navigation').removeClass('transparent');
       $('.main-navigation').addClass('hover');
     }else{
      $('.main-navigation').removeClass('hover');
      $('.main-navigation').addClass('transparent');
    
     }
    });