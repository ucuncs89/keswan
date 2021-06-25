<?php 
$dari_tanggal=$_GET['dari_tanggal'];
$sampai_tanggal=$_GET['sampai_tanggal'];
$username_user = $_GET['username_user'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Laporan Pelayanan Periksa Kelahiran</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">  
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
</head>
<body>
<table id="example" class="display nowrap" cellspacing="0" width="100%">  
     <thead>
                                                <tr>
                                                    <th>Id Kelahiran</th>
                                                    <th>Tanggal</th>
                                                    <th>Id Petugas</th>
                                                    <th>Usrname</th>
                                                    <th>ID Hewan</th>
                                                    <th>Kode Straw</th>
                                                    <th>Bulan</th>
                                                    <th>Jenis Kelamin Anak</th>
                                                    <th>Status</th>
                                                    <th>Jumlah Lahir</th>
                                                    <th>Alamat</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Id Kelahiran</th>
                                                    <th>Tanggal</th>
                                                    <th>Id Petugas</th>
                                                    <th>Usrname</th>
                                                    <th>ID Hewan</th>
                                                    <th>Kode Straw</th>
                                                    <th>Bulan</th>
                                                    <th>Jenis Kelamin Anak</th>
                                                    <th>Status</th>
                                                    <th>Jumlah Lahir</th>
                                                    <th>Alamat</th>                                                
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
  //menampilkan data mysqli
  include "koneksi.php";
  
  $query=mysql_query("SELECT * FROM `tbl_kelahiran` WHERE `username_user` = '$username_user'
and (tgl_pkb BETWEEN '$dari_tanggal' AND '$sampai_tanggal')");
  while($data=mysql_fetch_array($query)){             
?>
                                                <tr>
                                                    <td><?php echo $data["id_kelahiran"]; ?></td>
                                                    <td><?php echo $data["tgl_pkb"]; ?></td>
                                                    <td><?php echo $data["id_petugas"]; ?></td>
                                                    <td><?php echo $data["username_user"]; ?></td>
                                                    <td><?php echo $data['id_hewan']; ?></td>
                                                    <td><?php echo $data["kode_straw"]; ?></td>
                                                    <td><?php echo $data["bulan"]; ?></td>
                                                    <td><?php echo $data["jenis_kelamin_anak"]; ?></td>
                                                    <td><?php echo $data["status"]; ?></td>
                                                    <td><?php echo $data["jumlah_lahir"]; ?></td>
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