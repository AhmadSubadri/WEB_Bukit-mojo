<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Form Input Artikel</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Form Data Artikel
                                    <span style="float:right;">
                                        <?php echo anchor('Admin/Data_wisata/','<button>Kembali</button>');?>
                                    </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                          <?php echo $this->session->set_flashdata('message');?>
                                            
                                            <?php
                                                $attributes = array('autocomplete' => 'off','role' => 'form');
                                                echo form_open_multipart("Admin/Data_wisata/add",$attributes);
                                            ?>
                                        <form role="form">
                                             <div class="form-group">
                                                <label>Judul</label>
                                                <input id="judul" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                                 data-validate-words="2" name="judul" placeholder="Tuliskan disini" 
                                                 required="required" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input id="keterangan" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                                 data-validate-words="2" name="keterangan" placeholder="Tuliskan disini" 
                                                 required="required" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>URL</label>
                                                <input id="url" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                                 data-validate-words="2" name="url" placeholder="Tuliskan disini" 
                                                 required="required" type="url">
                                            </div>
                                            <div class="form-group">
                                                    <label>Foto</label>
                                                    <input type="file" name="foto">
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
                    