<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Form Input Admin</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Form Data Admin
                                    <span style="float:right;">
                                        <?php echo anchor('Admin/Data_admin/','<button>Kembali</button>');?>
                                    </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" 
                                        <?php echo $this->session->flashdata('message');?>
                                    <?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";?>
                                    <?php
                                        $attributes = array('autocomplete' => 'off','role' => 'form');
                                        echo form_open_multipart("Admin/Data_admin/add",$attributes);
                                    ?>
                                             <div class="form-group">
                                                <label>Nama Awal</label>
                                                <input id="na" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                                 data-validate-words="2" name="na" placeholder="Tuliskan disini" 
                                                 required="required" type="text">
                                             </div>
                                             <div class="form-group">
                                                <label>Nama Akhir</label>
                                                <input id="nak" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                                 data-validate-words="2" name="nak" placeholder="Tuliskan disini" 
                                                 required="required" type="text">
                                             </div>
                                             <div class="form-group">
                                                <label>Email</label>
                                                <input id="email" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                                 data-validate-words="2" name="email" placeholder="Tuliskan disini" 
                                                 required="required" type="email">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input id="password" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                                 data-validate-words="2" name="password" placeholder="Tuliskan disini" 
                                                 required="required" type="password">
                                            </div>
                                            <div class="form-group">
                                                <label>No Telp</label>
                                                <input id="telp" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                                 data-validate-words="2" name="telp" placeholder="Tuliskan disini" 
                                                 required="required" type="numeric">
                                            </div>
                                            <br><br>
                                            <div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                            <?php echo form_close();?>
                                          </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>