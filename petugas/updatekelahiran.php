<?php
include 'koneksi.php'; 
    $id_kelahiran=$_POST['id_kelahiran'];
    $kode_straw=$_POST['kode_straw'];
    $bulan=$_POST['bulan'];
    $jenis_kelamin_anak=$_POST['jenis_kelamin_anak'];
    $jumlah_lahir=$_POST['jumlah_lahir'];
$sql = "UPDATE `tbl_kelahiran` SET `kode_straw` = '$kode_straw', `bulan` = '$bulan', `jenis_kelamin_anak` = '$jenis_kelamin_anak', `status` = 'selesai', `jumlah_lahir` = '$jumlah_lahir' WHERE `tbl_kelahiran`.`id_kelahiran` = '$id_kelahiran';";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.location.href='kelahiran';
    window.alert('Data Tersimpan')
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Tersimpan')
    window.location.href='kelahiran';
    </script>");
}
?>