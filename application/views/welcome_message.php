<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BUKIT MOJO</title>
<link rel="stylesheet" href="<?php echo base_url()?>asset_front/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>asset_front/css/flexslider.css">
<link rel="stylesheet" href="<?php echo base_url()?>asset_front/css/jquery.fancybox.css">
<link rel="stylesheet" href="<?php echo base_url()?>asset_front/css/main.css">
<link rel="stylesheet" href="<?php echo base_url()?>asset_front/css/responsive.css">
<link rel="stylesheet" href="<?php echo base_url()?>asset_front/css/font-icon.css">
<link rel="stylesheet" href="<?php echo base_url()?>asset_front/css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="<?php echo base_url()?>asset_front/images/jogjakublack.png">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>callie/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url()?>callie/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>callie/css/style.css" />

<!-- kontent bawah sebelum footer -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/boot.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/fonts/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/Article-List.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/untitled.css">
<style>
.btn {
  background-color: grey;
  color: #FA4;
  font-size: 13px;
  font-weight: 600;
  border: 0;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  display: inline-block;
  text-transform: uppercase;
  opacity:0.8;
}
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}
/* Slideshow container */
.slideshow-container {
  /*max-width: 1000px;*/
  position: relative;
  margin: auto;
}
/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 10s ease;
}
.active {
  background-color: #717171;
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 15s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
  </style>
</head>

<body>
<!-- header  -->
<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix">
      <div class="logo"><img src="<?php echo base_url()?>asset_front/images/l_tp.png" style="width: 100px; height: 50px; margin-top: -10px;"></div>
      <?php echo anchor('Welcome','Bukit Mojo','class="logo"')?>
      <nav class="navigation" role="navigation">
      <ul class="primary-nav">
          <li><?php echo anchor('Welcome','Beranda')?></li>
          <li><?php echo anchor('Welcome/wisata','Wisata')?></li>
          <li><?php echo anchor('Welcome/artikel','Artikel')?></li>
          <li><?php echo anchor('Welcome/gallery','Gallery')?></li>
          <li><?php echo anchor('Welcome/testi','Testimonial')?></li>
          <li><?php echo anchor('Welcome/about','Tentang kami')?></li>
          <li><?php echo anchor('Admin/login','Login')?></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  
  <div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="<?php echo base_url()?>asset_front/images/mojo.jpg" style="width:100%; height: 500px;">
  <div class="text">Ayunan Langit</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="<?php echo base_url()?>asset_front/images/mojo.jpg" style="width:100%; height: 500px;">
  <div class="text">Perahu Awan</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="<?php echo base_url()?>asset_front/images/mojo.jpg" style="width:100%; height: 500px;">
  <div class="text">Sarang Burung</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
  </header>
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
    </div>
  </div>
  
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
    </div>
  </div>
</section>
<!-- header  --> 
<!-- intro  -->
<section id="intro" class="intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>SELAMAT DATANG</h3>
      <p>Sebuah website yang menyajikan objek - objek wisata dari Bukit Mojo Gumelem Bantul yang cocok bagi Anda yang bingung mencari tempat wisata di sekitar Yogyakarta</p>    </div>
  </div>
</section>
<!-- intro  --> 
<!-- services  -->
<section id="services" class="services service-section">
  <div class="container">
  <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
              <?php foreach ($hasil as $key => $video) {?>
                <!--Satu-->
                <iframe width="100%" height="300" src="<?php echo $video['url'];?>" frameborder="0" ></iframe>
                <p><h4><?php echo $video['judul'];?></h4></p>
                <p class="justify"><?php echo $video['keterangan'];?></p>
                <br>
                <br>
                <br>
              <?php }?>
            </div>


            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4 style="text-align: center;"> <strong>Calender</strong></h4>
                        <?php $tgl=date('l, d - M - Y'); echo $tgl; ?>
                </div>
                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Wisata di Yogyakarta</h4>
              <section>
                  <div class="container-fluid">
                    <div class="row no-gutter">
                      <div class="flexslider">
                      <ul class="slides">
                      <li>    
                          <img href="wisataalam.html" src="<?php echo base_url()?>asset_front/images/foto/alam/a1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img href="wisataalam.html" src="<?php echo base_url()?>asset_front/images/foto/alam/b1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img href="wisataalam.html" src="<?php echo base_url()?>asset_front/images/foto/alam/c1.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
                </div>
                <section id="services" class="services service-section">
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
  </div>
</section>


<!-- content sebelum footer -->
    <div class="article-list">
        <div class="container">
            <div class="kol justify-content-center articles" style="margin-right:0px;margin-left:0px;padding-right:11px;">
                <div class="col-sm-6 col-md-4 item" style="padding-top:50px;padding-right:3px;padding-left:0px;"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg"></a>
                    <h3 class="name">Data Wisata</h3>
                    <p class="description">Daftar seputar objek Wisata yang terdapat di daerah Bantul terutama di Bukit Mojo Gumelem</p>
                    <a href="<?php echo base_url('Welcome/wisata');?>" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-4 item" style="padding-right:0px;padding-left:3px;"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a>
                    <h3 class="name">Data Artikel</h3>
                    <p class="description">Berita-berita terbaru tentang wisata di daerah Bantul dan sekitarnya</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
        </div>
        <div class="kol justify-content-center articles" id="coll_id_v" style="margin-right:0px;margin-left:0px;padding-right:11px;">
            <div class="col-sm-6 col-md-4 item" style="padding-top:50px;padding-right:3px;padding-left:0px;"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg"></a>
                <h3 class="name">Data Gallery</h3>
                    <p class="description">Gallery Bukit Mojo Gumelem yang berisikan tentang spot foto yang ada di Bukit Mojo Gumelem</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
            <div
                class="col-sm-6 col-md-4 item" style="padding-right:0px;padding-left:3px;"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a>
                <h3 class="name">Tentang Kami</h3>
                <p class="description">Temukan kami dari manapun kalian berada menngunakan akses Map.</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
    </div>
    </div>
    </div>


<!-- Footer  -->
<footer class="footer">
  <div class="footer-top section">
    <div class="container" align="center">
      <div class="row">
        <a style="padding:20px"; href="https://www.facebook.com/bagoesnuriyawan1922/"><i class="fa fa-facebook"></i></a>
        <a style="padding:20px"; href="https://www.instagram.com/bukitmojo_gumelem/"><i class="fa fa-instagram"></i></a>
        <br>
        <br>
      <p>Copyright © 2019 Pengurus Bukit Mojo Gumelem Yogyakarta | <a href="index.html">Admin</a></p>
      </div>
    </div>
  </div>
</footer>
<!-- footer --> 
  
</footer>
<!-- content atas Footer 4 -->
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/boot.min.js"></script>
<!-- Footer --> 
<!-- JS FILES --> 
<script src="<?php echo base_url()?>callie/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>callie/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>callie/js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url()?>callie/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="<?php echo base_url()?>asset_front/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url()?>asset_front/js/jquery.flexslider-min.js"></script> 
<script src="<?php echo base_url()?>asset_front/js/jquery.fancybox.pack.js"></script> 
<script src="<?php echo base_url()?>asset_front/js/retina.min.js"></script> 
<script src="<?php echo base_url()?>asset_front/js/modernizr.js"></script> 
<script src="<?php echo base_url()?>asset_front/js/main.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>asset_front/js/jquery.contact.js"></script>
<!-- JS sLIDE aTAS BERANDA -->
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
</body>
</html>