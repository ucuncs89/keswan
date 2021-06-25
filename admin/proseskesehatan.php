<?php $thisPage = "Kesehatan"; ?>
<?php include 'header.php'; ?>
<?php
$id_periksa=$_GET['id'];
include 'koneksi.php'; 
 $query=mysql_query("SELECT * FROM tbl_periksa where id_periksa = '$id_periksa'");
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
                                    <h4 class="card-title">Pilih Petugas Kesehatan Hewan</h4>
                                    <form action="" name="modal_edit" enctype="multipart/form-data" method="POST">
            <div class="form-group" style="padding-bottom: 20px;">
                  <label>ID Periksa</label>
                  <input type="text" name="id_periksa"  class="form-control" value="<?php echo $data["id_periksa"]; ?>" readonly/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Username User</label>
                  <input type="text" name="username_user"  class="form-control" value="<?php echo $data["username_user"]; ?>" readonly/>
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
                  <label >Petugas</label>
                  <select name="id_petugas" required="required" class="form-control">
                  <?php 
                  $query=mysql_query("SELECT * FROM tbl_petugas");
                while($data=mysql_fetch_array($query)){ ?>       
                  <option value="<?php echo $data['id_petugas']; ?>"> <?php echo $data['id_petugas']; ?> - <?php echo $data['nama_petugas']; ?></option>
                <?php  } ?>
                  </select>
                </div>
              <div class="modal-footer">
                  <button class="btn btn-success" type="submit" name="edit">
                      Confirm
                  </button>
                  <a href="javascript:javascript:history.go(-1)" class="btn btn-danger">Cancel</a>
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
    $id_periksa=$_POST['id_periksa'];
    $id_petugas=$_POST['id_petugas'];
$sql = "UPDATE `tbl_periksa` SET `id_petugas` = '$id_petugas', `status` = 'proses' WHERE `id_periksa` = '$id_periksa';";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Tersimpan')
    window.location.href='kesehatan.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Tersimpan')
    window.location.href='kesehatan.php#ModalEdit$id_periksa';
    </script>");
}
}
?>