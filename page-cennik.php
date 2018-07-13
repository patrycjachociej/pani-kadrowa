<!doctype html>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">

    <title><?php bloginfo('sitename'); ?></title>

    <meta name="description" content="Kadry i p³ace">
    <meta name="keywords" content="kadry, płace, rachunki, pani, kobieta, pani kadrowa, firma, podatki, prowadzenie dokumentacji pracowniczej, działalność, outsourcing, azure, chmura azure, usługi kadrowo-płacowe, obsługa kadrowa firmy, umowy cywilno-prawne, prowadzenie ewidencji, szkolenia BHP, organizowanie szkoleń BHP. ewidencja pracowników, HR, sporządzanie deklaracji ZUS">
    <meta name="author" content="Michał Iłenda, Patrycja Chociej">

	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel='shortcut icon' type='image/x-icon' href='http://panikadrowa.pl/wp-content/uploads/2017/08/favicon.ico' />
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Poppins:400,700&amp;subset=latin-ext" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
    
    
    <header>
        <div class="wrapper-nav">
            <h1>Pani kadrowa - kadry i płace</h1>
            <a href="http://panikadrowa.pl/"><img class="logo-cmyk" src="http://panikadrowa.pl/wp-content/uploads/2017/08/Pani-Kadrowa_logo_CMYK.png" alt="Logo - Pani Kadrowa"></a>
			<a href="http://panikadrowa.pl/"><img class="logo-white" src="http://panikadrowa.pl/wp-content/uploads/2017/08/Pani-Kadrowa_logo_białe.png" alt="Logo - Pani Kadrowa"></a>
            <nav class="nav_bar">
                <h2>Główna nawigacja</h2>
                <div id="burger-nav"></div>
                <ul>
                    <li class="sliding-border"></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>" class="home nav-color" >Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#business-points" class="oferta nav-color" >Oferta</a></li>
                    <li><a href="#" class="cennik active nav-color nav-active" >Cennik</a></li>
                    <li><a href="#masz-pytania" class="kontakt nav-color" >Kontakt</a></li>
                    <li><button class="btn-pink" onclick="javascript:location.href='<?php the_field('link_do_panelu_klienta'); ?>'">Panel klienta</button></li>
                </ul>
            </nav>
        </div>
    </header>
    
    

