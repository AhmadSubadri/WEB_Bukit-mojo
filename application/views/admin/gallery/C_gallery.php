<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Form Input Gambar</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Form Data Gambar
                                    <span style="float:right;">
                                        <?php echo anchor('Admin/Data_gallery/','<button>Kembali</button>');?>
                                    </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                          <?php echo $this->session->set_flashdata('message');?>
                                            
                                            <?php
                                                $attributes = array('autocomplete' => 'off','role' => 'form');
                                                echo form_open_multipart("Admin/Data_gallery/add",$attributes);
                                            ?>
                                        <form role="form">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Jenis Wisata</label>
                                                    <input id="jenis_wisata" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                                     data-validate-words="2" name="jenis_wisata" placeholder="Tuliskan disini" 
                                                     required="required" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Tempat</label>
                                                    <input id="nama_tempat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                                     data-validate-words="2" name="nama_tempat" placeholder="Tuliskan disini" 
                                                     required="required" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>Foto</label>
                                                    <input id="foto" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                                     data-validate-words="2" name="foto" placeholder="Tuliskan disini" 
                                                     required="required" type="file">
                                                </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                               
                                            </div>
                                        </form>
                                         <?php echo form_close();?>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                    