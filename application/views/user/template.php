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
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BUKIT MOJO</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="<?php echo base_url()?>asset_front/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>asset_front/js/bootstrap.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>asset_front/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>asset_front/css/flexslider.css">
<link rel="stylesheet" href="<?php echo base_url()?>asset_front/css/jquery.fancybox.css">
<link rel="stylesheet" href="<?php echo base_url()?>asset_front/css/main.css">
<link rel="stylesheet" href="<?php echo base_url()?>asset_front/css/responsive.css">
<link rel="stylesheet" href="<?php echo base_url()?>asset_front/css/font-icon.css">
<link rel="stylesheet" href="<?php echo base_url()?>asset_front/css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="<?php echo base_url()?>asset_front/images/jogjakublack.png">
</head>

<body>
<!-- header section -->
<section>
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.html">BUKIT MOJO</a>
      <nav class="navigation" role="navigation">
      <ul class="primary-nav">
          <li><?php echo anchor('Welcome','Beranda')?></li>
          <li><?php echo anchor('Welcome/wisata','Wisata')?></li>
          <li><?php echo anchor('Welcome/artikel','Artikel')?></li>
          <li><?php echo anchor('Welcome/gallery','Gallery')?></li>
          <li><?php echo anchor('Welcome/testi','Testimonial')?></li>
          <li><?php echo anchor('Welcome/about','Tentang kami')?></li>
          <li><?php echo anchor('Admin/Login','Login')?></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- banner text -->
</section>
<!-- header section --> 
<!-- services section --> 

    <?php echo $content;?>

<!-- Artikel section --> 
<!-- Footer section -->
<footer class="footer">
  <div class="footer-top section">
    <div class="container" align="center">
      <div class="row">
        <a style="padding:20px"; href="#"><i class="fa fa-facebook"></i></a>
        <!-- <a style="padding:20px"; href="#"><i class="fa fa-twitter"></i></a>
        <a style="padding:20px"; href="#"><i class="fa fa-linkedin"></i></a> -->
        <a style="padding:20px"; href="#"><i class="fa fa-instagram"></i></a>
        <br>
        <br>
      <p>Copyright © 2019 Pengurus Bukit Mojo Gumelem Yogyakarta | <a href="index.html">Admin</a></p>
      </div>
    </div>
  </div>
</footer>
  <!-- footer top --> 
  
</footer>
<!-- Footer section --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="<?php echo base_url()?>asset_front/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url()?>asset_front/js/jquery.flexslider-min.js"></script> 
<script src="<?php echo base_url()?>asset_front/js/jquery.fancybox.pack.js"></script> 
<script src="<?php echo base_url()?>asset_front/js/retina.min.js"></script> 
<script src="<?php echo base_url()?>asset_front/js/modernizr.js"></script> 
<script src="<?php echo base_url()?>asset_front/js/main.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>asset_front/js/jquery.contact.js"></script>
</body>
</html>