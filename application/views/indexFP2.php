<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dida's Salon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap and Font Awesome css-->
    <!-- we use cdn but you can also include local files located in css directory-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Google fonts - Montserrat for headings, Cardo for copy-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700|Cardo:400,400italic,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/'; ?>css/style.default.css" id="theme-stylesheet">
    <!-- ekko lightbox-->
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/'; ?>css/ekko-lightbox.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/'; ?>css/custom.css">
    <!-- Favicon-->
    <!--<link rel="shortcut icon" href="<?php echo base_url(). 'assets/'; ?>favicon.png">-->
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body data-spy="scroll" data-target="#navigation" data-offset="120">
    
    <!-- navbar-->
    <header class="header" style="top: 0; z-index: 100; position: fixed; width: 100%;">
      <div class="sticky-wrapper">
        <div role="navigation" class="navbar navbar-default" style="background-color: #ff7575;">
          <div class="container" style="background-color: #ff7575;">
            <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-btn btn-sm navbar-toggle" style="background-color: #ff7575;"><span class="icon-bar"></span></button><a href="#intro" class="navbar-brand scroll-to"><img src="<?php echo base_url(). 'assets/'; ?>img/logo1.jpg" alt=""></a>
            </div>
            <div id="navigation" class="collapse navbar-collapse navbar-right" style="background-color: #ff7575;">
              <ul class="nav navbar-nav">
                <li><a href="#intro">Home</a></li>
                <li><a href="#about">About Me</a></li>
                <li  class="active"><a href="#services">Services</a></li>
                <li><a href="#portfolio">Tutorials</a></li>
                <li><a href="#text">Beauty Hacks</a></li>
                <li><a href="#contact">Book Makeup</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- /.navbar-->
    
    <!-- text page-->
    <section id="text" class="text-page section-inverse">
      <div class="container">
            <h4 class="heading" style="color: black">Beauty Hacks</h4>
           <?php foreach ($databeauty as $row) {
          echo'

            <div class="row">
               
                <div class="box">
                  <div class="icon"></div>
                  <div class="box"><a href="' . $row['path'] .'" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image 1" data-footer="Some footer information"><img src="' . $row['path'] .'" alt="" class="img-responsive"></a></div>

                  <h2 style="color:black">' .$row['judul'] . '</h2>
                   <p style="color: black">' .$row['details'] . '</p>
                  
              </div>
                
              
         ';}?>
      
<!--<div class="row">
               
                <div class="box">
                  <div class="icon"></div>
                  <div class="box"><img src="<?php echo base_url(). 'assets/'; ?>img/hacks1.jpg" alt="" class="img-responsive"></a></div>
                  <h2 style="color: black">22 Beauty Hacks You Have to Try</h2>
                  <p style="color: black"><br>The summer months are drawing to a close, meaning the return to classes for some and simply the transition to a new season for others. Whatever it means for you, it’s a perfect opportunity to hack your personal grooming for a revamped beauty routine. Some of the tips on this list are specifically for warmer weather to get you through the last of these sweaty summer days. (You’re welcome.) Enjoy!<br><br></p>
                  <h4 style="color: black">1. Eliminate permanent sweat stains<br></h4>
                  <div class="box"><img src="<?php echo base_url(). 'assets/'; ?>img/hacks1a.png" alt="" class="img-responsive"></a></div>
                  <h4 style="color: black">2. Vaseline prevents messy self-manicures<br></h4>
                  <div class="box"><img src="<?php echo base_url(). 'assets/'; ?>img/hacks1b.png" alt="" class="img-responsive"></a></div>
                </div>
              </div>
                <!--<p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p>
                <p>Betrayed cheerful declared end and. Questions we additions is extremely incommode. Next half add call them eat face. Age lived smile six defer bed their few. Had admitting concluded too behaviour him she. Of death to or to being other. </p>-->
              <!--</div>
              <div class="col-sm-6">
                <!--<p>Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed. </p>
                <p>Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration unaffected its mrs literature. Behaviour new set existence dashwoods. It satisfied to mr commanded consisted disposing engrossed. Tall snug do of till on easy. Form not calm new fail. </p>-->
              <!--</div>
            </div>
          </div>
        </div>-->
      </div>
    </section>
    <!-- text page end-->
   
              <!--<div class="col-md-6">
                <p>Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed. </p>
                <p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p>
                </div>-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="map" style="height: 10px"></div>
    <footer style="background-color: #ff7575" class="section-inverse">
      <div class="container"> 
        <div class="row">
          <div class="col-md-6">
            <p style="color: #ffffff; margin-top: 20px; margin-left: 100px">Copyright &copy;2017 Beauty By Dida</p>
          </div>
          <div class="col-md-6">
            <p class="social"><a href="#" title="" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" title="" class="twitter"><i class="fa fa-twitter"></i></a><a href="#" title="" class="gplus"><i class="fa fa-google-plus"></i></a><a href="#" title="" class="instagram"><i class="fa fa-instagram"></i></a><a href="#" title="" class="email"><i class="fa fa-envelope"></i></a></p>
              
            <!--<p class="credit">Template by <a href="https://bootstrapious.com/tutorials">Bootstrapious</a></p>
            <!-- Please do not remove the backlink to us unless you support the development at https://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :) -->
          </div>
        </div>
      </div>
    </footer>
    <!-- Javascript files-->
    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <!-- Bootstrap CDN-->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- jQuery Cookie - For Demo Purpose-->
    <script src="js/jquery.cookie.js"></script>
    <!-- Lightbox-->
    <script src="js/ekko-lightbox.js"> </script>
    <!-- Sticky + Scroll To scripts for navbar-->
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <!-- google maps
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;amp;sensor=false"></script>
    <script src="js/gmaps.js"></script>-->
    <!-- main script-->
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
    
  </body>
</html>