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
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Produk</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Kontak</a>
                </li>
            </ul>
        </div>

       
    </nav>

    <style>
        .banner{
            background-image: url("assets/img/banner.jpeg");
            background-size: cover;
            background-position: center;
            text-align: center;
            padding: 100px 0;
            color: #fff;
        }

        .banner h2 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
    <div class="banner">
        <h2>Web Galeri Produk MI</h2>
    </div>

    <div class="container bg-primary col-md-12 py-2">
    <div class="row">
      <div class="col text-center">
       <h1>tes</h1>
      </div>
    </div>
  </div>

<section id="products">
  <div class="container">
    <h2>Galeri Produk</h2>
    <div class="row">
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

      foreach ($products as $key => $product) {
        echo '<div class="col-md-3 mb-4">';
        echo '<a href="detail_produk.php?id=' . $key . '">';
        echo '<div class="card">';
        echo '<img src="' . $product["image"] . '" class="card-img-top" alt="Product Image">';
        echo '<div class="card-body">';
        echo '<h3 class="card-title">' . $product["name"] . '</h3>';
        echo '</div>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
      }
      ?>
    </div>
  </div>


  <?php
    // $query = "SELECT * FROM products";
    // $result = mysqli_query($connection, $query);

    // if (mysqli_num_rows($result) > 0) {
    //   while ($row = mysqli_fetch_assoc($result)) {
    //     echo "<div class='product'>";
    //     echo "<img src='images/" . $row['image'] . "' alt='Product Image'>";
    //     echo "<h3>" . $row['name'] . "</h3>";
    //     echo "<p>" . $row['description'] . "</p>";
    //     echo "<span>" . $row['price'] . "</span>";
    //     echo "</div>";
    //   }
    // } else {
    //   echo "No products found.";
    // }

    // mysqli_close($connection);
    ?>
    
</section>

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
</body>
</html>
