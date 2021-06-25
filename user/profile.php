<?php $thisPage = "Profile"; ?>
<?php include 'header.php'; ?>
<?php
include 'koneksi.php'; 
 $query=mysql_query("SELECT * FROM tbl_user where username_user = '$xusername_user'");
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
                                            <input type="text" name="username_user" class="form-control" value="<?php echo $data['username_user']?>" readonly>
                                        <span class="material-input"></span></div>
                                        <div class="form-group">
                                            <label class="control-label">Nama</label>
                                            <input type="text" name="nama_user" class="form-control" pattern="[A-zÀ-ž\s]+" maxlength="32" value="<?php echo $data['nama_user']?>" required="required" oninvalid="alert('Isi Data Dengan Benar')" oninput="this.setCustomValidity('')">
                                        <span class="material-input"></span></div>
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input type="email" name="email_user" class="form-control" required="required" value="<?php echo $data['email_user']?>">
                                        <span class="material-input"></span></div>
                                        <div class="form-group">
                                            <label class="control-label">Password</label>
                                            <input type="password" name="password_user" class="form-control" minlength="6" maxlength="32" required="required" value="<?php echo $data['password_user']?>">
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
	$username_user=$_POST['username_user'];
    $nama_user=$_POST['nama_user'];
    $email_user=$_POST['email_user'];
    $password_user=$_POST['password_user'];
$sql = "UPDATE `tbl_user` SET `nama_user` = '$nama_user', `email_user` = '$email_user', `password_user` = '$password_user' WHERE `username_user` = '$username_user';";
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