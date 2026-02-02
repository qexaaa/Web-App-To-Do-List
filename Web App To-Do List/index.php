<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web App To-Do List</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Edu+QLD+Hand:wght@400..700&display=swap" 
    rel="stylesheet">

  </head>
  <body>
    <!-- Main Section -->
     <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1 class="text-center mb-3 mt-2" >
                        <span class="geser-bawah">
                        <span class="edu-qld-hand ">
                            Web App To-Do List</h1>

                    <!-- Tambah Tugas / Aktivitas -->
                    <a href="form_tambah.php" class="btn btn-primary btn-sm"> 
                    <ion-icon name="add-sharp"></ion-icon>
                    </a>

                    <!-- Card Mulai dari sini -->
                     <?php
                        include("koneksi.php");

                        $sql="SELECT * FROM list ORDER BY id ASC";
                        $query=mysqli_query($koneksi, $sql) or die ("Gagal Terhubung");
                        while($data=mysqli_fetch_array($query)) {
                     ?>

                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <?php 
                                        if($data['status_selesai']==1) {
                                    ?>
                                    <ion-icon name="checkmark-done-circle-sharp" style="font-size: 20px;position:relative;
                                    top:5px;color:green"></ion-icon>
                                    <?php } ?>
                                    
                                    <?php echo $data['judul'];?>
                                </div>
                                <div class="col-md-3">
                                    <!-- Tombol Selesai -->
                                    <a href="set_selesai.php?id=<?php echo $data['id']?>" class="btn btn-success btn-sm">
                                    <ion-icon name="checkmark-sharp"></ion-icon>
                                    </a>

                                    <!-- Tombol Edit -->
                                    <a href="form_edit.php?id=<?php echo $data['id']?>" class="btn btn-warning btn-sm">
                                    <ion-icon name="create"></ion-icon>
                                    </a>

                                    <!-- Tombol Hapus -->
                                    <a href="hapus.php?id=<?php echo $data['id']?>" class="btn btn-danger btn-sm">
                                    <ion-icon name="trash-bin"></ion-icon>
                                    </a>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                         }
                    ?>
                    <!-- Card Selesai sampai sini -->
                </div>
            </div>
        </div>
    
        
     
    </section>

    <script src="js/bootsrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    

</body>
</html>