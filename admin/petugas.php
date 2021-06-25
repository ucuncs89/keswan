<?php $thisPage = "Petugas"; ?>
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
                                    <h4 class="card-title">Data Petugas</a></h4>
                                    <div class="toolbar">
                                    <a href="#" class="btn btn-primary" data-target="#ModalAdd" data-toggle="modal">Tambah</a>
                                    </div>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID Petugas</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>No Telepon</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>ID Petugas</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>No Telepon</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
  //menampilkan data mysqli
  include "koneksi.php";
  
  $query=mysql_query("SELECT * FROM tbl_petugas");
  while($data=mysql_fetch_array($query)){       
?>
                                                <tr>
                                                    <td><?php echo $data["id_petugas"]; ?></td>
                                                    <td><?php echo $data["nama_petugas"]; ?></td>
                                                    <td><?php echo $data["email_petugas"]; ?></td>
                                                    <td><?php echo $data["no_telepon_petugas"]; ?></td>
                                                    <td class="text-right">
                                                        <a href="editpetugas.php?id=<?php echo $data['id_petugas']; ?>" class="btn btn-simple btn-info btn-icon"><i class="material-icons">edit</i></a>
                                                        <a href="?delete&id_petugas=<?php echo $data['id_petugas'];?>" onclick="confirm('Hapus ID Petugas : <?php echo $data['id_petugas']; ?>');"class="btn btn-simple btn-danger btn-icon"><i class="material-icons">delete</i></a>
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
            <h4 class="modal-title" id="myModalLabel">Tambah Data Petugas</h4>
      </div>

        <div class="modal-body">
          <form action="" name="modal_popup" enctype="multipart/form-data" method="POST">
            
            <div class="form-group" style="padding-bottom: 20px;">
                  <label for="id_petugas">Id Petugas</label>
                  <input type="text" name="id_petugas"  class="form-control" required/>
                </div>
            <div class="form-group" style="padding-bottom: 20px;">
                  <label for="nama_user">Nama</label>
                  <input type="text" name="nama_petugas"  class="form-control" required/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="email_petugas">Email </label>
                  <input type="email" name="email_petugas"  class="form-control"  required/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="no_telepon_petugas">Alamat</label>
                  <input type="text" name="no_telepon_petugas"  class="form-control" required/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="password_petugas">Password</label>
                  <input type="password" name="password_petugas"  class="form-control" required/>
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
    $id_petugas=$_POST['id_petugas'];
    $nama_petugas=$_POST['nama_petugas'];
    $password_petugas=$_POST['password_petugas'];
    $no_telepon_petugas=$_POST['no_telepon_petugas'];
    $email_petugas=$_POST['email_petugas'];
$sql = "INSERT INTO `tbl_petugas` (`id_petugas`, `nama_petugas`, `email_petugas`, `no_telepon_petugas`, `password_petugas`, `status_petugas`) VALUES ('$id_petugas', '$nama_petugas', '$email_petugas', '$no_telepon_petugas', '$password_petugas', 'offline');";
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
<?php 
if (isset($_GET['delete'])) {
    $id_petugas = $_GET['id_petugas'];
 $sql = "DELETE FROM `tbl_petugas` WHERE `tbl_petugas`.`id_petugas` ='$id_petugas'";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Terhapus')
    window.location.href='petugas.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Terhapus')
    window.location.href='petugas.php';
    </script>");
}   
}
?>
