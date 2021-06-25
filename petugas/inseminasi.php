<?php $thisPage = "Inseminasi"; ?>
<?php include 'header.php'; ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="rose">
                                    <i class="material-icons">view_list</i> </a>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Data Pengajuan Layanan Inseminasi</a></h4>
                                    <div class="toolbar">
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID Inseminasi</th>
                                                    <th>ID Hewan</th>
                                                    <th>Username</th>
                                                    <th>Alamat</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>ID Inseminasi</th>
                                                    <th>ID Hewan</th>
                                                    <th>Username</th>
                                                    <th>Alaamt</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
  //menampilkan data mysqli
  include "koneksi.php";
  
  $query=mysql_query("SELECT * FROM tbl_inseminasi WHERE id_petugas = '$xid_petugas' and status_ib !='pengajuan'");
  while($data=mysql_fetch_array($query)){       
?>
                                                <tr>
                                                    <td><?php echo $data["id_inseminasi"]; ?></td>
                                                    <td><?php echo $data["id_hewan"]; ?></td>
                                                    <td><?php echo $data["username_user"]; ?></td>
                                                    <td><?php echo $data["alamat"]; ?></td>
                                                    <td><?php echo $data['tgl_ib']; ?></td>
                                                    <td><?php echo $data["status_ib"]; ?></td>
                                                    <td class="text-right">
                                                        <?php if ($data["status_ib"] == "proses"){ ?>
                                                       <a href="prosesinseminasi.php?id=<?php echo $data['id_inseminasi'];?>&id_hewan=<?php echo $data['id_hewan'];?>&username_user=<?php echo $data['username_user'];?>"class="btn btn-simple btn-danger btn-icon"><i class="material-icons">edit</i></a>
                                                       <?php }else if ($data["status_ib"] == "batal" or $data["status_ib"] == "gagal" ){ ?>
                                                       <a class="btn btn-simple btn-danger btn-icon"><i class="material-icons">cancel</i></a>
                                                        <?php } else{ ?>
                                                        <a class="btn btn-simple btn-info btn-icon"><i class="material-icons">checked</i></a>
                                                        <?php };?>
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