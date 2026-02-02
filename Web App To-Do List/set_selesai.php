<?php
    //koneksi
    include('koneksi.php');

    //mengambil nilai dari paramater id
    $id = $_GET['id'];

    //perintah sql untuk set selesai
    $sql = "UPDATE list SET status_selesai=1 WHERE id='$id'";
    mysqli_query($koneksi, $sql) or die ("Gagal menghubungkan");

    //pindah ke halaman index
    header('location:index.php');
?>