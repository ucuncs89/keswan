<?php 
$dari_tanggal=$_GET['dari_tanggal'];
$sampai_tanggal=$_GET['sampai_tanggal'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Laporan Pelayanan Inseminasi Buatan</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">  
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
</head>
<body>
<table id="example" class="display nowrap" cellspacing="0" width="100%">  
     <thead>
                                                <tr>
                                                    <th>ID Inseminasi</th>
                                                    <th>Username</th>
                                                    <th>ID Hewan</th>
                                                    <th>Nama Pejantan</th>
                                                    <th>Id Petugas</th>
                                                    <th>Tanggal</th>
                                                    <th>IB KE</th>
                                                    <th>Status</th>
                                                    <th>Kode Straw</th>
                                                    <th>Alamat</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>ID Inseminasi</th>
                                                    <th>Username</th>
                                                    <th>ID Hewan</th>
                                                    <th>Nama Pejantan</th>
                                                    <th>Id Petugas</th>
                                                    <th>Tanggal</th>
                                                    <th>IB KE</th>
                                                    <th>Status</th>
                                                    <th>Kode Straw</th>
                                                    <th>Alamat</th>                                                    
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
  //menampilkan data mysqli
  include "koneksi.php";
  
  $query=mysql_query("SELECT tbl_inseminasi.*, tbl_user.*, tbl_petugas.*
FROM ((tbl_inseminasi
INNER JOIN tbl_user ON tbl_inseminasi.username_user = tbl_user.username_user)
INNER JOIN tbl_petugas ON tbl_inseminasi.id_petugas = tbl_petugas.id_petugas) WHERE tgl_ib BETWEEN '$dari_tanggal' AND '$sampai_tanggal'");
  while($data=mysql_fetch_array($query)){       
?>
                                                <tr>
                                                    <td><?php echo $data["id_inseminasi"]; ?></td>
                                                    <td><?php echo $data["username_user"]; ?> - <?php echo $data["nama_user"]; ?></td>
                                                    <td><?php echo $data["id_hewan"]; ?></td>
                                                    <td><?php echo $data["nama_pejantan"]; ?></td>
                                                    <td><?php echo $data['id_petugas']; ?> - <?php echo $data['nama_petugas']; ?></td>
                                                    <td><?php echo $data["tgl_ib"]; ?></td>
                                                    <td><?php echo $data["ib_ke"]; ?></td>
                                                    <td><?php echo $data["status_ib"]; ?></td>
                                                    <td><?php echo $data["kode_straw"]; ?></td>
                                                    <td><?php echo $data["alamat"]; ?></td>
                                                  </tr>
<?php }?>
                                            </tbody>  
   </table> 
</body>
<script type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {  
   $('#example').DataTable( {  
     dom: 'Bfrtip',  
     buttons: [  
       'copy', 'csv', 'excel', 'pdf', 'print'  
     ]  
   } );  
 } );  
</script>
</html>