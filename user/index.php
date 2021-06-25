<?php $thisPage = "Home"; ?>
<?php include 'header.php'; ?>
<?php
include 'koneksi.php';
$sql1 = "SELECT count(*) AS jumlah FROM tbl_periksa where username_user ='$xusername_user'";
$query1 = mysql_query($sql1);
$result1 = mysql_fetch_array($query1);
$sql2 = "SELECT count(*) AS jumlah FROM tbl_vaksinasi where username_user ='$xusername_user'";
$query2 = mysql_query($sql2);
$result2 = mysql_fetch_array($query2);
$sql3 = "SELECT count(*) AS jumlah FROM tbl_inseminasi where username_user ='$xusername_user'";
$query3 = mysql_query($sql3);
$result3 = mysql_fetch_array($query3);
$sql4 = "SELECT count(*) AS jumlah FROM tbl_kelahiran where username_user ='$xusername_user'";
$query4 = mysql_query($sql4);
$result4 = mysql_fetch_array($query4);
?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="rose">
                                    <i class="material-icons">pets</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Kesehatan Hewan</p>
                                    <h3 class="card-title"><?php echo "{$result1['jumlah']}";?></h3>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="rose">
                                    <i class="material-icons">list</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Inseminasi Buatan</p>
                                    <h3 class="card-title"><?php echo "{$result3['jumlah']}";?></h3>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="rose">
                                    <i class="material-icons">pets</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Vaksinasi Hewan</p>
                                    <h3 class="card-title"><?php echo "{$result2['jumlah']}";?></h3>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="card card-stats">
                                <div class="card-header" data-background-color="rose">
                                    <i class="material-icons">list</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Kelahiran Hewan</p>
                                    <h3 class="card-title"><?php echo "{$result4['jumlah']}";?></h3>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include 'footer.php'; ?>