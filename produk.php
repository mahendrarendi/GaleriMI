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
   <title>Produk</title>
   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
   <!-- font awesome style -->
   <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
   <!-- Custom styles for this template -->
   <link href="assets/css/style.css" rel="stylesheet" />
   <!-- responsive style -->
   <link href="assets/css/responsive.css" rel="stylesheet" />
   <link rel="shortcut icon" href="assets/img/LOGO.png">

   <style>
      h5>a {
         color: #000;

      }

      h5>a:hover {
         color: #f9e00f;

      }
   </style>
</head>

<body>
   <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
               <a class="navbar-brand" href="index.php"><img width="50" src="assets/img/LOGO.png" alt="#" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#produk">Produk</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Tentang Kami</a>
                     </li>
                  </ul>
               </div>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <button class="nav-link btn btn-warning" type="button" onclick="location.href='login.php'">Login</button>
                     </li>
                     <li class="nav-item" style="margin-left: 10px;">
                        <a class="nav-link" href="register.php">Daftar</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </header>
      <!-- end header section -->

      <!-- CSS benner -->
      <style>
         .banner {
            background-image: url("assets/img/banners.jpeg");
            background-size: cover;
            background-position: center;
            text-align: center;
            padding: 100px 0;
            color: #fff;
         }
      </style>
      <!-- End CSS benner -->

      <!-- Benner -->
      <div class="banner">
         <h2>Galeri Produk</h2>
      </div>
      <!-- Benner -->

      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <!-- <h3>Product Grid</h3> -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->

      <!-- product section -->
      <section class="product_section layout_padding" id="produk">
         <div class="container">
            <div class="heading_container heading_center">
               <h3>Produk MI</h3>
            </div>

            <section id="products">
               <div class="container">
                  <div class="row">
                     <?php
                     include("database/config.php");

                     $query = "SELECT * FROM products";
                     $result = mysqli_query($conn, $query);
                     while ($row = mysqli_fetch_assoc($result)) {
                     ?>

                        <div class="col-sm-6 col-md-3 col-lg-3">
                           <div class="box">
                              <div class="img-box">
                                 <img src="assets/img/produk/" alt="">
                              </div>
                              <div class="detail-box">
                                 <h5>
                                    <a href="detail_produk.php?id=<?= $row['product_id'] ?>"><?php echo $row['nama_produk']; ?></a>
                                 </h5>
                              </div>
                           </div>
                        </div>
                     <?php
                     }
                     ?>
                  </div>
               </div>
            </section>


            <!-- Pagination -->
            <div class="pagination-box">
               <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                     <li class="page-item"><a class="page-link" href="#">1</a></li>
                     <li class="page-item"><a class="page-link" href="#">2</a></li>
                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                     <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </section>
      <!-- end product section -->

      <!-- Footer -->
      <div class="cpy_">
         <p class="mx-auto">
            Copyright © All Rights Reserved
         </p>
      </div>
      <!-- End Footer -->

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>