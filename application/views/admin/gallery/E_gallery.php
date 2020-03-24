<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Form Edit Gallery</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                 Edit Data Gallery
                 <span style="float:right;">
                    <?php echo anchor('Admin/Data_gallery/','<button>Kembali</button>');?>
                
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" 
                        <?php $id = $hasil->id;
                            echo form_open_multipart('admin/Data_gallery/edit/'.$id);?>
                            <div class="form-group">
                                <label>ID</label>
                                <input id="id" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                 data-validate-words="2" name="id" placeholder="Tuliskan disini" 
                                 required="required" type="text"
                                 value="<?php echo $hasil->id;?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Jenis Wisata</label>
                                <input id="jenis_wisata" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                 data-validate-words="2" name="jenis_wisata" placeholder="Tuliskan disini" 
                                 required="required" type="text"
                                 value="<?php echo $hasil->jenis_wisata;?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Tempat</label>
                                <input id="nama_tempat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                 data-validate-words="2" name="nama_tempat" placeholder="Tuliskan disini" 
                                 required="required" type="text"
                                 value="<?php echo $hasil->nama_tempat;?>">
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