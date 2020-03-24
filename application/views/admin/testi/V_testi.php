
            <div class="panel-heading">
                <h1>Data Testimoni
                </h1>
            </div>
            <!-- /.panel-heading -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Testimoni <?php echo $this->session->flashdata('message') ?>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>nama_user</th>
                                <th>email</th>
                                <th>saran</th>
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
                            <td><?php echo $list['name'];?></td>
                            <td><?php echo $list['email'];?></td>
                            <td><?php echo $list['saran'];?></td>
                            <td class=" ">  
                                <?php echo 
                            '<div class="btn-group">
                             &nbsp&nbsp
                            <span data-toggle="modal" data-target="#confirm-delete" >
                            <a href="'.base_url().'Admin/Data_komen/delete/'.$list['id'].'" class="btn btn-danger" role="button" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-trash"></i></a>
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