<main class="wrapper">
        
        <section id="cennik">

            <?php if( get_field('cennik-tytul') ): ?>
            <h1><?php the_field('cennik-tytul'); ?></h1>
            <?php endif; ?>
            
            <?php if( get_field('cennik-podtytul') ): ?>
            <h3><?php the_field('cennik-podtytul'); ?></h3>
            <?php endif; ?>
            
            <hr>
            
            <div class="boxes">
                
				<div class="box">
                    <img src="http://panikadrowa.pl/wp-content/uploads/2017/08/cennik-kadrowa.svg" alt="Obsługa kadrowa">
                    
                    <?php if( get_field('cennik-nazwa-1') ): ?>
                    <h2><?php the_field('cennik-nazwa-1'); ?></h2>
                    <?php endif; ?>
                    
                        <span class="zl">zł</span>
                        <span class="cena"><?php the_field('cennik-1-cena'); ?></span><br>
                        <div class="za-co"><?php the_field('cennik-1-za-co'); ?></div><br>
                    
                        <?php if( get_field('cennik-1-usluga-1') ): ?>
                        <div class="usluga"><?php the_field('cennik-1-usluga-1'); ?></div><br>
                        <?php endif; ?>
                    
                        <?php if( get_field('cennik-1-usluga-2') ): ?>
                        <div class="usluga"><?php the_field('cennik-1-usluga-2'); ?></div><br>
                        <?php endif; ?>
                    
                        <?php if( get_field('cennik-1-usluga-3') ): ?>
                        <div class="usluga"><?php the_field('cennik-1-usluga-3'); ?></div>
                        <?php endif; ?>
                </div>
                <div class="box">
                    <img src="http://panikadrowa.pl/wp-content/uploads/2017/08/cennik-naliczanie.svg" alt="Naliczanie płac">
                    
                    <?php if( get_field('cennik-nazwa-2') ): ?>
                    <h2><?php the_field('cennik-nazwa-2'); ?></h2>
                    <?php endif; ?>
                    
                        <span class="zl">zł</span>
                        <span class="cena"><?php the_field('cennik-2-cena'); ?></span><br>
                        <div class="za-co"><?php the_field('cennik-2-za-co'); ?></div><br>
                    
                        <?php if( get_field('cennik-2-usluga-1') ): ?>
                        <div class="usluga"><?php the_field('cennik-2-usluga-1'); ?></div><br>
                        <?php endif; ?>
                    
                        <?php if( get_field('cennik-2-usluga-2') ): ?>
                        <div class="usluga"><?php the_field('cennik-2-usluga-2'); ?></div><br>
                        <?php endif; ?>
                    
                        <?php if( get_field('cennik-2-usluga-3') ): ?>
                        <div class="usluga"><?php the_field('cennik-2-usluga-3'); ?></div>
                        <?php endif; ?>
                </div>
                <div class="box">
					<img src="http://panikadrowa.pl/wp-content/uploads/2017/08/cennik-kadrowoplacowa.svg" alt="Obsługa kadrowo-płacowa">
             
                    
                    <?php if( get_field('cennik-nazwa-3') ): ?>
                    <h2><?php the_field('cennik-nazwa-3'); ?></h2>
                    <?php endif; ?>
                    
                        <span class="zl">zł</span>
                        <span class="cena"><?php the_field('cennik-3-cena'); ?></span><br>
                        <div class="za-co"><?php the_field('cennik-3-za-co'); ?></div><br>
                    
                        <?php if( get_field('cennik-3-usluga-1') ): ?>
                        <div class="usluga"><?php the_field('cennik-3-usluga-1'); ?></div><br>
                        <?php endif; ?>
                    
                        <?php if( get_field('cennik-3-usluga-2') ): ?>
                        <div class="usluga"><?php the_field('cennik-3-usluga-2'); ?></div><br>
                        <?php endif; ?>
                    
                        <?php if( get_field('cennik-3-usluga-3') ): ?>
                        <div class="usluga"><?php the_field('cennik-3-usluga-3'); ?></div>
                        <?php endif; ?>

                </div>
                <div class="box">
                    
					<img src="http://panikadrowa.pl/wp-content/uploads/2017/08/cennik-korekty.svg" alt="Korekty ZUS">
                    
                    <?php if( get_field('cennik-nazwa-4') ): ?>
                    <h2><?php the_field('cennik-nazwa-4'); ?></h2>
                    <?php endif; ?>
                    
                        <span class="zl">zł</span>
                        <span class="cena"><?php the_field('cennik-4-cena'); ?></span><br>
                        <div class="za-co"><?php the_field('cennik-4-za-co'); ?></div><br>
                    
                        <?php if( get_field('cennik-4-usluga-1') ): ?>
                        <div class="usluga"><?php the_field('cennik-4-usluga-1'); ?></div><br>
                        <?php endif; ?>
                    
                        <?php if( get_field('cennik-4-usluga-2') ): ?>
                        <div class="usluga"><?php the_field('cennik-4-usluga-2'); ?></div><br>
                        <?php endif; ?>
                    
                        <?php if( get_field('cennik-4-usluga-3') ): ?>
                        <div class="usluga"><?php the_field('cennik-4-usluga-3'); ?></div>
                        <?php endif; ?>
                </div>
		</div>
            
        <div class="boxes">
                <div class="box-mobile">
                    
                    <?php if( get_field('cennik-nazwa-1') ): ?>
                    <h2><?php the_field('cennik-nazwa-1'); ?></h2>
                    <?php endif; ?>
                    <img src="http://panikadrowa.pl/wp-content/uploads/2017/08/cennik-kadrowa.svg" alt="Obsługa kadrowa">
                        
                    <div class="uslugi">
                        <div class="usluga"><?php the_field('cennik-1-usluga-1'); ?></div>
                        <div class="usluga"><?php the_field('cennik-1-usluga-2'); ?></div>
                        <div class="usluga"><?php the_field('cennik-1-usluga-3'); ?></div>
                    </div>
                    <div class="ceny">
                        <div class="zl">zł</div>
                        <div class="cena"><?php the_field('cennik-1-cena'); ?></div>
                        <div class="za-co"><?php the_field('cennik-1-za-co'); ?></div>
                    </div>
                </div>
                
                
            </div>
            
            <div class="boxes">
                <div class="box-mobile">
                    
                    <?php if( get_field('cennik-nazwa-2') ): ?>
                    <h2><?php the_field('cennik-nazwa-2'); ?></h2>
                    <?php endif; ?>
                    <img src="http://panikadrowa.pl/wp-content/uploads/2017/08/cennik-naliczanie.svg" alt="Naliczanie płac">
                        
                    <div class="uslugi">
                        <div class="usluga"><?php the_field('cennik-2-usluga-1'); ?></div>
                        <div class="usluga"><?php the_field('cennik-2-usluga-2'); ?></div>
                        <div class="usluga"><?php the_field('cennik-2-usluga-3'); ?></div>
                    </div>
                    <div class="ceny">
                        <div class="zl">zł</div>
                        <div class="cena"><?php the_field('cennik-2-cena'); ?></div>
                        <div class="za-co"><?php the_field('cennik-2-za-co'); ?></div>
                    </div>
                </div>
                
                
            </div>
            
			<div class="boxes">
                <div class="box-mobile">
                    
                    <?php if( get_field('cennik-nazwa-3') ): ?>
                    <h2><?php the_field('cennik-nazwa-3'); ?></h2>
                    <?php endif; ?>
                    <img src="http://panikadrowa.pl/wp-content/uploads/2017/08/cennik-kadrowoplacowa.svg" alt="Obsługa kadrowo-płacowa">
                        
                    <div class="uslugi">
                        <div class="usluga"><?php the_field('cennik-3-usluga-1'); ?></div>
                        <div class="usluga"><?php the_field('cennik-3-usluga-2'); ?></div>
                        <div class="usluga"><?php the_field('cennik-3-usluga-3'); ?></div>
                    </div>
                    <div class="ceny">
                        <div class="zl">zł</div>
                        <div class="cena"><?php the_field('cennik-3-cena'); ?></div>
                        <div class="za-co"><?php the_field('cennik-3-za-co'); ?></div>
                    </div>
                </div>
                
                
            </div>
            
                <div class="boxes">
                <div class="box-mobile">
                    
                    <?php if( get_field('cennik-nazwa-4') ): ?>
                    <h2><?php the_field('cennik-nazwa-4'); ?></h2>
                    <?php endif; ?>
                    <img src="http://panikadrowa.pl/wp-content/uploads/2017/08/cennik-korekty.svg" alt="Korekty ZUS">
                        
                    <div class="uslugi">
                        <div class="usluga"><?php the_field('cennik-4-usluga-1'); ?></div>
                        <div class="usluga"><?php the_field('cennik-4-usluga-2'); ?></div>
                        <div class="usluga"><?php the_field('cennik-4-usluga-3'); ?></div>
                    </div>
                    <div class="ceny">
                        <div class="zl">zł</div>
                        <div class="cena"><?php the_field('cennik-4-cena'); ?></div>
                        <div class="za-co"><?php the_field('cennik-4-za-co'); ?></div>
                    </div>
                </div>
                
                
            </div>
            
                
                
            </div>
            
            <h4>*Start-up'y przez pierwszy rok działalności 10% zniżki.</h4>

        </section>
        
        
        
        <section id="masz-pytania">
        
			<img src="http://panikadrowa.pl/wp-content/uploads/2017/08/kontakt-tiny.png" alt="Kontakt">

            <h1>Masz Pytania?</h1>
            <h3>Po szczegółową wycenę zapraszam do kontaktu ze mną.</h3>
            <hr>
            

			<div id="contact">
                <?php echo do_shortcode( '[contact-form-7 id="128" title="Formularz 1"]' ); ?>
              </div>
        
        
    </main>
    
    
        <footer class="wrapper">
        
        <div class="footer-col-1">
            
            <a href="http://panikadrowa.pl/"><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/Pani-Kadrowa_logo_CMYK.png" alt="Pani Kadrowa logo"></a>       
			<h3><?php the_field('footer-tekst-cennik'); ?></h3>
        </div>
        
        <div class="footer-linki">
            <a href="http://panikadrowa.pl" class="home">Home</a> | 
            <a href="http://panikadrowa.pl/cennik" class="cennik">Cennik</a> | 
            <a href="http://panikadrowa.pl/cennik#masz-pytania" class="kontakt">Kontakt</a> | 
            <a href="<?php the_field('link_do_panelu_klienta'); ?>">Panel klienta</a>
        </div>
        
        <div class="credits">            
            Copyright 2017 | Projekt graficzny: <a href="https://www.behance.net/sardlorladcaab">Michał Iłenda</a> | Implementacja i wdrożenie: <a href="https://www.facebook.com/pchociej"> Patrycja Chociej</a>
        </div>
        
        
    </footer>
    
    
    
   <script>
                
       
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
                        window.location.href = "<?php echo esc_url(home_url('/')); ?>#business-points";
                    else if (this.classList.contains('home'))
                        window.location.href = "<?php echo esc_url(home_url('/')); ?>#main-banner";
                    else if (this.classList.contains('cennik'))
                        window.location.href = "#cennik";
                    else if (this.classList.contains('kontakt'))
                        window.location.href = "#masz-pytania";
                    else if (this.classList.contains('dowiedz-sie'))
                        window.location.href = "<?php echo esc_url(home_url('/')); ?>#chmura-azure";
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
    
    
    