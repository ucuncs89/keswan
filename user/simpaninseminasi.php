<?php
include 'koneksi.php';
    $username_user=$_POST['username_user'];
    $tgl_ib=$_POST['tgl_ib'];
    $alamat=$_POST['alamat'];
    $id_hewan=$_POST['id_hewan'];
$sql = "INSERT INTO `tbl_inseminasi` (`id_inseminasi`, `username_user`, `id_hewan`, `nama_pejantan`, `id_petugas`, `tgl_ib`, `ib_ke`, `status_ib`, `kode_straw`, `alamat`) VALUES (NULL, '$username_user', '$id_hewan', '', '', '$tgl_ib', '0', 'pengajuan', '', '$alamat');";
$query=mysql_query($sql);
if($query){
echo("<script language='javascript'>
    window.alert('Data Tersimpan')
    window.location.href='inseminasi.php';
    </script>");
}else{
echo("<script language='javascript'>
    window.alert('Data Tidak Tersimpan')
    window.location.href='inseminasi.php';
    </script>");
    }

?>