<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    include("database/config.php");

    $query = "SELECT id, nama,role, password FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            if($row['role']=="user"){
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['level'] = "user";
                header("Location: user/dashboard_user.php");
            }else if($row['role']=="admin"){
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['level'] = "admin";
                header("Location: admin/dashboard.php");
            }
        } else {
            $loginError = "Email atau password salah.";
        }
    } else {
        $loginError = "Email atau password salah.";
    }

    mysqli_close($conn);
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
    </div>
    <section class="inner_page_head" style="background-color: #fff;">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <a href="index.php"><img src="assets/img/LOGO.png" alt="Logo MI" style="width:70px;"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why_section layout_paddings">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <h3 class="text-center"><b>Login</b></h3>
                    <div class="full">
                    <form action="login.php" method="POST">
                        <fieldset>
                            <label><b>Email Address</b></label>
                            <input type="email" name="email" required autocomplete="off" autocapitalize="none"/>
                            <label><b>Password</b></label>
                            <input type="password" name="password" required />
                            <input type="submit" value="Login" />
                            <span style="font-size: 16px;"><br>
                            <center>Belum Punya Akun? <a href="register.php">Daftar</a></center>
                            </span>
                        </fieldset>
                    </form>
                    <?php
                        if (isset($loginError)) {
                            echo '<p style="color: red;">' . $loginError . '</p>';
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
