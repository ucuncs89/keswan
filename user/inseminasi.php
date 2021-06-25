<?php $thisPage = "Inseminasi"; ?>
<?php include 'header.php'; ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="rose">
                                    <i class="material-icons">view_list</i> </a>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Data Pengajuan Layanan Inseminasi</a></h4>
                                    <div class="toolbar">
                                    <a href="#" class="btn btn-primary" data-target="#ModalAdd" data-toggle="modal">Tambah</a>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID Inseminasi</th>
                                                    <th>ID Hewan</th>
                                                    <th>Username</th>
                                                    <th>Alamat</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>ID Inseminasi</th>
                                                    <th>ID Hewan</th>
                                                    <th>Username</th>
                                                    <th>Alaamt</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
  //menampilkan data mysqli
  include "koneksi.php";
  
  $query=mysql_query("SELECT * FROM tbl_inseminasi WHERE username_user='$xusername_user'");
  while($data=mysql_fetch_array($query)){       
?>
                                                <tr>
                                                    <td><?php echo $data["id_inseminasi"]; ?></td>
                                                    <td><?php echo $data["id_hewan"]; ?></td>
                                                    <td><?php echo $data["username_user"]; ?></td>
                                                    <td><?php echo $data["alamat"]; ?></td>
                                                    <td><?php echo $data['tgl_ib']; ?></td>
                                                    <td><?php echo $data["status_ib"]; ?></td>
                                                    <td class="text-right">
                                                        <?php if ($data["status_ib"] == "pengajuan"){ ?>
                                                       <a href="?delete&id=<?php echo $data['id_inseminasi'];?>" onclick="confirm('Hapus ID Inseminasi : <?php echo $data['id_inseminasi']; ?>');"class="btn btn-simple btn-danger btn-icon"><i class="material-icons">close</i></a>
                                                        <?php } else{ ?>
                                                        <a class="btn btn-simple btn-info btn-icon"><i class="material-icons">checked</i></a>
                                                        <?php };?>
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
            <h4 class="modal-title" id="myModalLabel">Tambah Data Pelayanan Inseminasi</h4>
      </div>

        <div class="modal-body">
          <form action="simpaninseminasi.php" name="modal_popup" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="username_user" value="<?php echo $username_user;?>" />
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="tanggal">Tanggal</label>
                  <input type="date" name="tgl_ib"  class="form-control" required/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="alamat">Alamat</label>
                  <input type="text" name="alamat"  class="form-control" placeholder="Alamat Pelayanan" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="id_hewan">ID Hewan</label>
                   <select name="id_hewan" class="selectpicker" data-live-search="true" required>
                    <?php 
                  $query=mysql_query("SELECT * FROM tbl_hewan WHERE username_user='$username_user'");
                  while($data=mysql_fetch_array($query)){ ?>       
                <option value="<?php echo $data['id_hewan']; ?>"> ID Hewan : <?php echo $data['id_hewan']; ?> - <?php echo $data['jenis_hewan'];?> - <?php echo $data['jenis_kelamin_hewan']; ?> - <?php echo $data['umur_hewan'];?> Tahun
                  </option>
                <?php  } ?>
                   </select>
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
if (isset($_GET['delete'])) {
    $id = $_GET['id'];
 $sql = "DELETE FROM `tbl_inseminasi` WHERE `tbl_inseminasi`.`id_inseminasi` = '$id' and status_ib = 'pengajuan'";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Terhapus')
    window.location.href='inseminasi.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Terhapus')
    window.location.href='inseminasi.php';
    </script>");
    }   
}
?>