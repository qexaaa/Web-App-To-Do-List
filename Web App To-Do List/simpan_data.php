<?php
//koneksi
include('koneksi.php');

//mengambil data dari from
$judul = $_POST['judul'];

//simpn data ke database
$sql ="INSERT INTO list (judul) VALUES ('$judul')";
mysqli_query($koneksi, $sql) or die("gagal sql");

//pindah ke halaman index
header('location:index.php');

?>