<!doctype html>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">

    <title><?php bloginfo('sitename'); ?></title>

    <meta name="description" content="Kadry i p³ace">
    <meta name="keywords" content="kadry, płace, rachunki, pani, kobieta, pani kadrowa, firma, podatki, prowadzenie dokumentacji pracowniczej, działalność, outsourcing, azure, chmura azure, usługi kadrowo-płacowe, obsługa kadrowa firmy, umowy cywilno-prawne, prowadzenie ewidencji, szkolenia BHP, organizowanie szkoleń BHP, ewidencja pracowników, HR, sporządzanie deklaracji ZUS">
    <meta name="author" content="Michał Iłenda, Patrycja Chociej">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            <a href="http://panikadrowa.pl/"><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/Pani-Kadrowa_logo_białe.png" alt="Logo - Pani Kadrowa"></a>
            <nav class="nav_bar">
                <h2>Główna nawigacja</h2>
                <div id="burger-nav"></div>
                <ul>
                    <li class="sliding-border"></li>
                    <li><a href="#main-banner" class="active home">Home</a></li>
                    <li><a href="#business-points" class="oferta">Oferta</a></li>
                    <li><a href="/cennik" class="cennik">Cennik</a></li>
                    <li><a href="/cennik#masz-pytania" class="kontakt">Kontakt</a></li>
                    <li><button class="btn-pink" onclick="javascript:location.href='<?php the_field('link_do_panelu_klienta'); ?>'">Panel klienta</button></li>
                </ul>
            </nav>
        </div>
    </header>    
    
    
    <div id="main-banner">
        <div class="content">
            <?php if( get_field('glowny_tekst') ): ?>
    		<h1><?php the_field('glowny_tekst'); ?></h1>
			<?php endif; ?>
            <?php if( get_field('mniejszy_tekst') ): ?>
            <h2><?php the_field('mniejszy_tekst'); ?></h2>
            <?php endif; ?>
            <h3>
                <a href="#chmura-azure" class="dowiedz-sie"><span class="question-mark">?</span>Dowiedz się więcej</a>
                <button class="btn-panel" onclick="javascript:location.href='<?php the_field('link_do_panelu_klienta'); ?>'">Panel klienta</button>
            </h3>
        </div>
    </div>
    
    <main>
        <div class="wrapper">
        <section id="business-points">
            <?php if( get_field('business-points_title') ): ?>
            <h1><?php the_field('business-points_title'); ?></h1>
            <?php endif; ?>
            <hr>
            <?php if( get_field('business-points_opis') ): ?>
            <h3 class="opis"><?php the_field('business-points_opis'); ?></h3>
            <?php endif; ?>
            
            <ul>
                <li>
                    <img src="http://panikadrowa.pl/wp-content/uploads/2017/08/points-1.svg" alt="Prowadzenie dokumentacji pracowniczej">
                    <?php if( get_field('business-point-1') ): ?>
                    <h3><?php the_field('business-point-1'); ?></h3>
                    <?php endif; ?>
                </li>
                <li>
                    <img src="http://panikadrowa.pl/wp-content/uploads/2017/08/points-3.svg" alt="Przygotowywanie dokumentacji związanej z zatrudnieniem pracownika">
                    <?php if( get_field('business-point-2') ): ?>
                    <h3><?php the_field('business-point-2'); ?></h3>
                    <?php endif; ?>
                </li>
                <li>
                    <img src="http://panikadrowa.pl/wp-content/uploads/2017/08/points-2.svg" alt="Przygotowywanie dokumentacji umów cywilno-prawnych">
                    <?php if( get_field('business-point-3') ): ?>
                    <h3><?php the_field('business-point-3'); ?></h3>
                    <?php endif; ?>
                </li>
                <li>
                    <img src="http://panikadrowa.pl/wp-content/uploads/2017/08/points-4.svg" alt="Prowadzenie ewidencji nieobecności pracowników">
                    <?php if( get_field('business-point-4') ): ?>
                    <h3><?php the_field('business-point-4'); ?></h3>
                    <?php endif; ?>
                </li>
                <li>
                    <img src="http://panikadrowa.pl/wp-content/uploads/2017/08/points-5.svg" alt="Sporządzanie deklaracji do ZUS, GUS, PEFRON">
                    <?php if( get_field('business-point-5') ): ?>
                    <h3><?php the_field('business-point-5'); ?></h3>
                    <?php endif; ?>
                <li>
                    <img src="http://panikadrowa.pl/wp-content/uploads/2017/08/points-6.svg" alt="Organizowanie i nadzór nad terminowością szkoleń BHP">
                    <?php if( get_field('business-point-6') ): ?>
                    <h3><?php the_field('business-point-6'); ?></h3>
                    <?php endif; ?>
                </li>
            </ul>
        </section>
        
        <section id="business-outsourcing">
            <?php if( get_field('business-outsourcing-tytul') ): ?>
            <h1><?php the_field('business-outsourcing-tytul'); ?></h1>
            <?php endif; ?>
            <?php if( get_field('business-outsourcing-opis-1') ): ?>
            <h3><?php the_field('business-outsourcing-opis-1'); ?></h3>
            <?php endif; ?>
            <hr>
            <?php if( get_field('business-outsourcing-opis-2') ): ?>
            <h2><?php the_field('business-outsourcing-opis-2'); ?></h2>
            <?php endif; ?>
            
			<ul>
                <li><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/tick.svg">
                    
                    <?php if( get_field('outsourcing-point-1') ): ?>
                    <?php the_field('outsourcing-point-1'); ?>
                    <?php endif; ?>
                    
                </li>
                <li><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/tick.svg">
                    
                    <?php if( get_field('outsourcing-point-2') ): ?>
                    <?php the_field('outsourcing-point-2'); ?>
                    <?php endif; ?>
                    
                </li>
                <li><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/tick.svg">
                    
                    <?php if( get_field('outsourcing-point-3') ): ?>
                    <?php the_field('outsourcing-point-3'); ?>
                    <?php endif; ?>
                    
                </li>
                <li><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/tick.svg">
                    
                    <?php if( get_field('outsourcing-point-4') ): ?>
                    <?php the_field('outsourcing-point-4'); ?>
                    <?php endif; ?>
                    
                </li>
                <li><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/tick.svg">
                    
                    <?php if( get_field('outsourcing-point-5') ): ?>
                    <?php the_field('outsourcing-point-5'); ?>
                    <?php endif; ?>
                
                </li>
            </ul>
            
            <img class="outsourcing-img" src="http://panikadrowa.pl/wp-content/uploads/2017/08/naliczanie-plac-tiny.png" alt="Naliczanie płac">
        </section>
        
        
        <section id="chmura-azure">
            <video controls id="video">
              <source src="http://panikadrowa.pl/wp-content/uploads/2017/08/azure_2.webm" type="video/webm">
            </video>
            <?php if( get_field('chmura-azure-tytul') ): ?>
            <h1><?php the_field('chmura-azure-tytul'); ?></h1>
            <?php endif; ?>

			<img id="azure-mobile-img" src="http://panikadrowa.pl/wp-content/uploads/2017/08/azure-mobile.png">

            <?php if( get_field('chmura-azure-opis') ): ?>
            <h3><?php the_field('chmura-azure-opis'); ?></h3>
            <?php endif; ?>

            <a href="<?php the_field('przycisk_zobacz_jak_to_działa'); ?>" target="_blank"><button class="btn-pink">Zobacz jak to działa</button></a>
        </section>
        
        
        <section id="baza-danych">
            <div class="wrapper-half-right">
                <?php if( get_field('baza-danych-tytul') ): ?>
                <h1><?php the_field('baza-danych-tytul'); ?></h1>
                <?php endif; ?>

                <?php if( get_field('baza-danych-opis') ): ?>
                <h3><?php the_field('baza-danych-opis'); ?></h3>
                <?php endif; ?>

                <hr>
                <img class="baza-danych-img" src="http://panikadrowa.pl/wp-content/uploads/2017/08/enova365-logo-zielone-tiny.png" alt="Enova logo">
                
                <ul>
                    <li><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/tick.svg">
                        <?php if( get_field('baza-danych-punkt-1') ): ?>
                        <?php the_field('baza-danych-punkt-1'); ?>
                        <?php endif; ?>
                    </li>
                    <li><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/tick.svg">
                        <?php if( get_field('baza-danych-punkt-2') ): ?>
                        <?php the_field('baza-danych-punkt-2'); ?>
                        <?php endif; ?>
                    </li>
                    <li><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/tick.svg">
                        <?php if( get_field('baza-danych-punkt-3') ): ?>
                        <?php the_field('baza-danych-punkt-3'); ?>
                        <?php endif; ?>
                    </li>
                    <li><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/tick.svg">
                        <?php if( get_field('baza-danych-punkt-4') ): ?>
                        <?php the_field('baza-danych-punkt-4'); ?>
                        <?php endif; ?>
                    </li>
                </ul>
                
                <button class="btn-green" onclick="javascript:location.href='<?php the_field('link_do_panelu_klienta'); ?>'">Zaloguj się</button>
                <button class="btn-white btn-right" onclick="javascript:location.href='<?php the_field('przycisk_demo'); ?>'">Demo</button>
            </div>
            
            <img id="baza-danych-img" src="http://panikadrowa.pl/wp-content/uploads/2017/08/enova2-tiny.png" alt="Baza danych w chmurze">

			<img id="baza-danych-img-mobile" src="http://panikadrowa.pl/wp-content/uploads/2017/08/enova-mobile-tiny.png" alt="Baza danych w chmurze">
            
            
        </section>
        
        
        <section id="korzysci">
            <h1><?php if( get_field('korzysci-tytul') ): ?>
                <?php the_field('korzysci-tytul'); ?>
                <?php endif; ?></h1>
			<?php if( get_field('pod-korzysci') ): ?>
            <h3><?php the_field('pod-korzysci'); ?></h3>
            <?php endif; ?>
            <hr>
            
            <ul>
                <li><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/tick.svg"><?php if( get_field('korzysci-1') ): ?>
                <?php the_field('korzysci-1'); ?>
                <?php endif; ?></li>
                <li><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/tick.svg"><?php if( get_field('korzysc-2') ): ?>
                <?php the_field('korzysc-2'); ?>
                <?php endif; ?></li>
                <li><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/tick.svg"><?php if( get_field('korzysc-3') ): ?>
                <?php the_field('korzysc-3'); ?>
                <?php endif; ?></li>
                <li><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/tick.svg"><?php if( get_field('korzysc-4') ): ?>
                <?php the_field('korzysc-4'); ?>
                <?php endif; ?></li>
                <li><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/tick.svg"><?php if( get_field('korzysc-5') ): ?>
                <?php the_field('korzysc-5'); ?>
                <?php endif; ?></li>
                <li><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/tick.svg"><?php if( get_field('korzysc-6') ): ?>
                <?php the_field('korzysc-6'); ?>
                <?php endif; ?></li>
            </ul>
            
            <img class="korzysci-img" src="http://panikadrowa.pl/wp-content/uploads/2017/08/korzysci-mobile-tiny.png" alt="Korzyści z outsourcingu kadrowo-płacowego">
        </section>
        
        <section id="zobacz-cennik">
            <a href="/cennik"><button class="btn-pink">Zobacz cennik</button></a>
        </section>
        
	</div>

    </main>
    
<footer class="wrapper">
        
        <div class="footer-col-1">
            
            <a href="http://panikadrowa.pl/"><img src="http://panikadrowa.pl/wp-content/uploads/2017/08/Pani-Kadrowa_logo_CMYK.png" alt="Pani Kadrowa logo"></a>       
			<h3><?php the_field('footer-tekst-index'); ?></h3>
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
                        window.location.href = "#business-points";
                    else if (this.classList.contains('home'))
                        window.location.href = "#main-banner";
                    else if (this.classList.contains('cennik'))
                        window.location.href = "/cennik";
                    else if (this.classList.contains('kontakt'))
                        window.location.href = "/cennik#masz-pytania";
                    else if (this.classList.contains('dowiedz-sie'))
                        window.location.href = "#chmura-azure";
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
        
		var vid = document.getElementById("video");
        vid.autoplay = true;
        vid.controls = false;
        vid.loop = true;
        vid.load();

    </script>

    
    
    
</body>
</html>