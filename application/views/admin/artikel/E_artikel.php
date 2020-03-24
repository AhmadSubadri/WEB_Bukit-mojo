<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Form Edit Artikel</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                 Edit Data Artikel
                 <span style="float:right;">
                    <?php echo anchor('Admin/Data_artikel/','<button>Kembali</button>');?>
                </span>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" 
                        <?php $id = $hasil->id;
                            echo form_open_multipart('Admin/Data_artikel/edit/'.$id);?>
                            <div class="form-group">
                                <label>ID</label>
                                <input id="id" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                 data-validate-words="2" name="id" placeholder="Tuliskan disini" 
                                 required="required" type="text"
                                 value="<?php echo $hasil->id;?>" readonly >
                            </div>
                            <div class="form-group">
                                <label>Judul</label>
                                <input id="judul" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                 data-validate-words="2" name="judul" placeholder="Tuliskan disini" 
                                 required="required" type="text"
                                 value="<?php echo $hasil->judul;?>">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input id="keterangan" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                data-validate-words="2" name="keterangan" placeholder="Tuliskan disini" 
                                required="required" type="text" value="<?php echo $hasil->keterangan;?>">
                            </div>
                            <div class="form-group">
                                <label>URL</label>
                                <input id="url" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                 data-validate-words="2" name="url" placeholder="Tuliskan disini" 
                                 required="required" type="url"
                                 value="<?php echo $hasil->url;?>">
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input id="foto" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                 data-validate-words="2" name="foto" placeholder="Tuliskan disini" 
                                 required="required" type="file"
                                 value="<?php echo $hasil->foto;?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>