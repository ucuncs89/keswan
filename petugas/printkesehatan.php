<?php 
$dari_tanggal=$_GET['dari_tanggal'];
$sampai_tanggal=$_GET['sampai_tanggal'];
$id_petugas = $_GET['id_petugas'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Laporan Pelayanan Kesehatan Hewan</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">  
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
</head>
<body>
<table id="example" class="display nowrap" cellspacing="0" width="100%">  
     <thead>
                                                <tr>
                                                    <th>ID Periksa</th>
                                                    <th>Username</th>
                                                    <th>Tanggal</th>
                                                    <th>Anamnese</th>
                                                    <th>Gejala</th>
                                                    <th>Diagnosa</th>
                                                    <th>Terapi</th>
                                                    <th>Ket</th>
                                                    <th>Status</th>
                                                    <th>ID Petugas</th>
                                                    <th>Alamat</th>
                                                    <th>ID Hewan</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>ID Periksa</th>
                                                    <th>Username</th>
                                                    <th>Tanggal</th>
                                                    <th>Anamnese</th>
                                                    <th>Gejala</th>
                                                    <th>Diagnosa</th>
                                                    <th>Terapi</th>
                                                    <th>Ket</th>
                                                    <th>Status</th>
                                                    <th>ID Petugas</th>
                                                    <th>Alamat</th>
                                                    <th>ID Hewan</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
  //menampilkan data mysqli
  include "koneksi.php";
  
  $query=mysql_query("SELECT tbl_periksa.*, tbl_user.*
FROM tbl_periksa
INNER JOIN tbl_user ON tbl_periksa.username_user = tbl_user.username_user
WHERE `id_petugas` = '$id_petugas'
and (tgl_periksa BETWEEN '$dari_tanggal' AND '$sampai_tanggal');");
  while($data=mysql_fetch_array($query)){       
?>
                                                <tr>
                                                    <td><?php echo $data["id_periksa"]; ?></td>
                                                    <td><?php echo $data["username_user"]; ?> - <?php echo $data["nama_user"]; ?></td>
                                                    <td><?php echo $data["tgl_periksa"]; ?></td>
                                                    <td><?php echo $data["anamnese"]; ?></td>
                                                    <td><?php echo $data['gejala']; ?></td>
                                                    <td><?php echo $data["diagnosa"]; ?></td>
                                                    <td><?php echo $data["terapi"]; ?></td>
                                                    <td><?php echo $data["ket"]; ?></td>
                                                    <td><?php echo $data["status"]; ?></td>
                                                    <td><?php echo $data["id_petugas"]; ?></td>
                                                    <td><?php echo $data['alamat']; ?></td>
                                                    <td><?php echo $data["id_hewan"]; ?></td>
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