<?php 
include 'koneksi.php';
    $id_admin=$_POST['id_admin'];
    $nama_admin=$_POST['nama_admin'];
    $email_admin=$_POST['email_admin'];
    $password_admin=$_POST['password_admin'];
$sql = "UPDATE `tbl_admin` SET `password_admin` = '$password_admin', `email_admin` = '$email_admin', `nama_admin` = '$nama_admin' WHERE `tbl_admin`.`id_admin` = '$id_admin';";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Tersimpan')
    window.location.href='profile.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Tersimpan')
    window.location.href='profile.php';
    </script>");
}
?>