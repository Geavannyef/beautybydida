<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beauty by Dida</title>
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
    <!-- intro-->
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
    
   <div class="carousel-inner">
    
    <div class="item active">
    <section id="intro" style="background-image: url('<?php echo base_url(). 'assets/'; ?>img/bgful.jpg');" class="intro">      
     <div class="overlay">
      <div class="content">
        <div class="container clearfix">
          <div class="row">
           <div class="col-md-8 col-md-offset-2 col-sm-12">
              <p class="italic">Oh, hello, nice to meet you!</p>
              <h1>Wake up And Makeup.</h1>
              <p class="italic">May your day be as FLAWLESS as your MAKEUP!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
    <div class="item">
    <section id="intro" style="background-image: url('<?php echo base_url(). 'assets/'; ?>img/bg2.jpg');" class="intro">      
      <div class="overlay">
      <div class="content">
        <div class="container clearfix">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
              <p class="italic">Oh, hello, nice to meet you!</p>
              <h1>Wake up And Makeup.</h1>
              <p class="italic">May your day be as FLAWLESS as your MAKEUP!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="item">
    <section id="intro" style="background-image: url('<?php echo base_url(). 'assets/'; ?>img/bg.jpg');" class="intro">      
     <div class="overlay">
     <div class="content">
     <div class="container clearfix">
     <div class="row">
           <div class="col-md-8 col-md-offset-2 col-sm-12">
              <p class="italic">Oh, hello, nice to meet you!</p>
              <h1>Wake up And Makeup.</h1>
              <p class="italic">May your day be as FLAWLESS as your MAKEUP!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <!-- intro end-->
    <!-- navbar-->
    <header class="header" style="top: 0; z-index: 100; position: fixed; width: 100%;">
      <div class="sticky-wrapper">
        <div role="navigation" class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-btn btn-sm navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#intro" class="navbar-brand scroll-to"><img src="<?php echo base_url(). 'assets/'; ?>img/logo1.jpg" alt=""></a>
            </div>
            
            <div id="navigation" class="collapse navbar-collapse navbar-right">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#intro">Home</a></li>
                <li><a class="page-scroll" href="#about">About Me</a></li>
                <li><a href="#services">Services</a></li>
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
    <!-- about-->


    <section id="about" class="text">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="heading">About Beauty by Dida</h2>
        
            <!--<p><img src="<?php echo base_url(). 'assets/'; ?>img/ab3.jpg" alt="" class="img-responsive img-circle"></p>-->
            <?php foreach ($dataabout as $row) {
              echo'
              <p>' . $row['section'] . '</p>
               </div>
              <div class="col-md-5 col-md-offset-1">
              <img src="' . $row['path'] .'" alt="" class="img-responsive img-circle"/>
              </div>
            ';}?>

    </div>
        </div>
        </div>
     
    </section>
    <!-- about end-->
    <!-- Services-->
    <section id="services" style="background-color: #ff7575">
    <div class="container">
  <h2 style="color: #ffffff">Services</h2>
  <p style="color: #ffffff">Beauty by Dida melayani jasa rias wajah untuk berbagai acara, formal maupun non formal.</p>
 
  

<?php foreach ($dataservices as $row) {
          echo'

           <div class="row">
    <div class="col-md-4">
      <div class="thumbnail" style="text-align: center">
        
        <a href="' . $row['path'] .'">
          <img src="' . $row['path'] .'" alt="" style="width:100%"></a>
          <div class="caption">
            <h4>' .$row['judul'] . '</h4>
            <p>' . $row['caption'] . '</p>
            <ul class="pager">
            <li><a href=#>' . $row['harga'] . '</a></li>
            </ul>
          </div>
          
     </div>
    </div>
';}?>


        </div>
      </div>
    </section>
    <!-- Services end-->
    
    <!-- Portfolio / gallery-->
    <section id="portfolio" class="gallery">
      <div class="container clearfix">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12 col-lg-8">
                <h2 class="heading">Tutorials</h2>
                <p>Berikut beberapa tutorial makeup yang Beauty by Dida rekomendasi untuk Beauties semua : </p>

              </div>

            </div>
             
            <?php foreach ($datatutorials as $row) {
          echo'
            
             <div class="col-sm-4">
              <div class="box"><iframe width="400" height="220" src="' . $row['path'] .'"></iframe></div>
             </div>
            
              ';}?>
            
           
          </div>
          </div>
        </div>

    </section>
    <!-- Portfolio / gallery end-->
    <!-- text page-->
    <section id="text" style="background-color: #ff7575;" class="text-page section-inverse">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading">Beauty Hacks</h2>

            <?php foreach ($databeauty as $row) {
          echo'
            <div class="row">
                <div class="col-sm-4">
                <div class="box">
                  <div class="icon"></div>
                  <div class="box"><a href="' . $row['path'] .'" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image 1" data-footer="Some footer information"><img src="' . $row['path'] .'" alt="" class="img-responsive"></a></div>
                  <h4 style="color: #ffffff">' .$row['judul'] . '</h4>
                  <p style="color: #ffffff"></p>
                  <h5><a href='. base_url(). "index.php/Welcome/beauty_hacks/" .'>Baca lebih detail..</a></h5>
                  
                  
                </div>
              </div>
              ';}?>
                
              </div>
              <div class="col-sm-6">
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- text page end-->
    <!-- contact-->
    <section id="contact" style="background-color: #fff;" class="text-page" > 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading">Book Makeup</h2>
            <p style="font-size: 20px">Book jasa rias wajah untuk beragam acara di Beauty by Dida sekarang juga!</p>
            <div class="row">
              <div class="col-md-6">
                <!--<form id="contact-form" method="post" action="bookmakeup" enctype="multipart/form-data" class="contact-form">-->
                <?php echo form_open(site_url('ContBook/bookmakeup')); ?> 
                  <div class="controls">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="name" class="col-sm-12">NAMA LENGKAP *</label>
                          <input type="text" name="nama" placeholder="Masukkan nama Anda" required="required" class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="date" class="col-sm-12">TANGGAL BOOK MAKEUP*</label>
                          <input type="date" name="tgl" placeholder="Masukkan tanggal pesan jasa rias wajah" required="required" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                          <label for="time" class="col-sm-12">WAKTU BOOK MAKEUP*</label>
                        <input type="time" name="waktu" placeholder="Masukkan waktu jasa rias wajah" required="required" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="surname" class="col-sm-12">NO TELP *</label>
                      <input type="telpon" name="telpon" placeholder="Masukkan no telp yang dapat dihubungi" required="required" class="form-control">
                    </div>
                    <!--<div class="form-group">
                      <label for="surname" class="col-sm-12">ALAMAT (Basis daerah Jember)*</label>
                      <textarea rows="4" name="message" placeholder="Masukkan alamat lengkap Anda" required="required" class="form-control"></textarea>
                    </div>-->
                    <div class="form-group">
                      <label for="surname">EMAIL *</label>
                      <input type="email" name="email" placeholder="Enter your  email" required="required" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="surname" class="col-sm-12">ALAMAT (Basis daerah Jember)*</label>
                      <select class="form-control form-control-line" name="kec" required="required">
                        <option>-Kecamatan-</option>
                        <option>Patrang</option>
                         <option>Sumbersari</option>
                        <option>Kaliwates</option>
                    </div>
                      </select>
                      <div class="form-group">
                      <select  class="form-control form-control-line" class="col-sm-4" name="kel" required="required">
                        
                        <option>-Kelurahan-</option>
                        <option>Kebonsari</option>
                         <option>Pakem</option>
                        <option>Pakusari</option>
                        
                      </select>
                    </div>
                      <label for="surname" class="col-sm-12"></label>
                      <textarea rows="2" name="alamat" placeholder="Masukkan alamat lengkap Anda secara detail" required="required" class="form-control"  required="required"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="surname" class="col-sm-12">JENIS PAKET *</label><br>
                      <select class="form-control form-control-line" name="jenispaket" required="required">
                         <option>-Pilih Jenis Paket Anda-</option>
                        <option>Party</option>
                        <option>Wisuda</option>
                         <option>Party</option>
                        <option>Karakter</option>
                         <option>Pernikahan Standart</option>
                        <option>Pernikahan Custom</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="surname" class="col-sm-12">KET. TAMBAHAN *</label>
                      <textarea rows="2" name="tambahan" placeholder="Tambahkan keterangan tambahan book makeup Anda" required="required" class="form-control"></textarea>
                    </div>
                    <div class="text-center">
                     <!-- <a href="<?php echo base_url().'ContBook/do_book/'.$x['nama'] ?>" input type="submit" name="btnSubmit" value="Book Makeup" class="btn btn-primary btn-block"></a>-->
                    <input type="submit" name="btnSubmit" value="Book Makeup" class="btn btn-primary btn-block">
                   
                    </div>
                  </div>
                <?php echo form_close(); ?><br> 
              </div>
              
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
            <p class="social"><a href="#" title="" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" title="" class="twitter"><i class="fa fa-twitter"></i></a><a href="#" title="" class="gplus"><i class="fa fa-google-plus"></i></a><a href="https://www.instagram.com/didatouch/" title="" class="instagram"><i class="fa fa-instagram"></i></a><a href="#" title="" class="email"><i class="fa fa-envelope"></i></a></p>
              
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