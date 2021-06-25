<?php $thisPage = "Kelahiran"; ?>
<?php include 'header.php'; ?>
<?php
$id_kelahiran=$_GET['id'];
$id_hewan=$_GET['id_hewan'];
$username_user=$_GET['username_user'];
include 'koneksi.php'; 
 $query=mysql_query("SELECT * FROM tbl_kelahiran where id_kelahiran = '$id_kelahiran'");
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
                                    <h4 class="card-title">Pilih Petugas</h4>
                                    <form action="updatekelahiran.php" name="modal_edit" enctype="multipart/form-data" method="POST">
            <div class="form-group" style="padding-bottom: 20px;">
                  <label>ID Kelahiran</label>
                  <input type="text" name="id_kelahiran"  class="form-control"  value="<?php echo $data["id_kelahiran"]; ?>" readonly/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">  
                  <label>Username User</label>
<?php $sqluser="SELECT * FROM tbl_user where username_user = '$username_user'";
$queryuser=mysql_query($sqluser);
$datauser=mysql_fetch_array($queryuser)
?>
                  <input type="text" name="username_user"  class="form-control" value="<?php echo $data["username_user"]; ?> - <?php echo $datauser["nama_user"]; ?>" readonly/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Tanggal</label>
                  <input type="text" name="tgl_pkb"  class="form-control"  value="<?php echo $data["tgl_pkb"]; ?>" readonly/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Alamat</label>
                  <input type="text" name="alamat"  class="form-control"  value="<?php echo $data["alamat"]; ?>" readonly/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>ID Hewan</label>
<?php $sqlhewan="SELECT * FROM tbl_hewan where id_hewan = '$id_hewan'";
$queryhewan=mysql_query($sqlhewan);
$datahewan=mysql_fetch_array($queryhewan)
?>
                  <input type="text" name="id_hewan"  class="form-control"  value="ID Hewan : <?php echo $data["id_hewan"]; ?> - <?php echo $datahewan["jenis_hewan"]; ?> - <?php echo $datahewan["jenis_kelamin_hewan"]; ?> - <?php echo $datahewan["umur_hewan"]; ?> Tahun" readonly/>
                </div>                
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>ID Petugas</label>
                  <input type="text" name="id_petugas"  class="form-control"  value="<?php echo $data["id_petugas"]; ?>" readonly/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Kode Straw</label>
                  <input type="text" name="kode_straw" class="form-control" required />
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Bulan</label>
                  <input type="int" name="bulan" class="form-control" required />
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="jenis_kelamin_anak">Jenis Kelamin</label>
                    <br>
                    <input type="radio" name="jenis_kelamin_anak" value="Jantan"> Jantan 
                    <input type="radio" name="jenis_kelamin_anak" value="Betina"> Betina 
                    <input type="radio" name="jenis_kelamin_anak" value="semua"> Jantan & Betina 
                  </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Jumlah Lahir</label>
                  <input type="int" name="jumlah_lahir" class="form-control" required />
                </div>
                </div>
              <div class="modal-footer">
                  <input type="submit" class="btn btn-success" type="submit" name="submit" value="Confirm">

                  <a href="?batal&id=<?php echo $data['id_kelahiran'];?>" onclick="confirm('Yakin Ingin Membatalkan ID Kelahiran : <?php echo $data['id_kelahiran']; ?>');" class="btn btn-danger">Cancel</a>
              </div>
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
