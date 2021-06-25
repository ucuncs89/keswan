<?php $thisPage = "Kesehatan"; ?>
<?php include 'header.php'; ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="blue">
                                    <i class="material-icons">people</i> </a>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Data Pengajuan Layanan Kesehatan</a></h4>
                                    <div class="toolbar">
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID Periksa</th>
                                                    <th>ID Hewan</th>
                                                    <th>Username</th>
                                                    <th>Anamnese</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>ID Periksa</th>
                                                    <th>ID Hewan</th>
                                                    <th>Username</th>
                                                    <th>Anamnese</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
  //menampilkan data mysqli
  include "koneksi.php";
  
  $query=mysql_query("SELECT * FROM tbl_periksa WHERE status ='pengajuan'");
  while($data=mysql_fetch_array($query)){       
?>
                                                <tr>
                                                    <td><?php echo $data["id_periksa"]; ?></td>
                                                    <td><?php echo $data["id_hewan"]; ?></td>
                                                    <td><?php echo $data["username_user"]; ?></td>
                                                    <td><?php echo $data["anamnese"]; ?></td>
                                                    <td><?php echo $data['tgl_periksa']; ?></td>
                                                    <td><?php echo $data["status"]; ?></td>
                                                    <td class="text-right">
                                                        <a href="proseskesehatan.php?id=<?php echo $data['id_periksa']; ?>" class="btn btn-simple btn-info btn-icon"><i class="material-icons">edit</i></a>
                                                    </td>
                                                  </tr>
<?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->
                    </div>
                    <!-- end row -->
                </div>
            </div>
<?php include 'footer.php'; ?>
