<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>

    <?php include "includes/headlinks.php"?>
    <link href="animate.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">

      scale = 1.16;
      var w = 1950;
      var h = 1440;

      $(document).ready(function () {
        $("#logo-loader-image").hide();
        // Hier animeren dat de achtergrond een beetje inzoomt

      });

      $(window).load(function() {

        $("#logo-loader-image").delay(100).fadeIn("slow");

        $("#loader").delay(1500).fadeOut("slow");



      });
    </script>
  </head>


  <body>

  <div id="loader" class=" ">
    <h1 id="logo-loader-image" class = "animated fadeIn">
      SOUFYANE KADDOURI
    </h1>
  </div>

  <?php include "includes/header.php" ?>


  <div class="container ptb">
      <div class="row">
        <h2 class="centered mb">Mijn stage bij Eyeonline</h2>
        <div class="col-md-6">
          <p>
            Mijn stage bij Eyeonline is heel soepel verlopen. Er is als eerst besloten om mij een proef opdracht te geven. Op basis van die opdracht heb ik
            een reeks aan opdrachten gekregen om mijn algemene kennis flink op te schroeven. Ondertussen ben ik begeleid door mijn stage begeleider Rick Schrijver.
             Als ik vragen had over de opdrachten of ik kwam ergens niet uit dan kon ik altijd bij Rick terecht. Dit waren vooral PHP opdrachten en database oefeningen.
            (Back-end code)
          </p>
        </div><!--/col-md-6-->

        <div class="col-md-6">
          <p>
            Naast programmeren werden mij ook andere belangrijke zaken geleerd. Mijn BPV werkgevers, Damien Verhaar en Zouhair El-Moutjahid hebben mij het
            bedrijfsleven geintroduceerd. Ik heb geleerd hoe ik met klanten om moet gaan, SCRUM methodes en vergaderingen houden.
          </p>
        </div><!--/col-md-6-->
      </div><!--/row-->
    </div><!-- /.container -->
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <img src="assets/img/items.png" class="img-responsive" alt="">
        </div>
      </div><!--/row-->
    </div><!--/.container-->

    <div id="g">
      <div class="container">
        <div class="row centered">
          <h2>Projecten waar aan ik heb deelgenomen</h2>
          <div class="col-md-8 col-md-offset-2">
            <p>

            </p>

          </div><!--/col-md-8-->
        </div><!--/row-->
      </div><!--/.container-->
    <div class="portfolio-centered mt">
      <div class="recentitems portfolio">

        <div class="portfolio-item graphic-design">
          <div class="he-wrap tpl6">
          <img src="assets/img/portfolio/portfolio_09.jpg" class="img-responsive" alt="">
            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                <h3 class="a1" data-animate="fadeInDown">A Graphic Design Item</h3>
                <a data-rel="prettyPhoto" href="assets/img/portfolio/portfolio_09.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="ion-search"></i></a>
                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="ion-link"></i></a>
               </div><!-- he bg -->
            </div><!-- he view -->    
          </div><!-- he wrap -->
        </div><!-- end col-12 -->
                            

                                        



       </div><!-- portfolio -->
    </div><!-- portfolio container -->

    <div class="container mt">
        <div class="row clients centered">
          <p class="mb">Some clients that I had the pleasure to working for.</p>
          <div class="col-sm-2 col-sm-offset-1">
            <img src="assets/img/client1.png" alt="">
          </div>
          <div class="col-sm-2">
            <img src="assets/img/client3.png" alt="">
          </div>
          <div class="col-sm-2">
            <img src="assets/img/client2.png" alt="">
          </div>
          <div class="col-sm-2">
            <img src="assets/img/client4.png" alt="">
          </div>
          <div class="col-sm-2">
            <img src="assets/img/client5.png" alt="">
          </div>
        </div><!--/row-->
      </div><!--/container-->
    </div><!--/.G-->

    <div id="sep">
      <div class="container">
        <div class="row centered">
          <div class="col-md-8 col-md-offset-2">
            <h1>Stage Opdrachten</h1>
            <h3 class="mb">Tijdens mijn stage heb ik opdrachten gekregen en heb zo mijn kennis uitgebreid.</h3>
            <a href = "opdrachten.php" class="btn btn-conf btn-clear">Bekijk de opdrachten</a>
          </div>
        </div><!--/row-->
      </div><!--/container-->
    </div><!--/.sep-->

    <div id="f">
      <div class="container">
        <div class="row centered">
          <div class="col-md-8 col-md-offset-2">
            <a href="http://www.linkedin.com/in/skaddouri" target="_blank"><i class="ion-social-linkedin"></i></a>
          </div><!--/col-md-8-->
        </div>
      </div><!--/container-->
    </div><!--/.F-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina-1.1.0.js"></script>
    <script src="assets/js/jquery.hoverdir.js"></script>
    <script src="assets/js/jquery.hoverex.min.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/custom.js"></script>


    <script>
// Portfolio
(function($) {
  "use strict";
  var $container = $('.portfolio'),
    $items = $container.find('.portfolio-item'),
    portfolioLayout = 'fitRows';
    
    if( $container.hasClass('portfolio-centered') ) {
      portfolioLayout = 'masonry';
    }
        
    $container.isotope({
      filter: '*',
      animationEngine: 'best-available',
      layoutMode: portfolioLayout,
      animationOptions: {
      duration: 750,
      easing: 'linear',
      queue: false
    },
    masonry: {
    }
    }, refreshWaypoints());
    
    function refreshWaypoints() {
      setTimeout(function() {
      }, 1000);   
    }
        
    $('nav.portfolio-filter ul a').on('click', function() {
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector }, refreshWaypoints());
        $('nav.portfolio-filter ul a').removeClass('active');
        $(this).addClass('active');
        return false;
    });
    
    function getColumnNumber() { 
      var winWidth = $(window).width(), 
      columnNumber = 1;
    
      if (winWidth > 1200) {
        columnNumber = 5;
      } else if (winWidth > 950) {
        columnNumber = 4;
      } else if (winWidth > 600) {
        columnNumber = 3;
      } else if (winWidth > 400) {
        columnNumber = 2;
      } else if (winWidth > 250) {
        columnNumber = 1;
      }
        return columnNumber;
      }       
      
      function setColumns() {
        var winWidth = $(window).width(), 
        columnNumber = getColumnNumber(), 
        itemWidth = Math.floor(winWidth / columnNumber);
        
        $container.find('.portfolio-item').each(function() { 
          $(this).css( { 
          width : itemWidth + 'px' 
        });
      });
    }
    
    function setPortfolio() { 
      setColumns();
      $container.isotope('reLayout');
    }
      
    $container.imagesLoaded(function () { 
      setPortfolio();
    });
    
    $(window).on('resize', function () { 
    setPortfolio();          
  });
})(jQuery);
</script>
  </body>
</html>
