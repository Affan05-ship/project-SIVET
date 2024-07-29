<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Akun - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/stylegw.css" rel="stylesheet">

</head>

<body class="loginreg">
    <div class="container">
        <form action="php/register.php" method="POST" enctype="multipart/form-data">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-1 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-10">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h3 text-light mb-4">Buat akun dulu!</h1>
                            </div>
                            <?php if(isset($_GET['error'])){ ?>
                            <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                            </div>
                            <?php } ?>

                            <?php if(isset($_GET['success'])){ ?>
                            <div class="alert alert-success" role="alert">
                            <?php echo $_GET['success']; ?>
                            </div>
                            <?php } ?>

                            <form class="user">
                                <div class="box-input">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="fname" placeholder="Nama Lengkap"
                                    value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>">
                                </div>
                                <div class="box-input">
                                    <i class="fas fa-address-book"></i>
                                    <input type="text" name="uname" placeholder="Username"
                                    value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
                                </div>
                        
                                <div class="box-input">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" name="pass" placeholder="Password"
                                    value="<?php echo (isset($_GET['pass']))?$_GET['pass']:"" ?>">
                                </div>
                                
                                    <button type="submit" name="register" class="btn-input">Daftar</button>
                                
                                <div class="bottom">
                                    <p>Sudah punya akun?
                                        <a href="login.php">Login disini</a>
                                    </p>
                                </div>
                                    
                                </div>
                     
                               
                            </form>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
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