<?php 
include 'koneksi.php';
    $username_user=$_POST['username_user'];
    $id_hewan=$_POST['id_hewan'];
    $jenis_hewan=$_POST['jenis_hewan'];
    $umur_hewan=$_POST['umur_hewan'];
    $jenis_kelamin_hewan=$_POST['jenis_kelamin_hewan'];
$sql = "UPDATE `tbl_hewan` SET `username_user` = '$username_user', `umur_hewan` = '$umur_hewan', `jenis_hewan` = '$jenis_hewan', `jenis_kelamin_hewan` = '$jenis_kelamin_hewan' WHERE `tbl_hewan`.`id_hewan` = '$id_hewan';";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Tersimpan')
    window.location.href='hewan.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Tersimpan')
    window.location.href='edithewan.php?id=$id_hewan';
    </script>");
}
?>