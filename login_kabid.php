<?php 
session_start();
if (isset($_SESSION['username'])) {
    header("location: request_jadwal.php");
}
    include("Admin/koneksi.php");
    $username ="";
    $password ="";
    $gagal ="";
    if (isset($_POST['submit'])) {
        $username   = $_POST['username'];
        $password   = $_POST['password'];
        if($username == '' or $password == ''){
            $gagal .= "<li?>Silahkan masukkan username dan password</li>";
        }
        if (empty($gagal)) {
            $sql2 = "select * from users where username = '$username'";
            $q2 = mysqli_query($conn,$sql2);
            $r2 = mysqli_fetch_array($q2);
            if ($r2['password'] != md5($password)) {
                $gagal .= "<li>Akun tidak di temukan</li>";
            }
        }
        if (empty($gagal)) {
            $_SESSION['username'] = $username;
            header("location: request_jadwal.php");
            exit();
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penjadwalan siaran radio</title>

    <!-- Custom fonts for this template-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-1">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    
                        <!-- Nested Row within Card Body -->
                        <!-- <div class="row"> -->
                            <div class="col-lg-15">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login-Admin</h1>
                                    </div>
                                    <?php 
                                    if ($gagal) {
                                        echo "<ul>$gagal</ul>";
                                    }
                                    ?>
                                    <form class="user" action="" method="post">
                                        <div class="form-group">
                                            <input type="text" value="<?php echo $username ?>" name="username" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Login"/>
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>