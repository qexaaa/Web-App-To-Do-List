 <?php
 //koneksi
 include('koneksi.php');

 //mengamil data dari form
 $judul = $_POST['judul'];
    $id = $_POST['id'];

 //edit data ke database
$sql="UPDATE list SET judul ='$judul' WHERE ID='$id'";
 mysqli_query($koneksi, $sql) or die("gagal sql");

 //pindah ke halaman index
 header('location: index.php');