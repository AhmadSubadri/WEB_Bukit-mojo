<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h6><strong><?php echo $judul;?></strong></h6>
      <p>Gallery Bukit Mojo Gumelem</p>
    </div>
  </div>
</section>

<section id="works" class="works section no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <?php foreach ($hasil as $key => $galeri) {?>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="<?php echo base_url()?>upload/gallery/<?php echo $galeri['foto']?>" class="work-box"> <img style="width: 100%; height: 200px;" src="<?php echo base_url()?>upload/gallery/<?php echo $galeri['foto']?>" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php echo $galeri['jenis_wisata'];?></h5>
            <p><?php echo $galeri['nama_tempat'];?></p>
          </div>
        </div> 
        </a> </div>
      <?php } ?>
    </div>
  </div>
</section>