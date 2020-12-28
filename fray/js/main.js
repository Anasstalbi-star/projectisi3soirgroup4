jQuery(function ($) {
    'use strict';
    
  
    $(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
    });
    
 
   
     function showdrop(){
       
         $('.drop').css('display','block');
     };
    
    
     // $(document).ready shorthand
            /* Every time the window is scrolled ... */
            $(window).scroll( function(){
                
                
               
                
        
                
                /*stick navbar */
            
                
                   if ($(window).scrollTop() >= 700) {
                       
                            $('#nav-header').addClass('navstiky');
                            $('.header ul').addClass('ul-padding-top');
                            $('.header li a').addClass('text-stiky');
                            $('.header .logo').addClass('text-stiky');
                     }
                    if($(window).scrollTop() <= 20){
                        
                            $('#nav-header').removeClass('navstiky');
                            $('.header ul').removeClass('ul-padding-top');
                            $('.header li a').removeClass('text-stiky');
                            $('.header .logo').removeClass('text-stiky')
                    }
                    
                   
                    

                    
                     
                
                /* Check the location of each desired element */
                $('.hideme').each( function(i){

                    var bottom_of_object = $(this).position().top + $(this).outerHeight();
                    var bottom_of_window = $(window).scrollTop() + $(window).height();

                    /* If the object is completely visible in the window, fade it it */
                    if( bottom_of_window > bottom_of_object ){

                        $(this).animate({'opacity':'1'},300);

                    }

                });
                
                
                

            });
    



// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });



    
    
    
});
