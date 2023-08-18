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
   <title>Dashboard Admin</title>
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
               <a class="navbar-brand" href="dashboard.php"><img width="50" src="../assets/img/LOGO.png" alt="#" /></a>
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


      <div class="container-fluid">
         <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-2 float-left col-1 pl-0 pr-0 collapse width show" id="sidebar">
               <div class="list-group border-0 text-center text-md-left">
                  <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-dashboard"></i> <span class="d-none d-md-inline">Dashboard</span></a>
                  <a href="#menu1" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-gear"></i> <span class="d-none d-md-inline">Data Master</span> </a>
                  <div class="collapse" id="menu1" data-parent="#sidebar">
                     <a href="produk.php" class="list-group-item">Data Produk</a>
                     <a href="pengguna.php" class="list-group-item">Data Pengguna</a>
                     <a href="kategori.php" class="list-group-item">Data Kategori</a>
                  </div>
                  <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-sign-out"></i> <span class="d-none d-md-inline">Logout</span></a>
               </div>
            </div>

            <main class="col-md-10 float-left col px-5 pl-md-2 pt-2 main">
               <div class="row">
                  <div class="col-md-12">
                     <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                           <div class="breadcome-list">
                              <div class="row">
                                 <div class="col-md-4"><i class="fa fa-users fa-4x ml-4"></i>
                                    <div class="col-md-6 mt-2">
                                       <p><b>Pengguna</b></p>
                                    </div>
                                 </div>
                                 <div class="col-md-6 text-center">
                                    <h1 style="font-size:80px;"><b>7</b></h1>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                           <div class="breadcome-list">
                              <div class="row">
                                 <div class="col-md-4"><i class="fa fa-cubes fa-4x ml-4"></i>
                                    <div class="col-md-6 mt-2 ml-3">
                                       <p><b>Produk</b></p>
                                    </div>
                                 </div>
                                 <div class="col-md-6 text-center">
                                    <h1 style="font-size:80px;"><b>10</b></h1>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                           <div class="breadcome-list">
                              <div class="row">
                                 <div class="col-md-4"><i class="fa fa-th-list fa-4x ml-4"></i>
                                    <div class="col-md-6 mt-2">
                                       <p><b>Category</b></p>
                                    </div>
                                 </div>
                                 <div class="col-md-6 text-center">
                                    <h1 style="font-size:80px;"><b>3</b></h1>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         </div>
         </main>
      </div>
   </div>

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