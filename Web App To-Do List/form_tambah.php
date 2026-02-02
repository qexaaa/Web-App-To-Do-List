<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web App To-Do List</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Edu+QLD+Hand:wght@400..700&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
    <!-- Main Section -->
     <section>
        <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-3">
                <h3 class="text-center mb-3 mt-2">
                    <span class="geser-bawah">
                    <span class="edu-qld-hand ">
                        Tambah Data - To Do List</h3>
                    
                        <form action="simpan_data.php" method="POST">
                            <div class="mb-3">
                                <label for="judul" class="form-label">Saya mauu</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="index.php" class="btn btn-danger">Batal</a>
                        </form>
                </div>
            </div>
        </div>
    
        
     
    </section>

    <script src="js/bootsrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    

</body>
</html>