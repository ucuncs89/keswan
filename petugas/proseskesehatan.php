<?php $thisPage = "Kesehatan"; ?>
<?php include 'header.php'; ?>
<?php
include 'koneksi.php'; 
$id_periksa=$_GET['id'];
$id_hewan=$_GET['id_hewan'];
$username_user=$_GET['username_user'];
$query=mysql_query("SELECT * FROM tbl_periksa where id_periksa = '$id_periksa' and username_user='$username_user' and id_hewan='$id_hewan'");
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
                                    <h4 class="card-title">Silihkan Isi Data Kesehatan</h4>
                                    <form action="" name="modal_edit" enctype="multipart/form-data" method="POST">
            <div class="form-group" style="padding-bottom: 20px;">
                  <label>ID Periksa</label>
                  <input type="text" name="id_periksa"  class="form-control" value="<?php echo $data["id_periksa"]; ?>" readonly/>
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
                  <label>Anamnese</label>
                  <input type="text" name="anamnese"  class="form-control"  value="<?php echo $data["anamnese"]; ?>" readonly/>
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
                  <label>Gejala</label>
                  <input type="text" name="gejala" class="form-control"/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Diagnosa</label>
                  <input type="text" name="diagnosa"  class="form-control"/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Terapi</label>
                  <input type="text" name="terapi"  class="form-control"/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Ket</label>
                  <input type="text" name="ket"  class="form-control"/>
                </div>
              <div class="modal-footer">
                  <button class="btn btn-success" type="submit" name="edit">
                      Confirm
                  </button>
                  <a href="?batal&id=<?php echo $data['id_periksa'];?>" onclick="confirm('Yakin Ingin Membatalkan ID Periksa : <?php echo $data['id_periksa']; ?>');" class="btn btn-danger">Cancel</a>
              </div>
              </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
<?php include 'footer.php'; ?>
<?php 
if (isset($_POST['edit'])) {
    $gejala=$_POST['gejala'];
    $diagnosa=$_POST['diagnosa'];
    $terapi=$_POST['terapi'];
    $ket=$_POST['ket'];
    $id_periksa==$_POST['id_petugas'];
$sql = "UPDATE `tbl_periksa` SET `gejala` = '$gejala', `diagnosa` = '$diagnosa', `terapi` = '$terapi', `ket` = '$ket', `status` = 'selesai' WHERE `id_periksa` = '$id_periksa';";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Tersimpan')
    window.location.href='kesehatan.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Tersimpan')
    window.location.href='kesehatan.php';
    </script>");
}
}
?>
<?php 
if (isset($_GET['batal'])) {
    $id=$_GET['id'];
$sql = "UPDATE `tbl_periksa` SET `status` = 'batal' WHERE `id_periksa` = '$id';";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Terbatalkan')
    window.location.href='kesehatan.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Gagal Batal')
    window.location.href='kesehatan.php';
    </script>");
}
}
?>