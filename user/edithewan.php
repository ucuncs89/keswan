<?php $thisPage = "Hewan"; ?>
<?php include 'header.php'; ?>
<?php
$id_hewan=$_GET['id'];
include 'koneksi.php'; 
 $query=mysql_query("SELECT * FROM tbl_hewan where id_hewan = '$id_hewan'");
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
                                    <h4 class="card-title">Edit Data Hewan</h4>
                                    
          <form action="proseshewan.php" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="username_user" value="<?php echo $data['username_user'];?>">
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>ID Hewan</label>
                  <input type="text" name="id_hewan"  class="form-control" value="<?php echo $data['id_hewan'] ?>" readonly required/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="umur_hewan">Umur Hewan</label>
                  <input type="number" name="umur_hewan"  class="form-control" value="<?php echo $data['umur_hewan'] ?>" required/>
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
                    <label>Jenis Kelamin</label>
                    <br>
                    <input type="radio" name="jenis_kelamin_hewan" value="Jantan" <?php if($data['jenis_kelamin_hewan']=="Jantan"){ echo "checked";}?>> Jantan 
                    <input type="radio" name="jenis_kelamin_hewan" value="Betina" <?php if($data['jenis_kelamin_hewan']=="Betina"){ echo "checked";}?>> Betina 
                  </div>

              <div class="modal-footer">
                  <button class="btn btn-success" type="submit" name="edit">
                      Confirm
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
    $id_hewan=$_POST['username_user'];
    $id_hewan=$_POST['id_hewan'];
    $jenis_hewan=$_POST['jenis_hewan'];
    $umur_hewan=$_POST['umur_hewan'];
    $jenis_kelamin_hewan=$_POST['jenis_kelamin_hewan'];
$sql = "UPDATE `tbl_hewan` SET `username_user` = '$username_user', `umur_hewan` = '$umur_hewan', `jenis_hewan` = '$jenis_hewan', `jenis_kelamin_hewan` = '$jenis_kelamin_hewan' WHERE `tbl_hewan`.`id_hewan` = '$id_hewan';";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Tersimpan')
    window.location.href='hewan.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Tersimpan')
    window.location.href='edithewan.php?id=$id_hewan';
    </script>");
}
}
?>