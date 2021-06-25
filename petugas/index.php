<?php $thisPage = "Home"; ?>
<?php include 'header.php'; ?>
<?php
include 'koneksi.php';
$sql4 = "SELECT count(*) AS jumlah FROM tbl_periksa where id_petugas ='$xid_petugas'";
$query4 = mysql_query($sql4);
$result4 = mysql_fetch_array($query4);
$sql5 = "SELECT count(*) AS jumlah FROM tbl_vaksinasi where id_petugas ='$xid_petugas'";
$query5 = mysql_query($sql5);
$result5 = mysql_fetch_array($query5);
$sql6 = "SELECT count(*) AS jumlah FROM tbl_inseminasi where id_petugas ='$xid_petugas'";
$query6 = mysql_query($sql6);
$result6 = mysql_fetch_array($query6);
$sql7 = "SELECT count(*) AS jumlah FROM tbl_kelahiran where id_petugas ='$xid_petugas'";
$query7 = mysql_query($sql7);
$result7 = mysql_fetch_array($query7);
?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">pets</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Kesehatan Hewan</p>
                                    <h3 class="card-title"><?php echo "{$result4['jumlah']}";?></h3>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">list</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Inseminasi Buatan</p>
                                    <h3 class="card-title"><?php echo "{$result6['jumlah']}";?></h3>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="material-icons">pets</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Vaksinasi Hewan</p>
                                    <h3 class="card-title"><?php echo "{$result5['jumlah']}";?></h3>
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
                                    <h3 class="card-title"><?php echo "{$result7['jumlah']}";?></h3>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include 'footer.php'; ?>