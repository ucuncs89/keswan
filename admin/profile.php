<?php $thisPage = "Profile"; ?>
<?php include 'header.php'; ?>
<?php
include 'koneksi.php'; 
 $query=mysql_query("SELECT * FROM tbl_admin where id_admin = '$id_admin'");
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
                                    <form method="post" action="editprofile.php">
                                        <div class="form-group">
                                            <label class="control-label">Nama</label>
                                            <input type="hidden" name="id_admin" class="form-control" value="<?php echo $data['id_admin']?>" required="required">
                                            <input type="text" name="nama_admin" class="form-control" value="<?php echo $data['nama_admin']?>" required="required">
                                        <span class="material-input"></span></div>
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input type="email" name="email_admin" class="form-control" required="required" value="<?php echo $data['nama_admin']?>">
                                        <span class="material-input"></span></div>
                                        <div class="form-group">
                                            <label class="control-label">Password</label>
                                            <input type="password" name="password_admin" class="form-control" required="required" value="<?php echo $data['nama_admin']?>">
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
<?php include 'footer.php'; ?>
