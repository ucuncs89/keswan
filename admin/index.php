<?php $thisPage = "Home"; ?>
<?php include 'header.php'; ?>
<?php
include 'koneksi.php';
$sql1 = "SELECT count(*) AS jumlah FROM tbl_hewan";
$query1 = mysql_query($sql1);
$result1 = mysql_fetch_array($query1);

$sql2 = "SELECT count(*) AS jumlah FROM tbl_user";
$query2 = mysql_query($sql2);
$result2 = mysql_fetch_array($query2);

$sql3 = "SELECT count(*) AS jumlah FROM tbl_petugas";
$query3 = mysql_query($sql3);
$result3 = mysql_fetch_array($query3);

$sql4 = "SELECT count(*) AS jumlah FROM tbl_periksa";
$query4 = mysql_query($sql4);
$result4 = mysql_fetch_array($query4);
$sql5 = "SELECT count(*) AS jumlah FROM tbl_vaksinasi";
$query5 = mysql_query($sql5);
$result5 = mysql_fetch_array($query5);
$sql6 = "SELECT count(*) AS jumlah FROM tbl_inseminasi";
$query6 = mysql_query($sql6);
$result6 = mysql_fetch_array($query6);
$sql7 = "SELECT count(*) AS jumlah FROM tbl_kelahiran";
$query7 = mysql_query($sql7);
$result7 = mysql_fetch_array($query7);
$totallpelayanan = $result4['jumlah'] + $result5['jumlah']+$result6['jumlah']+$result7['jumlah'];

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
                                    <p class="category">Hewan</p>
                                    <h3 class="card-title"><?php echo "{$result1['jumlah']}";?></h3>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">people</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Pengguna</p>
                                    <h3 class="card-title"><?php echo "{$result2['jumlah']}";?></h3>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="material-icons">perm_identity</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Petugas</p>
                                    <h3 class="card-title"><?php echo "{$result3['jumlah']}";?></h3>
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
                                    <p class="category">Pelayanan</p>
                                    <h3 class="card-title"><?php echo "$totallpelayanan";?></h3>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include 'footer.php'; ?>