<?php
include("../database/config.php");

$error = ""; // Inisialisasi variabel error

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["id"])) {
        $user_id = $_GET["id"];

        // Lakukan kueri untuk mendapatkan data user berdasarkan $user_id
        $query = "SELECT * FROM users WHERE id = '$user_id'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $data_user = mysqli_fetch_assoc($result);
        } else {
            $error = "Data user tidak ditemukan.";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["id"]) && isset($_POST["nama"]) && isset($_POST["email"])) {
        $user_id = $_POST["produk_id"];
        $nama_user = $_POST["nama_user"];
        $email_user = $_POST["email_user"];
        $nim_user = $_POST["nim_user"];

        // Lakukan kueri untuk melakukan update data produk
        $query = "UPDATE users SET nama = ?, nim = ?, email = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ssisi", $nama_user, $nim_user, $email_user, $user_id);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header("Location: pengguna.php");
            exit();
        } else {
            $error = "Gagal mengupdate user.";
        }
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
   <title>Edit Produk</title>
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

   <!-- Edit Produk -->
   <section class="why_section layout_paddings">
   
        <div class="container">
            <div class="mb-3 text-right">
                <a href="produk.php" class="btn btn-primary">Kembali</a>
            </div>
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="full">
                     <form action="" method="post" enctype="multipart/form-data">
                              <fieldset>
                                    <input type="hidden" name="id" value="<?php echo $data_user['id']; ?>">
                                    <label><b>Nama</b></label>
                                    <input type="text" name="nama" value="<?php echo $data_user['nama']; ?>" required />
                                    <!-- Kemudian setelah input Deskripsi Produk, tambahkan input untuk mengganti foto produk -->
                                    <label><b>Ganti Foto </b></label>
                                    <input type="file" name="foto_data">

                                    <label><b>Nim</b></label>
                                    <input type="text" name="nim" value="<?php echo $data_user['nim']; ?>" required />
                                    <label><b>Email</b></label>
                                    <input type="text" name="email" value="<?php echo $data_user['email']; ?>" required />
                                    <input type="submit" value="Simpan Perubahan" />
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
   <!-- Edit Produk End -->

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
