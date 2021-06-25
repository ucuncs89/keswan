<?php $thisPage = "Pengguna"; ?>
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
                                    <h4 class="card-title">Data Pengguna</a></h4>
                                    <div class="toolbar">
                                    <a href="#" class="btn btn-primary" data-target="#ModalAdd" data-toggle="modal">Tambah</a>
                                    </div>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Alamat</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Alamat</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
  //menampilkan data mysqli
  include "koneksi.php";
  
  $query=mysql_query("SELECT * FROM tbl_user");
  while($data=mysql_fetch_array($query)){       
?>
                                                <tr>
                                                    <td><?php echo $data["username_user"]; ?></td>
                                                    <td><?php echo $data["nama_user"]; ?></td>
                                                    <td><?php echo $data["email_user"]; ?></td>
                                                    <td><?php echo $data["alamat_user"]; ?></td>
                                                    <td class="text-right">
                                                        <a href="editpengguna.php?id=<?php echo $data['username_user']; ?>"class="btn btn-simple btn-info btn-icon"><i class="material-icons">edit</i></a>
                                                        <a href="?delete&username_user=<?php echo $data['username_user'];?>" onclick="confirm('Hapus Username : <?php echo $data['username_user']; ?>');"class="btn btn-simple btn-danger btn-icon"><i class="material-icons">delete</i></a>
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

<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Data Pengguna</h4>
      </div>

        <div class="modal-body">
          <form action="" name="modal_popup" enctype="multipart/form-data" method="POST">
            
            <div class="form-group" style="padding-bottom: 20px;">
                  <label for="username_user">Username</label>
                  <input type="text" name="username_user"  class="form-control" required/>
                </div>
            <div class="form-group" style="padding-bottom: 20px;">
                  <label for="nama_user">Nama</label>
                  <input type="text" name="nama_user"  class="form-control" required/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="nama_user">Email </label>
                  <input type="email" name="email_user"  class="form-control"  required/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="nama_user">Alamat</label>
                  <input type="text" name="alamat_user"  class="form-control" required/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="nama_user">Password</label>
                  <input type="password" name="password_user"  class="form-control" required/>
                </div>
              <div class="modal-footer">
                  <button class="btn btn-success" type="submit" name="simpan">
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

<?php include 'footer.php'; ?>
<?php 
if (isset($_POST['simpan'])) {
    $username_user=$_POST['username_user'];
    $nama_user=$_POST['nama_user'];
    $password_user=$_POST['password_user'];
    $alamat_user=($_POST['alamat_user']);
    $email_user=$_POST['email_user'];
$sql = "INSERT INTO `tbl_user` (`username_user`, `nama_user`, `email_user`, `alamat_user`, `password_user`, `status_user`) VALUES ('$username_user', '$nama_user', '$email_user', '$alamat_user', '$password_user', 'offline');";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Tersimpan')
    window.location.href='pengguna.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Tersimpan')
    window.location.href='pengguna.php#ModalAdd';
    </script>");
}
}
?>
<?php 
if (isset($_GET['delete'])) {
    $username_user = $_GET['username_user'];
 $sql = "DELETE FROM `tbl_user` WHERE `tbl_user`.`username_user` ='$username_user'";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Terhapus')
    window.location.href='pengguna.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Terhapus')
    window.location.href='pengguna.php';
    </script>");
}   
}
?>
