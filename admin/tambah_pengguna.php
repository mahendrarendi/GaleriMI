<?php
    include("../database/config.php");

    $nama_user = $nim_user = $email_user = $password_user = $foto_user_name = $foto_user_temp = $foto_user_data = $role = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nama_user = $_POST["nama"];
      $nim_user = $_POST["nim"];
      $email_user = $_POST["email"];
      $password_user = $_POST["password"];

      $hashedPassword = password_hash($password_user, PASSWORD_DEFAULT);

        // Upload Foto
        $foto_user_name = $_FILES["foto_data"]["name"];
        $foto_user_temp = $_FILES["foto_data"]["tmp_name"];

        // Check if the file was uploaded without errors
        if (!empty($foto_user_name) && is_uploaded_file($foto_user_temp)) {
            $foto_user_data = file_get_contents($foto_user_temp);

            $query = "INSERT INTO users (nama, nim, email, password, foto_name, foto_data, role) VALUES (?, ?, ?, ?, ?, ?, 'user')";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "ssssbs", $nama_user, $nim_user, $email_user, $hashedPassword, $foto_user_name, $foto_user_data);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_close($stmt);
                mysqli_close($conn);
                header("Location: pengguna.php");
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
               <a class="navbar-brand" href="./index.php"><img width="50" src="../assets/img/LOGO.png" alt="#" /></a>
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
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
               <div class="page-header text-center">
               <img width="50" src="../assets/img/LOGO.png" alt="#" />
               </div>
            </main>
      <!-- Slide Bar End -->

   <!--Produk -->
        <section class="why_section layout_paddings">
                <div class="container">
                    <div class="row" style="margin-bottom: 100px;">
                        <div class="col-lg-4 offset-lg-4">
                            <div class="full">
                                <form action="tambah_pengguna.php" method="post" enctype="multipart/form-data">
                                    <fieldset>
                                        <label><b>Nama</b></label>
                                        <input type="text" name="nama" required />
                                        <label><b>Foto </b></label>
                                        <input type="file" name="foto_data" required />
                                        <label><b>NIM</b></label>
                                        <input type="text" name="nim" required />
                                        <label><b>Email</b></label>
                                        <input type="select" name="email" required />
                                        <label><b>Password</b></label>
                                        <input type="password" name="password" required />
                                        <input type="submit" value="Unggah" /></div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
         </section>
   <!-- Produk End -->

    <!-- footer start -->

    <style>
        .footer-wrapper {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 0px 0;
        }
    </style>


    <div class="footer-wrapper">
        <div class="cpy_">
            <p class="mx-auto">
                Copyright © All Rights Reserved
            </p>
        </div>
    </div>

   <!-- footer end -->

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>