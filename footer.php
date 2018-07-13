    <footer class="wrapper">
        
        <div class="footer-col-1">
            
            <a href="http://panikadrowa.pl/"><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/Pani-Kadrowa_logo_CMYK.png" alt="Pani Kadrowa logo"></a>       

        </div>
        
        <div class="footer-linki">
            <a href="http://panikadrowa.pl" class="home">Home</a> | 
            <a href="http://panikadrowa.pl/cennik" class="cennik">Cennik</a> | 
            <a href="http://panikadrowa.pl/cennik#masz-pytania" class="kontakt">Kontakt</a> | 
            <a href="<?php the_field('link_do_panelu_klienta'); ?>">Panel klienta</a>
        </div>
        
        <div class="credits">            
            Copyright 2017 | Projekt graficzny: <a href="https://www.behance.net/sardlorladcaab">Micha³ I³enda</a> | Implementacja i wdro¿enie: <a href="https://www.facebook.com/pchociej"> Patrycja Chociej</a>
        </div>
        
        
    </footer>
    
    
    
    <script>
        
        ////////// TILT MAIN BANNER /////////////
        
        $(document).ready(function() {
            var movementStrength = 40;
            var movementStrength2 = 10;
            var height = movementStrength / $(window).height();
            var width = movementStrength / $(window).width();
            var height2 = movementStrength2 / $(window).height();
            var width2 = movementStrength2 / $(window).width();
            $("#main-banner").mousemove(function(e){
                      var pageX = e.pageX - ($(window).width() / 2);
                      var pageY = e.pageY - ($(window).height() / 2);
                      var newvalueX = width * pageX * -1 - 40;
                      var newvalueY = height * pageY * -1 - 80;
                      $('#main-banner').css("background-position", newvalueX+"px     "+newvalueY+"px");
            });
            $("#main-banner").mousemove(function(e){
                      var pageX2 = e.pageX - ($(window).width() / 2);
                      var pageY2 = e.pageY - ($(window).height() / 2);
                      var newvalueX2 = width2 * pageX2 * -1 - 10;
                      var newvalueY2 = height2 * pageY2 * -1 - 20;
                      $('#pink-rect').css("left", newvalueX2+"px");
                      $('#pink-rect').css("top", newvalueY2+"px");
            });
        });

    
        ////// SLIDING NAVIGATION BORDER //////////////////
        window.onload = function () {
            'use strict';

            var   anchors = document.querySelectorAll('.nav_bar ul a'),
                  slidingBorder = document.querySelector('.nav_bar .sliding-border'),
                  activeAnchor = document.querySelector('.nav_bar .active'),
                  anchor,
                  hoveredIndex,
                  activeIndex,
                  transitionDuration,
                  v, i, l = anchors.length;


            // Set transition for sliding border based on anchor index
            function SB_Transition( hoveredElement ) {
                hoveredIndex = +hoveredElement.getAttribute('data-index');
                activeIndex  = +activeAnchor.getAttribute('data-index');

              // transitionDuration = Math.max(hoveredIndex, activeIndex) - Math.min(hoveredIndex,activeIndex) + 1;
                if ( activeIndex > hoveredIndex ) {
                    transitionDuration = activeIndex - hoveredIndex + 1;
                } else {
                    transitionDuration = hoveredIndex - activeIndex + 1;
                }
                slidingBorder.style.transition = "all " + transitionDuration + "00ms linear";
            }


            function moveSlidingBorderTo( element ) {
                slidingBorder.style.left = element.offsetLeft + 'px';
                slidingBorder.style.width = element.clientWidth + 'px';
                //slidingBorder.style.backgroundColor = window.getComputedStyle(.btn-pink, null).getPropertyValue('color');
            }
            moveSlidingBorderTo( activeAnchor );

            function removeActive () {
                for ( v = 0; v < l; v++ ) {
                    anchors[v].classList.remove('active');
                }
            }

            /* -------------------------------------
               Add active class to clicked element
            --------------------------------------- */
            function addActiveToClickedAnchor(anchor) {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    removeActive();
                    this.classList.add('active');
                    activeAnchor = document.querySelector('.nav_bar .active');
                    
                    if (this.classList.contains('oferta'))
                        window.location.href = "http://panikadrowa.pl#business-points";
                    else if (this.classList.contains('home'))
                        window.location.href = "http://panikadrowa.pl/";
                    else if (this.classList.contains('cennik'))
                        window.location.href = "http://panikadrowa.pl/cennik";
                    else if (this.classList.contains('kontakt'))
                        window.location.href = "http://panikadrowa.pl/cennik#masz-pytania";
                    else if (this.classList.contains('dowiedz-sie'))
                        window.location.href = "http://panikadrowa.pl#chmura-azure";
                });
                
            }
            

            /* 
            ========================================================
             ** Set index to anchors for sliding transition
             ** Move sliding border to hovered element
             ** Return sliding border to active anchor on mouseout
            ========================================================
            */

            for ( i = 0; i < l; i++ ) {
                anchor = anchors[i];
                anchor.setAttribute('data-index', i+1);

                addActiveToClickedAnchor(anchor);

                anchor.addEventListener('mouseenter', function() {
                    SB_Transition(this);
                    moveSlidingBorderTo(this);
                    this.addEventListener('mouseout', function() {
                        moveSlidingBorderTo( activeAnchor );
                    });
                });
                
            }
                
        };

        ////// END OF SLIDING NAVIGATION BORDER //////////////////
        
        
        ////// SMOOTH SCROLLING  //////////////////////////
        
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
                    //$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                  };
                });
              }
            }
          });
        
          ////// END OF SMOOTH SCROLLING  //////////////////////////
        
    </script>
    
</body>
</html>