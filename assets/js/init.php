<script>
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
     if($(document).scrollTop() >50){
       $('.main-navigation').removeClass('transparent');
       $('.main-navigation').addClass('hover');
       $('.custom-logo').addClass('animated jello');
       $('.btnCroll,.pageTituloCroll').addClass('animated swing');
       $('.iconCroll,.ParallaxPageCroll').addClass('animated flash');
       $('.pHomeCroll').addClass('animated bounce');
     }else{
      $('.main-navigation').removeClass('hover');
      $('.main-navigation').addClass('transparent');
      $('.custom-logo').removeClass('animated jello');
      $('.btnCroll,.pageTituloCroll').removeClass('animated swing');
      $('.iconCroll, .ParallaxPageCroll').removeClass('animated flash');
      $('.pHomeCroll').removeClass('animated bounce');
    
     }
    });




    $(window).scroll(function(){
     if($(document).scrollTop()>200){
       $('.postLeft').addClass('animated bounceInLeft');
       $('.postRight').addClass('animated bounceInRight');
    }else{
 
      $('.postLeft').removeClass('animated bounceInLeft');
      $('.postRight').removeClass('animated bounceInRight');
    
     }
    });
        $(window).scroll(function(){
     if($(document).scrollTop() >700){
       $('.postLeft').addClass('animated bounceInLeft');
       $('.postRight').addClass('animated bounceInRight');
    }else{
 
      $('.postLeft').removeClass('animated bounceInLeft');
      $('.postRight').removeClass('animated bounceInRight');
    
     }
    });



    $(window).scroll(function(){
     if($(document).scrollTop() >200){
       $('.pageTituloCroll2').addClass('animated flash');

    }else{
 
      $('.pageTituloCroll2').removeClass('animated flash');
     
    
     }
    });    
      




      



  </script>