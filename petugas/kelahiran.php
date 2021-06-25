<?php $thisPage = "Kelahiran"; ?>
<?php include 'header.php'; ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="rose">
                                    <i class="material-icons">people</i> </a>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Data Pengajuan Layanan Kesehatan</a></h4>
                                    <div class="toolbar">
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID Kelahiran</th>
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
                                                    <th>ID Kelahiran</th>
                                                    <th>ID Hewan</th>
                                                    <th>Username</th>
                                                    <th>Alamat</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
  //menampilkan data mysqli
  include "koneksi.php";
  $query=mysql_query("SELECT * FROM tbl_kelahiran WHERE id_petugas = '$xid_petugas' and status !='pengajuan'");
  while($data=mysql_fetch_array($query)){       
?>
                                                <tr>
                                                    <td><?php echo $data["id_kelahiran"]; ?></td>
                                                    <td><?php echo $data["id_hewan"]; ?></td>
                                                    <td><?php echo $data["username_user"]; ?></td>
                                                    <td><?php echo $data["alamat"]; ?></td>
                                                    <td><?php echo $data['tgl_pkb']; ?></td>
                                                    <td><?php echo $data["status"]; ?></td>
                                                    <td class="text-right">
                                                        <?php if ($data["status"] == "proses"){ ?>
                                                       <a href="proseskelahiran.php?id=<?php echo $data['id_kelahiran'];?>&id_hewan=<?php echo $data['id_hewan'];?>&username_user=<?php echo $data['username_user'];?>"class="btn btn-simple btn-danger btn-icon"><i class="material-icons">edit</i></a>
                                                       <?php }else if ($data["status"] == "batal" or $data["status"] == "gagal" ){ ?>
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
<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $tgl_pkb=$_POST['tgl_pkb'];
    $alamat=$_POST['alamat'];
    $id_hewan=$_POST['id_hewan'];
$sql = "INSERT INTO `tbl_kelahiran` (`id_kelahiran`, `tgl_pkb`, `id_petugas`, `username_user`, `id_hewan`, `kode_straw`, `bulan`, `jenis_kelamin_anak`, `status`, `jumlah_lahir`, `alamat`) VALUES (NULL, '$tgl_pkb', '', '$xusername_user', '$id_hewan', '', '0', '', 'pengajuan', '0', '$alamat');";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Tersimpan')
    window.location.href='kelahiran.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Tersimpan')
    window.location.href='kelahiran.php';
    </script>");
    }
}
?>
<?php 
if (isset($_GET['delete'])) {
    $id = $_GET['id'];
 $sql = "DELETE FROM `tbl_kelahiran` WHERE `tbl_kelahiran`.`id_kelahiran` = '$id' and status = 'pengajuan'";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Terhapus')
    window.location.href='kelahiran.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Terhapus')
    window.location.href='kelahiran.php';
    </script>");
}   
}
?>