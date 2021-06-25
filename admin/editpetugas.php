<?php $thisPage = "Inseminasi"; ?>
<?php include 'header.php'; ?>
<?php
$id_petugas=$_GET['id'];
include 'koneksi.php'; 
 $query=mysql_query("SELECT * FROM tbl_petugas where id_petugas = '$id_petugas'");
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
                                    <h4 class="card-title">Pilih Petugas</h4>
                                    
          <form action="" name="modal_edit" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="id_petugas" value="<?php echo $data['id_petugas']; ?>">
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="nama_user">Nama</label>
                  <input type="text" name="nama_petugas"  class="form-control" value="<?php echo $data["nama_petugas"]; ?>" required />
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="nama_user">Email </label>
                  <input type="email" name="email_petugas"  class="form-control"  value="<?php echo $data["email_petugas"]; ?>" required />
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="nama_user">No Telepon</label>
                  <input type="text" name="no_telepon_petugas"  class="form-control"  value="<?php echo $data["no_telepon_petugas"]; ?>" required/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="nama_user">Password</label>
                  <input type="password" name="password_petugas"  class="form-control" min="6" max="32" value="<?php echo $data['password_petugas'] ?>" required>
                </div>
              <div class="modal-footer">
                  <button class="btn btn-success" type="submit" name="edit">
                      Confirm
                  </button>

                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                  </button>
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
  
    $id_petugas=$_POST['id_petugas'];
    $nama_petugas=$_POST['nama_petugas'];
    $password_petugas=$_POST['password_petugas'];
    $no_telepon_petugas=$_POST['no_telepon_petugas'];
    $email_petugas=$_POST['email_petugas'];
$sql = "UPDATE `tbl_petugas` SET `nama_petugas` = '$nama_petugas', `email_petugas` = '$email_petugas', `no_telepon_petugas` = '$no_telepon_petugas', `password_petugas` = '$password_petugas' WHERE `tbl_petugas`.`id_petugas` = '$id_petugas';";

$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Tersimpan')
    window.location.href='petugas.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Tersimpan')
    window.location.href='petugas.php#ModalAdd';
    </script>");
}
}
?>