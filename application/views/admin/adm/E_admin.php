<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Form Edit Admin</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                 Edit Data Admin
                 <span style="float:right;">
                    <?php echo anchor('Admin/Data_admin/','<button>Kembali</button>');?>
                </span>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" 
                        <?php $id = $hasil->password;
                            echo form_open_multipart('Admin/Data_admin/edit/'.$id);?>
                            <div class="form-group">
                                <label>No</label>
                                <input id="no" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                 data-validate-words="2" name="no" placeholder="Tuliskan disini" 
                                 required="required" type="text"
                                 value="<?php echo $hasil->id;?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama Depan</label>
                                <input id="na" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                 data-validate-words="2" name="na" placeholder="Tuliskan disini" 
                                 required="required" type="text"
                                 value="<?php echo $hasil->nama_awal;?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Belakang</label>
                                <input id="nak" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                 data-validate-words="2" name="nak" placeholder="Tuliskan disini" 
                                 required="required" type="text"
                                 value="<?php echo $hasil->nama_akhir;?>">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input id="email" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                 data-validate-words="2" name="email" placeholder="Tuliskan disini" 
                                 required="required" type="email"
                                 value="<?php echo $hasil->email;?>">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input id="password" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                 data-validate-words="2" name="password" placeholder="Tuliskan disini" 
                                 required="required" type="text"
                                 value="<?php echo $hasil->password;?>">
                            </div>
                            <div class="form-group">
                                <label>No Telp</label>
                                <input id="telp" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                 data-validate-words="2" name="telp" placeholder="Tuliskan disini" 
                                 required="required" type="numeric"
                                 value="<?php echo $hasil->telp;?>">
                            </div>
                            <br><br>
                            <div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>