<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISTEM BERBASIS WEB PARIWISATA</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>asset/css/metisMenu.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>asset_front/css/flexslider.css">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url();?>asset/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>asset/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>asset/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script> -->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <section class="banner" role="banner">
    <header id="header">
    <div class="primary-nav" class="header-content clearfix">
    <nav class="navbar navbar-inverse" role="primary-nav">
            <li class="dropdown">
                <ul class="nav navbar-nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php  $log=$this->db->get_where('admin', array('email' => $this->session->userdata('email'),
                            'email' => $this->session->userdata('email')))->row_array();
                            echo $log['nama_awal'];?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li><a href="<?php echo base_url();?>admin/Login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="primary-nav" class="header-content clearfix">
                <nav class="navigation" role="navigation">
                <ul class="nav" id="side-menu">
                    <li><a href="<?php echo site_url('Admin/Dashbord');?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Home</a></li>
                    <li><a href="<?php echo site_url('Admin/Data_admin');?>"><i class="fa fa-user fa-fw"></i> Data Admin</a></li>
                    <li><a href="<?php echo site_url('Admin/Data_wisata');?>"><i class="fa fa-book fa-fw"></i> Data Wisata</a></li>
                    <li><a href="<?php echo site_url('Admin/Data_artikel');?>"><i class="fa fa-book fa-fw"></i> Data Artikel</a></li>
                    <li><a href="<?php echo site_url('Admin/Data_gallery');?>"><i class="fa fa-image fa-fw"></i> Data Gallery</a></li>
                    <li><a href="<?php echo site_url('Admin/Data_video');?>"><i class="fa fa-youtube fa-fw"></i> Data Video</a></li>
                    <li><a href="<?php echo site_url('Admin/Data_komen');?>"><i class="fa fa-book fa-fw"></i> Data Komentar</a></li>
                </ul>
                </nav>
            </div>
        </div>
    </nav>
</div>
</header>
</section>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <?php echo $content;?>
                </div>
            </div>

            <!-- ... Your content goes here ... -->

        </div>
    </div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url()?>asset_front/js/jquery.flexslider-min.js"></script> 
<script src="<?php echo base_url();?>asset/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url();?>asset/js/startmin.js"></script>

</body>
</html>
