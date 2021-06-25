<?php $thisPage = "Profile"; ?>
<?php include 'header.php'; ?>
<?php
include 'koneksi.php'; 
 $query=mysql_query("SELECT * FROM tbl_petugas where id_petugas = '$xid_petugas'");
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
                                    <h4 class="card-title">Edit Data Diri</h4>
                                    <form method="post">
                                        <div class="form-group">
                                            <label class="control-label">Nama</label>
                                            <input type="text" name="nama_petugas" class="form-control" pattern="[A-zÀ-ž\s]+" value="<?php echo $data['nama_petugas']?>" required="required" oninvalid="alert('Isi Data Dengan Benar')" oninput="this.setCustomValidity('')">
                                        <span class="material-input"></span></div>
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input type="email" name="email_petugas" class="form-control" required="required" value="<?php echo $data['email_petugas']?>">
                                        <span class="material-input"></span></div>
                                        <div class="form-group">
                                            <label class="control-label">No Telepon</label>
                                            <input type="tel" name="no_telepon_petugas" class="form-control" min="8" max="16" pattern="[0-9]+" required="required" value="<?php echo $data['no_telepon_petugas']?>">
                                        <span class="material-input"></span></div>
                                        <div class="form-group">
                                            <label class="control-label">Password</label>
                                            <input type="password" name="password_petugas" class="form-control" required="required" value="<?php echo $data['password_petugas']?>">
                                        <span class="material-input"></span></div>
                                        <button type="submit" class="btn btn-fill btn-rose" name="submit">Submit</button>
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
if (isset($_POST['submit'])) {
    $nama_petugas=$_POST['nama_petugas'];
    $email_petugas=$_POST['email_petugas'];
    $password_petugas=$_POST['password_petugas'];
    $no_telepon_petugas=$_POST['no_telepon_petugas'];
$sql = "UPDATE `tbl_petugas` SET `nama_petugas` = '$nama_petugas', `email_petugas` = '$email_petugas', `password_petugas` = '$password_petugas', `no_telepon_petugas` = '$no_telepon_petugas' WHERE `id_petugas` = '$xid_petugas';";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Tersimpan')
    window.location.href='profile.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Tersimpan')
    window.location.href='profile.php';
    </script>");
}
}
?>