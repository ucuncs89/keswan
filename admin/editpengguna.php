<?php $thisPage = "Inseminasi"; ?>
<?php include 'header.php'; ?>
<?php
$id_pengguna=$_GET['id'];
include 'koneksi.php'; 
 $query=mysql_query("SELECT * FROM tbl_user where username_user = '$id_pengguna'");
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
                                    <h4 class="card-title">Edit Pengguna</h4>
                                    
          <form action="" name="modal_edit" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="username_user" value="<?php echo $data['username_user']; ?>">
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="nama_user">Nama</label>
                  <input type="text" name="nama_user"  class="form-control" value="<?php echo $data["nama_user"]; ?>" required/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="nama_user">Email </label>
                  <input type="email" name="email_user"  class="form-control"  value="<?php echo $data["email_user"]; ?>" required/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="nama_user">Alamat</label>
                  <input type="text" name="alamat_user"  class="form-control"  value="<?php echo $data["alamat_user"]; ?>" required/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="nama_user">Password</label>
                  <input type="password" name="password_user"  class="form-control" min="6" max="32" value="<?php echo $data['password_user'] ?>" required>
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
    $username_user=$_POST['username_user'];
    $nama_user=$_POST['nama_user'];
    $password_user=$_POST['password_user'];
    $alamat_user=$_POST['alamat_user'];
    $email_user=$_POST['email_user'];
$sql = "UPDATE `tbl_user` SET `nama_user` = '$nama_user', `email_user` = '$email_user', `alamat_user` = '$alamat_user', `password_user` = '$password_user' WHERE `tbl_user`.`username_user` = '$username_user';";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Tersimpan')
    window.location.href='pengguna.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Tersimpan')
    </script>");
}
}
?>