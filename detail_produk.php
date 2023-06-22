<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="assets/img/LOGO.png">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary py-3">
      <a class="navbar-brand" href="#">
        <img src="assets/img/LOGO.png" alt="Logo" width="28" height="33">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="produk.php">Produk</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Kontak</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button class="nav-link btn btn-warning" type="button" onclick="location.href='#'">Login</button>
                </li>
                <li class="nav-item" style="margin-left: 10px;">
                    <a class="nav-link" href="#">Daftar</a>
                </li>
            </ul>
        </div>
    </nav>

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
<footer class="bg-primary py-3">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <p>&copy; 2023 Web Galeri Produk MI. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</section>

    
</body>
</html>