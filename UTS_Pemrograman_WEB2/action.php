<?php 
include 'koneksi.php';
$positif = $_POST['positif'];
$dirawat = $_POST['dirawat'];
$sembuh = $_POST['sembuh'];
$meninggal = $_POST['meninggal'];
$operator = $_POST['operator'];
$nim = $_POST['nim'];

mysql_query("INSERT INTO user VALUES('','$positif','$dirawat','$sembuh','$meninggal','$operator','$nim')");

header("location:DKI_Jakarta.php?pesan=input");
?>