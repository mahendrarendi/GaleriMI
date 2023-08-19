<?php
include("../database/config.php");

$nama_produk = $link_produk = $kategori_produk = $description_produk = $foto_produk_name = $foto_produk_temp = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_produk = $_POST["nama_produk"];
    $link_produk = $_POST["link_produk"];
    $kategori_produk = $_POST["kategori_produk"];
    $description_produk = $_POST["description"];

    // Upload Foto
    $foto_produk_name = $_FILES["foto_produk"]["name"];
    $foto_produk_temp = $_FILES["foto_produk"]["tmp_name"];

    // Check if the file was uploaded without errors
    if (!empty($foto_produk_name) && is_uploaded_file($foto_produk_temp)) {
        $foto_produk_data = file_get_contents($foto_produk_temp);

        $query = "INSERT INTO products (nama_produk, link_produk, kategori_produk, description, foto_produk_name, foto_produk) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ssssbs", $nama_produk, $link_produk, $kategori_produk, $description_produk, $foto_produk_name, $foto_produk_data);

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
                  <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-sign-out"></i> <span class="d-none d-md-inline">Logout</span></a>
        </div>
    </div>
      <!-- Slide Bar End -->

   <!--Produk -->
   <main class="col-md-10 float-left col px-5 pl-md-2 pt-2 main">
        <div class="mb-3 text-right">
            <a href="tambah_produk.php" class="btn btn-primary">Tambah Data</a>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="text-center">NO</th>
                    <th scope="col" class="text-center">Nama Produk</th>
                    <th scope="col" class="text-center">Foto Produk</th>
                    <th scope="col" class="text-center">Link Produk</th>
                    <th scope="col" class="text-center">Kategori Produk</th>
                    <th scope="col" class="text-center">Deskripsi Produk</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
    include("../database/config.php");

    $query = "SELECT p.*, c.name AS kategori_name FROM products p
              LEFT JOIN categories c ON p.kategori_produk = c.category_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $count = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<th scope="row">' . $count . '</th>';
            echo '<td>' . $row["nama_produk"] . '</td>';
            echo '<td><center><i class="fa fa-image"></i></center></td>';
            echo '<td>' . $row["link_produk"] . '</td>';
            echo '<td>' . $row["kategori_name"] . '</td>'; // Menampilkan nama kategori
            echo '<td>' . $row["description"] . '</td>';
            echo '<td class="text-center">
                     <a href="edit_produk.php?id=' . $row['product_id'] . '" class="btn btn-warning btn-sm">
                        <i class="fa fa-pencil"></i> Edit
                     </a>
                     <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal' . $row['product_id'] . '">
                        <i class="fa fa-trash"></i> Hapus
                     </button>';
            echo '</tr>';

                // Modal for delete confirmation
      echo '<div class="modal fade" id="deleteModal' . $row['product_id'] . '" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel' . $row['product_id'] . '" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel' . $row['product_id'] . '">Konfirmasi Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-body">
                        Apakah Anda yakin ingin menghapus produk ini?
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <a href="hapus_produk.php?id=' . $row['product_id'] . '" class="btn btn-danger">Hapus</a>
                     </div>
                  </div>
               </div>
            </div>';

            $count++;
        }
    } else {
        echo '<tr><td colspan="6" class="text-center">Tidak ada data produk.</td></tr>';
    }

    mysqli_close($conn);
?>


</tbody>

        </table>
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