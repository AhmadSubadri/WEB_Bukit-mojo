
            <div class="panel-heading">
                <h1>Data Admin
				</h1>
            </div>
            <!-- /.panel-heading -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Admin <?php echo $this->session->flashdata('message') ?>
                <span style="float:right">
					<?php echo anchor('Admin/Data_admin/add','<button type="button" class="btn btn-success" >Tambah Data</button></a>');?>
				</span>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Nama Awal</th>
                                <th>Nama Akhir</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Telp</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                  $no = 1;
                                    foreach($hasil as $list)
                                    {
                                    ?>
                          <tr class="even pointer">
                            <td><?php echo $no++;?></td>
                            <td><?php echo $list['id'];?></td>
                            <td><?php echo $list['nama_awal'];?></td>
                            <td><?php echo $list['nama_akhir'];?></td>
                            <td><?php echo $list['email'];?></td>
							<td><?php echo $list['password'];?></td>
							<td><?php echo $list['telp'];?></td>
                            <td class=" ">  
                                <?php echo 
                            '<div class="btn-group">
                             <a href="'.base_url().'Admin/Data_admin/edit/'.$list['password'].'" class="btn btn-warning" role="button" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                             &nbsp&nbsp
                            <span data-toggle="modal" data-target="#confirm-delete" >
                            <a href="'.base_url().'Admin/Data_admin/delete/'.$list['password'].'" class="btn btn-danger" role="button" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-trash"></i></a>
                            </span>
                            </td>
                             </tr>
                           ';?>
                          <?php }
                          ?>
                        </tbody>
                    </table>
                </div>
               
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>