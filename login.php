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
    <title>Login</title>
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

<body class="sub_page">
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
                                <a class="nav-link" href="produk.php">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#about">Tentang Kami</a>
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
    </div>
    <!-- inner page section -->
    <section class="inner_page_head" style="background-color: #fff;">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <!-- <h3>Contact us</h3> -->
                        <img src="assets/img/LOGO.png" alt="Logo MI" style="width:70px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->
    <!-- why section -->
    <section class="why_section layout_paddings">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <h3 class="text-center"><b>Login</b></h3>
                    <div class="full">
                        <form action="">
                            <fieldset>
                                <label><b>Username Or Email Address</b></label>
                                <input type="text" placeholder="" name="username" required />
                                <label><b>Password</b></label>
                                <input type="password" placeholder="" name="password" required />
                                <label><input type="checkbox" name="rememberme"/>Remember Me</label>
                                <!-- <input type="submit" value="Login" /> -->
                                <div class="row">
                                <div class="col-lg-6">
                                <input type="submit" value="Login" /></div>
                                <div class="col-lg-6"> <a href="">Lost Your Password?</a></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end why section -->
    <!-- footer end -->
    <div class="cpy_ fixed-bottom">
        <p class="mx-auto">
            Copyright © All Rights Reserved
        </p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>