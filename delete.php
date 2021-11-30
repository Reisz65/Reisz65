<?php
include "koneksi.php";
$nik = $_GET['nik'];
mysqli_query($koneksi,"DELETE FROM db_latihan WHERE nik='$nik'");
header("location:index.php");
?>