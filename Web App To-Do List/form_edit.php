<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <!-- MAIN SECTION -->
     <section> 
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h3 class="text-center mb-3 mt-2">
                        <span class="geser-bawah">
                        <span class="edu-qld-hand ">
                             Edit Data - To Do List</h3>
                    <?php
                       //koneksi
                       include('koneksi.php');

                       //mengambil nilai parameter id
                       $id = $_GET['id'];

                       //mengambil nilai parameter database
                      $sql="SELECT *FROM list WHERE id='$id'";
                      $query=mysqli_query($koneksi, $sql) or die("gagal sql");
                      $data =mysqli_fetch_array($query);

                    ?>
                 <form action="edit_data.php" method="POST">

                    <input type="hidden" name="id" value="<?php echo $_GET['id']?>">

                     <div class="mb-3">
                         <label for="judul" class="form-label">Ada perubahan rencana yaa?</label>
                        <input type="text" class="form-control" id="judul" name="judul" 
                        value="<?php echo $data['judul']?>">
                     </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="index.php" class="btn btn-danger">Batal</a> 
                 </form>
                </div>
            </div>
        </div>
    </section>

     <script src="js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>