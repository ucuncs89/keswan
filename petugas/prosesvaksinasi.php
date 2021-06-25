<?php $thisPage = "Vaksinasi"; ?>
<?php include 'header.php'; ?>
<?php
$id_vaksinasi=$_GET['id'];
$id_hewan=$_GET['id_hewan'];
$username_user=$_GET['username_user'];
include 'koneksi.php'; 
 $query=mysql_query("SELECT * FROM tbl_vaksinasi where id_vaksinasi = '$id_vaksinasi'");
$data=mysql_fetch_array($query)
?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="rose">
                                    <i class="material-icons">person</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Silahkan Isi Data</h4>
                                    <form action="" name="modal_edit" enctype="multipart/form-data" method="POST">
            <div class="form-group" style="padding-bottom: 20px;">
                  <label>ID Vaksinasi</label>
                  <input type="text" name="id_vaksinasi"  class="form-control" value="<?php echo $data["id_vaksinasi"]; ?>" readonly/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">  
                  <label>Username User</label>
<?php $sqluser="SELECT * FROM tbl_user where username_user = '$username_user'";
$queryuser=mysql_query($sqluser);
$datauser=mysql_fetch_array($queryuser)
?>
                  <input type="text" name="username_user"  class="form-control" value="<?php echo $data["username_user"]; ?> - <?php echo $datauser["nama_user"]; ?>" readonly/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Tanggal</label>
                  <input type="text" name="tgl_vaksinasi"  class="form-control"  value="<?php echo $data["tgl_vaksinasi"]; ?>" readonly/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Alamat</label>
                  <input type="text" name="alamat"  class="form-control"  value="<?php echo $data["alamat"]; ?>" readonly/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>ID Hewan</label>
<?php $sqlhewan="SELECT * FROM tbl_hewan where id_hewan = '$id_hewan'";
$queryhewan=mysql_query($sqlhewan);
$datahewan=mysql_fetch_array($queryhewan)
?>
                  <input type="text" name="id_hewan"  class="form-control"  value="ID Hewan : <?php echo $data["id_hewan"]; ?> - <?php echo $datahewan["jenis_hewan"]; ?> - <?php echo $datahewan["jenis_kelamin_hewan"]; ?> - <?php echo $datahewan["umur_hewan"]; ?> Tahun" readonly/>
                </div>                
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>ID Petugas</label>
                  <input type="text" name="id_petugas"  class="form-control"  value="<?php echo $data["id_petugas"]; ?>" readonly/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Nama Vaksinasi</label>
                  <input type="text" name="nama_vaksinasi" class="form-control" required />
                </div>
                
              <div class="modal-footer">
                  <input type="submit" class="btn btn-success" type="submit" name="submit" value="Confirm">
                  <a href="?batal&id=<?php echo $data['id_vaksinasi'];?>" onclick="confirm('Yakin Ingin Membatalkan ID Kelahiran : <?php echo $data['id_vaksinasi']; ?>');" class="btn btn-danger">Cancel</a>
              </div>
                </div>
              </form>
                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
<?php include 'footer.php'; ?>s
<?php 
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $id_vaksinasi=$_POST['id_vaksinasi'];
    $nama_vaksinasi=$_POST['nama_vaksinasi'];
$sql = "UPDATE `tbl_vaksinasi` SET `nama_vaksinasi` = '$nama_vaksinasi', `status` = 'selesai' WHERE `tbl_vaksinasi`.`id_vaksinasi` = '$id_vaksinasi';
";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Tersimpan')
    window.location.href='vaksinasi.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Tersimpan')
    window.location.href='vaksinasi.php';
    </script>");
}
}
?>
<?php 
if (isset($_GET['batal'])) {
    $id=$_GET['id'];
$sql = "UPDATE `tbl_vaksinasi` SET `status` = 'batal' WHERE `id_vaksinasi` = '$id';";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Terbatalkan')
    window.location.href='vaksinasi.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Gagal Batal')
    window.location.href='vaksinasi.php';
    </script>");
}
}
?>