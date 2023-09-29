<?php
    include("../database/config.php");

    $nama_produk = $link_produk = $kategori_produk = $description_produk = $foto_produk_name = $foto_produk_temp = $foto_produk_data = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_pemilik = $_POST["nama_pemilik"];
        $nama_produk = $_POST["nama_produk"];
        $link_produk = $_POST["link_produk"];
        $kategori_produk = $_POST["kategori_produk"];
        $description_produk = $_POST["description_produk"];

        // Upload Foto
        $foto_produk_name = $_FILES["foto_produk"]["name"];
        $foto_produk_temp = $_FILES["foto_produk"]["tmp_name"];

        // Check if the file was uploaded without errors
        if (!empty($foto_produk_name) && is_uploaded_file($foto_produk_temp)) {
            $foto_produk_data = file_get_contents($foto_produk_temp);

            $query = "INSERT INTO products (nama_produk, link_produk, kategori_produk, description, foto_produk_name, foto_produk, nama_pemilik) 
          VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ssssbsi", $nama_produk, $link_produk, $kategori_produk, $description_produk, $foto_produk_name, $foto_produk_data, $nama_pemilik);


            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_close($stmt);
                mysqli_close($conn);
                header("Location: produk.php");
                exit();
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Error uploading file.";
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
   <!-- Basic -->
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <!-- Site Metas -->
   <meta name="keywords" content="" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <title>ProduK User</title>

   <!-- ... kode lain ... -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>




   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />
   <!-- font awesome style -->
   <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
   <!-- Custom styles for this template -->
   <link href="../assets/css/style.css" rel="stylesheet" />
   <!-- responsive style -->
   <link href="../assets/css/responsive.css" rel="stylesheet" />
   <link rel="shortcut icon" href="../assets/img/LOGO.png">
   
   <style>
   /* Styling for the wrapper div */
   .input-wrapper {
      margin-bottom: 20px;
   }

   /* Styling for the select element */
   select[name="kategori_produk"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f8f8f8;
      font-size: 16px;
   }

    /* Styling for the wrapper div */
    .input-wrapper {
      margin-bottom: 20px;
   }

   /* Styling for the select element */
   select[name="nama_pemilik"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f8f8f8;
      font-size: 16px;
   }
</style>


</head>

<body>
   <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
               <a class="navbar-brand" href="index.php"><img width="50" src="../assets/img/LOGO.png" alt="#" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                     <i class="fa fa-search fa-lg"></i> 
                     </li>
                     <li class="nav-item" style="margin-left: 10px;">
                     <i class="fa fa-user fa-lg"></i> 
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </header>
      <!-- end header section -->

      <!-- Slide Bar -->
    <div class="container-fluid">
         <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-2 float-left col-1 pl-0 pr-0 collapse width show" id="sidebar">
               <div class="list-group border-0 text-center text-md-left">
                  <a href="dashboard.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-dashboard"></i> <span class="d-none d-md-inline">Dashboard</span></a>
                  <a href="#menu1" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-gear"></i> <span class="d-none d-md-inline">Data Master</span> </a>
                  <div class="collapse" id="menu1" data-parent="#sidebar">
                     <a href="produk.php" class="list-group-item">Data Produk</a>
                     <a href="pengguna.php" class="list-group-item">Data Pengguna</a>
                     <a href="kategori.php" class="list-group-item">Data Kategori</a>
                  </div>
                  <a href="../logout.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-sign-out"></i> <span class="d-none d-md-inline">Logout</span></a>
        </div>
    </div>
            
      <!-- Slide Bar End -->

   <!-- Upload Produk -->
   <section class="why_section layout_paddings">
        <div class="container">
            <div class="mb-3 text-right">
                <a href="produk.php" class="btn btn-primary">Kembali</a>
            </div>
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="full">
                     <form action="tambah_produk.php" method="post" enctype="multipart/form-data">
                              <fieldset>
                                       <div class="input-wrapper">
                                          <label><b>Nama Pemilik</b></label>
                                          <select name="nama_pemilik" required>
                                             <?php
                                             include("../database/config.php");

                                             $user_query = "SELECT * FROM users";
                                             $user_result = mysqli_query($conn, $user_query);

                                             if ($user_result && mysqli_num_rows($user_result) > 0) {
                                                while ($user_row = mysqli_fetch_assoc($user_result)) {
                                                   echo '<option value="' . $user_row["id"] . '">' . $user_row["nama"] . '</option>';
                                                }
                                             }
                                             mysqli_close($conn);
                                             ?>
                                          </select>
                                       </div>
                                    <label><b>Nama Produk</b></label>
                                    <input type="text" name="nama_produk" required />
                                    <label><b>Link Produk</b></label>
                                    <input type="text" name="link_produk" required />
                                    <label><b>Foto Produk</b></label>
                                    <input type="file" name="foto_produk" required />
                                       <div class="input-wrapper">
                                          <label><b>Kategori Produk</b></label>
                                          <select name="kategori_produk" required>
                                             <?php
                                             include("../database/config.php");

                                             $kategori_query = "SELECT * FROM categories";
                                             $kategori_result = mysqli_query($conn, $kategori_query);

                                             if ($kategori_result && mysqli_num_rows($kategori_result) > 0) {
                                                while ($kategori_row = mysqli_fetch_assoc($kategori_result)) {
                                                   echo '<option value="' . $kategori_row["category_id"] . '">' . $kategori_row["name"] . '</option>';
                                                }
                                             }
                                             mysqli_close($conn);
                                             ?>
                                          </select>
                                       </div>
                                    <label><b>Deskripsi Produk</b></label>
                                    <textarea name="description_produk" required></textarea>
                                    <input type="submit" value="Tambah Produk" />
                              </fieldset>
                           </form>
                    </div>
                </div>
            </div>
        </div>
      </section>
         </div>
         </main>
      </div>
   </div>
   <!-- Produk End -->

   <!-- footer start -->
   <div class="cpy_">
      <p class="mx-auto">
         Copyright © All Rights Reserved
      </p>
   </div>
   <!-- footer end -->

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>