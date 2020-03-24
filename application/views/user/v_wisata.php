<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h6><strong><?php echo $judul;?></strong></h6>
      <p>Daftar seputar objek Wisata yang terdapat di daerah Bantul</p>
    </div>
  </div>
</section>
<!-- header section --> 
<!-- intro section -->
<!-- intro section --> 
<!-- Artikel section -->
<section id="services" class="services service-section">
  <div class="container">
      <div class="container">

        <!-- Marketing Icons Section -->
        </br>
        <div class="row">
            <div class="col-lg-12"></div>
            <?php foreach ($hasil as $key => $wisata) {?>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 style="text-align: center;"><img src="<?php echo base_url()?>upload/wisata/<?php echo $wisata['foto'];?>" style="width: 300px; height: 200px;"></h4>
                        <h5 style="height: 30px;"><strong><?php echo $wisata['judul'];?></strong></h5>
                    </div>
                    <div class="panel-body" class="fullpost" style="height: 250px; text-align:justify;">
                        <p><?php echo $wisata['keterangan'];?></p>
                        <a href="<?php echo $wisata['url'];?>" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
</section>