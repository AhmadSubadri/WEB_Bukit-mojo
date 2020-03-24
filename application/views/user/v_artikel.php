<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h6><strong><?php echo $judul;?></strong></h6>
      <p>Berita-berita terbaru tentang wisata di daerah Bantul dan sekitarnya</p>
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
            <?php foreach ($hasil as $key => $artikel) {?>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 style="text-align: center;"><img src="<?php echo base_url()?>upload/artikel/<?php echo $artikel['foto'];?>" style="width: 300px; height: 200px;"></h4>
                        <p style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $artikel['judul'];?></p>
                    </div>
                    <div class="panel-body">
                        <p style="height: 100px;"><?php echo $artikel['keterangan'];?></p>
                        <a href="<?php echo $artikel['url'];?>" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
</section>