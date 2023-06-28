<!DOCTYPE html>
<html lang="en">
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
</head>
<body>
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
                           <a class="nav-link" href="produk.php">Produk</a>
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

<section id="product-details">
  <div class="container w-100%">
    <?php
    // Dummy data
    $products = [
        ["image" => "https://dummyimage.com/300x200/000/fff", "name" => "Product 1", "description" => "Product 1 description"],
        ["image" => "https://dummyimage.com/300x200/000/fff", "name" => "Product 2", "description" => "Product 2 description"],
        ["image" => "https://dummyimage.com/300x200/000/fff", "name" => "Product 3", "description" => "Product 3 description"],
        ["image" => "https://dummyimage.com/300x200/000/fff", "name" => "Product 4", "description" => "Product 4 description"],
        ["image" => "https://dummyimage.com/300x200/000/fff", "name" => "Product 5", "description" => "Product 5 description"],
        ["image" => "https://dummyimage.com/300x200/000/fff", "name" => "Product 6", "description" => "Product 6 description"],
        ["image" => "https://dummyimage.com/300x200/000/fff", "name" => "Product 7", "description" => "Product 7 description"],
        ["image" => "https://dummyimage.com/300x200/000/fff", "name" => "Product 8", "description" => "Product 8 description"],
        ["image" => "https://dummyimage.com/300x200/000/fff", "name" => "Product 9", "description" => "Product 9 description"],
        ["image" => "https://dummyimage.com/300x200/000/fff", "name" => "Product 10", "description" => "Product 10 description"],
        ["image" => "https://dummyimage.com/300x200/000/fff", "name" => "Product 11", "description" => "Product 11 description"],
        ["image" => "https://dummyimage.com/300x200/000/fff", "name" => "Product 12", "description" => "Product 12 description"],
    ];

    // Get the product ID from the URL parameter
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    // Check if the product ID is valid
    if ($id !== null && array_key_exists($id, $products)) {
      $product = $products[$id];
      
      echo '<div class="product-details" style="margin-top: 30px;">'; // Menyisipkan styling di dalam div
      echo '<h3>' . $product["name"] . '</h3>';
      echo '<div class="product-image">';
      echo '<img src="' . $product["image"] . '" alt="Product Image">';
      echo '<a href="' . $product["image"] . '" download class="btn btn-primary ml-4">Download</a>';
      echo '</div>';
      echo '<p>' . $product["description"] . '</p>';
    } else {
      echo '<p>Product not found</p>';
    }
    ?>
  </div>
</section>

<!-- styling footer -->
<!-- <style>
        html, body {
            height: 100%;
        }
        .wrapper {
            min-height: 100%;
            position: relative;
            padding-bottom: 100px; 
        }
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px; 
        }
    </style>
<footer class="bg-primary py-3">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <p>&copy; 2023 Web Galeri Produk MI. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer> -->

<style>
        html, body {
            height: 100%;
        }
        .wrapper {
            min-height: 100%;
            position: relative;
            padding-bottom: 100px; 
        }
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px; 
        }
    </style>

<!-- Footer -->
      <footer class="cpy_">
         <p class="mx-auto">
            Copyright © All Rights Reserved
         </p>
      </footer>
<!-- End Footer -->


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</section>

    
</body>
</html>