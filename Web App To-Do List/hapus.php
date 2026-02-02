<?php

//koneksi
include('koneksi.php');

//mengambil nilai dari parameter id
$id =$_GET['id'];

//perintah sql untuk menghapus data
$sql = "DELETE FROM list WHERE id='$id'";
mysqli_query($koneksi, $sql) or die("gagal sql");

//pindah ke halaman index
header ('location: index.php');