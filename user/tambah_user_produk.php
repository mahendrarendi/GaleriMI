<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user_id']) || !isset($_SESSION['nama'])) {
    header("Location: login.php");
    exit();
}

include("database/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_produk = $_POST["nama_produk"];
    $link_produk = $_POST["link_produk"];
    $kategori_produk = $_POST["kategori_produk"];
    $deskripsi_produk = $_POST["deskripsi_produk"];
    $foto_produk = $_POST["foto_produk"];

    // Lakukan validasi data jika diperlukan
    // ...

    // Query INSERT ke dalam database
    $query = "INSERT INTO products (nama_produk, link_produk, kategori_produk, deskripsi_produk, foto_produk) VALUES ('$nama_produk', '$link_produk', '$kategori_produk', '$deskripsi_produk','$foto_produk')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Jika berhasil, redirect ke halaman dashboard
        header("Location: dashboard_user.php");
        exit();
    } else {
        // Jika gagal, tampilkan pesan error
        $uploadError = "Terjadi kesalahan saat mengunggah produk.";
    }

    mysqli_close($conn);
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
   <title>Dashboard User</title>
   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />
   <!-- font awesome style -->
   <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
   <!-- Custom styles for this template -->
   <link href="../assets/css/style.css" rel="stylesheet" />
   <!-- responsive style -->
   <link href="../assets/css/responsive.css" rel="stylesheet" />
   <link rel="shortcut icon" href="../assets/img/LOGO.png">
</head>

<body>
   <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.php"><img width="50" src="../assets/img/LOGO.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item" style="margin-left: 10px;">
                        <?php
                           session_start();
                           if (isset($_SESSION['user_id']) && isset($_SESSION['nama'])) {
                              echo '<i class="fa fa-user fa-lg"></i> Selamat datang, ' . $_SESSION['nama'];
                           } else {
                              echo '<i class="fa fa-exclamation-triangle fa-lg"></i> Tidak ada informasi login';
                           }
                        ?>
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
               <a href="dashboard_user.php" class="list-group-item d-inline-block collapsed">
                  <i class="fa fa-gear"></i> <span class="d-none d-md-inline">Manajemen Produk</span>
               </a>
               <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-sign-out"></i> <span class="d-none d-md-inline">Logout</span></a>
               </div>
            </div>
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
               <div class="page-header text-center">
               <img width="50" src="../assets/img/LOGO.png" alt="#" />
               </div>
            </main>
         <!-- Slide Bar end -->

   <!-- Upload Produk -->
    <section class="why_section layout_paddings">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="full">
                        <form action="">
                            <fieldset>
                                <label><b>Nama Produk</b></label>
                                <input type="text" name="nama_produk" required />
                                <label><b>Foto Produk</b></label>
                                <input type="file" name="foto_produk" required />
                                <label><b>Link Produk</b></label>
                                <input type="text" name="link_produk" required />
                                <label><b>Kategori Produk</b></label>
                                <input type="select" name="link_produk" required />
                                <label><b>Deskripsi Produk</b></label>
                                <input type="text" name="deskripsi_produk" required />
                                <input type="submit" value="Unggah" /></div>
                                <span style="font-size: 16px;"><br></span>
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
   <!-- Upload Produk End -->

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