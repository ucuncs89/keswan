<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_keswan";

$connect = mysql_connect($host,$user,$pass) or die("Koneksi gagal");
$pilih_db = mysql_select_db($db) or die("Database tidak ada");

?>
