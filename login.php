<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/stylegw.css" rel="stylesheet">

</head>

<body class="loginreg">
<form action="php/login.php" method="POST">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center ">
             <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
            
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-1 d-none d-lg-block"></div>
                            <div class="col-lg-10">
                                <div class="p-6">
                        <div class="logo">
                            <img src="symb/UIMkml.png" height="350">
                        </div>
                        
                        <div class="text-center">
                            <h1 class="h1 text-light mb-4">AYO LOGIN!</h1>
                        </div>
                        <?php if(isset($_GET['error'])){ ?>
                        <div class="alert alert-danger" role="alert">
                        <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                                    
                                    <form class="user">

                                        
                                        <div class="box-input">
                                            <i class="fas fa-envelope-open-text"></i>
                                            <input type="username" name="uname" placeholder="Username"
                                            value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
                                        </div>
                                        <div class="box-input">
                                            <i class="fas fa-lock"></i>
                                            <input type="password" name="pass" placeholder="Password">
                                        </div>
                                        <div href=".../index.php">
                                            <button type="submit" name="login" class="btn-input">Login</button>
                                        </div>
                                        <div class="bottom">
                                            <p>Belum punya akun?
                                                <a href="register.php">Daftar disini</a>
                                            </p>
                                        </div>
                                            <hr>
                                        </form>
                                        <hr>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</form>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>