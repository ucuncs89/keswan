<?php $thisPage = "Hewan"; ?>
<?php include 'header.php'; ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="blue">
                                    <i class="material-icons">pets</i> </a>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Data Hewan</a></h4>
                                    <div class="toolbar">
                                    <a href="#" class="btn btn-primary" data-target="#ModalAdd" data-toggle="modal">Tambah</a>
                                    </div>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Id Hewan</th>
                                                    <th>Umur</th>
                                                    <th>Jenis</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Id Hewan</th>
                                                    <th>Umur</th>
                                                    <th>Jenis</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
  //menampilkan data mysqli
  include "koneksi.php";
  
  $query=mysql_query("SELECT * FROM tbl_hewan WHERE username_user='$xusername_user'");
  while($data=mysql_fetch_array($query)){       
?>
                                                <tr>
                                                    <td><?php echo $data["id_hewan"]; ?></td>
                                                    <td><?php echo $data["umur_hewan"]; ?> Bulan</td>
                                                    <td><?php echo $data["jenis_hewan"]; ?></td>
                                                    <td><?php echo $data["jenis_kelamin_hewan"]; ?></td>
                                                    <td class="text-right">
                                                        <a href="edithewan.php?id=<?php echo $data['id_hewan']; ?>"class="btn btn-simple btn-info btn-icon"><i class="material-icons">edit</i></a>
                                                        <a href="?delete&id=<?php echo $data['id_hewan'];?>" onclick="confirm('Hapus ID Hewan : <?php echo $data['id_hewan']; ?>');"class="btn btn-simple btn-danger btn-icon"><i class="material-icons">delete</i></a>
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
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Data Hewan</h4>
      </div>

        <div class="modal-body">
          <form action="" name="modal_popup" enctype="multipart/form-data" method="POST">

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="umur_hewan">Umur Hewan</label>
                  <input type="number" name="umur_hewan"  class="form-control" placeholder="0" required/> <small>Bulan</small>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Jenis">Jenis Hewan</label>
                   <select name="jenis_hewan" class="form-control" placeholder="Jenis" required>
                       <option>Unggas</option>
                       <option>Sapi</option>
                       <option>Kambing</option>
                       <option>Anjing</option>
                       <option>Kucing</option>
                   </select>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="jenis_kelamin_hewann">Jenis Kelamin</label>
                    <br>
                    <input type="radio" name="jenis_kelamin_hewan" value="Jantan"> Jantan 
                    <input type="radio" name="jenis_kelamin_hewan" value="Betina"> Betina 
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
<?php 
if (isset($_POST['simpan'])) {
    $jenis_hewan=$_POST['jenis_hewan'];
    $umur_hewan=$_POST['umur_hewan'];
    $jenis_kelamin_hewan=$_POST['jenis_kelamin_hewan'];
$sql = "INSERT INTO `tbl_hewan` (`id_hewan`, `username_user`, `umur_hewan`, `jenis_hewan`, `jenis_kelamin_hewan`) VALUES (NULL, '$xusername_user', '$umur_hewan', '$jenis_hewan', '$jenis_kelamin_hewan');";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Tersimpan')
    window.location.href='hewan.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Tersimpan')
    window.location.href='hewan.php';
    </script>");
}
}
?>
<?php 
if (isset($_GET['delete'])) {
    $id = $_GET['id'];
 $sql = "DELETE FROM `tbl_hewan` WHERE `tbl_hewan`.`id_hewan` ='$id'";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Terhapus')
    window.location.href='hewan.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Terhapus')
    window.location.href='hewan.php';
    </script>");
}   
}
?>