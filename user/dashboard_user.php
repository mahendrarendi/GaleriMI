<?php
session_start();
if (!isset($_SESSION['user_id']) || !isset($_SESSION['nama'])) {
   header("Location: ../login.php");
   exit();
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
                  <span> </span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item" style="margin-left: 10px;">
                        <?php
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
                  <a href="../logout.php" class="list-group-item d-inline-block collapsed">
                     <i class="fa fa-sign-out"></i> <span class="d-none d-md-inline">Logout</span>
                  </a>
               </div>
            </div>
            <!-- Slide Bar End -->

            <!--Produk -->
            <main class="col-md-10 float-left col px-5 pl-md-2 pt-2 main">
               <div class="mb-3 text-right">
                  <a href="tambah_user_produk.php" class="btn btn-primary">Tambah Data</a>
               </div>
               <div class="table-responsive">
               <table class="table table-striped table-bordered">
                  <thead>
                     <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Foto Produk</th>
                        <th scope="col">Link Produk</th>
                        <th scope="col">Deskripsi Produk</th>
                        <th scope="col">Aksi</th>
                     </tr>
                  </thead>

                  <tbody>
                     <?php
                     include("../database/config.php");

                     $query = "SELECT * FROM products LEFT JOIN users ON products.nama_pemilik = users.id WHERE products.nama_pemilik = $_SESSION[user_id]";
                     $result = mysqli_query($conn, $query);

                     if ($result && mysqli_num_rows($result) > 0) {
                        $count = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                           echo '<tr>';
                           echo '<th scope="row">' . $count . '</th>';
                           echo '<td>' . $row["nama_produk"] . '</td>';
                           echo '<td></td>';
                           echo '<td>' . $row["link_produk"] . '</td>';
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
               </div>
               
         </div>

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