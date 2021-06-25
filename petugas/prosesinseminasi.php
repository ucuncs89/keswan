<?php $thisPage = "Inseminasi"; ?>
<?php include 'header.php'; ?>
<?php
$id_inseminasi=$_GET['id'];
$id_hewan=$_GET['id_hewan'];
$username_user=$_GET['username_user'];
include 'koneksi.php'; 
 $query=mysql_query("SELECT * FROM tbl_inseminasi where id_inseminasi = '$id_inseminasi'");
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
                                    <h4 class="card-title">Silahkan Isi Data Inseminasi</h4>
                                    <form action="" name="modal_edit" enctype="multipart/form-data" method="POST">
            <div class="form-group" style="padding-bottom: 20px;">
                   <label>ID Inseminasi</label>
                  <input type="text" name="id_inseminasi"  class="form-control" value="<?php echo $data["id_inseminasi"]; ?>" readonly/>
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
                  <input type="text" name="tgl_ib"  class="form-control"  value="<?php echo $data["tgl_ib"]; ?>" readonly/>
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
                  <label>Nama Pejantan</label>
                  <input type="text" name="nama_pejantan" class="form-control" required />
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Kode Straw</label>
                  <input type="text" name="kode_straw" class="form-control" required />
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>IB KE</label>
                  <select name="ib_ke"  class="form-control" required/>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                    </select>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Status</label>
                  <select name="status_ib"  class="form-control" required/>
                  <option>sukses</option>
                  <option>gagal</option>
                    </select>
                </div>
                </div>
              <div class="modal-footer">
                  <button class="btn btn-success" type="submit" name="edit">
                      Confirm
                  </button>
                  <a href="?batal&id=<?php echo $data['id_inseminasi'];?>" onclick="confirm('Yakin Ingin Membatalkan ID Inseminasi : <?php echo $data['id_inseminasi']; ?>');" class="btn btn-danger">Cancel</a>
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
<?php include 'footer.php'; ?>
<?php 
include 'koneksi.php';
if (isset($_POST['edit'])) {
    $id_inseminasi=$_POST['id_inseminasi'];
    $nama_pejantan=$_POST['nama_pejantan'];
    $ib_ke=$_POST['ib_ke'];
    $status_ib=$_POST['status_ib'];
    $kode_straw=$_POST['kode_straw'];
$sql = "UPDATE `tbl_inseminasi` SET `nama_pejantan` = '$nama_pejantan', `ib_ke` = '$ib_ke', `status_ib` = '$status_ib', `kode_straw` = '$kode_straw' WHERE `tbl_inseminasi`.`id_inseminasi` = '$id_inseminasi';";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Tersimpan')
    window.location.href='inseminasi.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Tersimpan')
    window.location.href='inseminasi.php';
    </script>");
}
}
?>
<?php 
include 'koneksi.php';
if (isset($_GET['batal'])) {
    $id_inseminasi=$_GET['id'];
$sql = "UPDATE `tbl_inseminasi` SET `status_ib` = 'batal' WHERE `tbl_inseminasi`.`id_inseminasi` = '$id_inseminasi';";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Terbatalkan')
    window.location.href='inseminasi.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Gagal Batal')
    window.location.href='inseminasi.php';
    </script>");
}
}
?>