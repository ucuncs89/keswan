<?php $thisPage = "Vaksinasi"; ?>
<?php include 'header.php'; ?>
<?php
$id_vaksinasi=$_GET['id'];
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
                                    <i class="material-icons">colorize</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Pilih Petugas Vaksinasi Hewan</h4>
                                    <form action="" name="modal_edit" enctype="multipart/form-data" method="POST">
            <div class="form-group" style="padding-bottom: 20px;">
                  <label>ID Vaksinasi</label>
                  <input type="text" name="id_vaksinasi"  class="form-control" value="<?php echo $data["id_vaksinasi"]; ?>" readonly/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Username User</label>
                  <input type="text" name="username_user"  class="form-control" value="<?php echo $data["username_user"]; ?>" readonly/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>ID Hewan</label>
                  <input type="text" name="id_hewan"  class="form-control"  value="<?php echo $data["id_hewan"]; ?>" readonly/>
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
                  <button class="btn btn-success" type="submit" name="edit">Confirm</button>
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
<?php include 'footer.php'; ?>s
<?php 
include 'koneksi.php';
if (isset($_POST['edit'])) {
    $id_vaksinasi=$_POST['id_vaksinasi'];
    $id_petugas=$_POST['id_petugas'];
$sql = "UPDATE `tbl_vaksinasi` SET `id_petugas` = '$id_petugas', `status` = 'proses' WHERE `tbl_vaksinasi`.`id_vaksinasi` = '$id_vaksinasi';
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
    window.location.href='prosesvaksinasi.php?=id_vaksinasi=$id_vaksinasi';
    </script>");
}
}
?>