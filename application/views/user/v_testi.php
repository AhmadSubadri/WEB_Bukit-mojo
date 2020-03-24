<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h6><strong><?php echo $judul;?></strong></h6>
      <p>Berikan Testimoni mengenai wisata kami dengan memberi komentar di bawah ini</p>
    </div>
  </div>
</section>

<section id="services" class="services service-section">
  <div class="container">
    <section id="teams" class="section teams" style="margin-bottom: -100px; margin-top: -200px;">
      <div class="container" style="width: 100%;">
        <div class="row">
          <?php foreach ($hasil as $key => $testi) {?>
          <div class="col-md-3 col-sm-6">
              <div class="person">
                <div class="person-content">
                </div>
                <h4><?php echo $testi['name'];?></h4>
                  <p><?php echo $testi['saran'];?></p>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
    </section>
      <div class="container">
        <hr style="border: solid; color: black;">
        <form class="form-horizontal"

        <?php echo $this->session->flashdata('message');?>
        <?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";?>
        <?php $attributes = array('autocomplete' => 'off','role' => 'form');
        echo form_open_multipart("Admin/Data_komen/add/",$attributes);?>

          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" placeholder="name" style="width: 90%;">
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="email" style="width: 90%;">
            </div>
          </div>
          <div class="form-group">
            <label for="saran" class="col-sm-2 control-label">Komentar</label>
            <div class="col-sm-10">
              <textarea name="saran" rows="10" name="saran" placeholder="saran" style="width: 90%;"></textarea>
            </div>
          </div>
          <div>
          <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <?php echo form_close();?>
        </form>
    </div>
  </div>

  <amp-facebook-comments wisth=486 height=657 
    layout="responsive"
    data-numposts="5"
    data-href="http://localhost/MOJO/index.php/Welcome/testi.html">
  </amp-facebook-comments>
</section>