

<?php
include 'koneksi.php';



$data1 = mysqli_query($koneksi, "select * from invlab");
$count1 = mysqli_num_rows($data1);

$data2 = mysqli_query($koneksi, "select * from inv31");
$count2 = mysqli_num_rows($data2);

$data3 = mysqli_query($koneksi, "select * from inv32");
$count3 = mysqli_num_rows($data3);

$data4 = mysqli_query($koneksi, "select * from inv33");
$count4 = mysqli_num_rows($data4);

$data5 = mysqli_query($koneksi, "select * from inv34");
$count5 = mysqli_num_rows($data5);
?>

<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIVET - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/stylelagi.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-0">
                    
                    <img src="symb/UIM2.png" height="50"  alt="Logo of UIM" title="UIM is our 🙌 collage">
                </div>
                <div href="index.php" class="sidebar-brand-text mx-3"><h4><strong>SIVET</strong><sup></sup> </h4></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">

            </div>

            <!-- Nav Item - Pages Collapse Menu -->
           

            <!-- Nav Item - Utilities Collapse Menu -->
           

            <!-- Divider -->
          

            <!-- Heading -->
            <div class="sidebar-heading">
                interaksi
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Inventaris</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="tables1.php">Lab. Komputer</a>
                        <a class="collapse-item" href="tables2.php">Ruang 3.1</a>
                        <a class="collapse-item" href="tables3.php">Ruang 3.2</a>
                        <a class="collapse-item" href="tables4.php">Ruang 3.3</a>
                        <a class="collapse-item" href="tables5.php">Ruang 3.4</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Charts -->
          

            <!-- Nav Item - Tables -->


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="symb/thumbguy.png" alt="...">
                <p class="text-center mb-2"><strong>SIVET is alredy premium</strong> </p>
                <a class="btn btn-success btn-sm" ><h6><strong>Thank you!</strong></h6>for purchasing</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - Messages -->
                        

                      

                        <!-- Nav Item - User Information -->
                        
                       
                            
                            
                           
                            
                           
                                
                               
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                       

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row"> 

                        <!-- Earnings (Monthly) Card Example -->
                        <a class="btn col-xl-3 col-md-6 mb-4 btn-sm"href="tables1.php">
                            <div class="btn-left card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-m font-weight-bold text-primary text-uppercase text-left mb-1" >
                                                Lab. Komputer</div>
                                            <div class="h5 mb-0 font-weight-bold text-left text-gray-800"><?=$count1;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="symb/computer.png" height="50"  alt="Logo of computer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- Earnings (Monthly) Card Example -->
                        <a class="btn col-xl-3 col-md-6 mb-4"href="tables2.php">
                            <div class="btn-left card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-m font-weight-bold text-success text-uppercase text-left mb-1">
                                                Ruang 3.1</div>
                                            <div class="h5 mb-0 font-weight-bold text-left text-gray-800"><?=$count2;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="symb/book.png" height="50"  alt="Logo of perpus">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- Earnings (Monthly) Card Example -->
                        <a class="btn col-xl-3 col-md-6 mb-4"href="tables3.php">
                            <div class="btn-left card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-m font-weight-bold text-info text-uppercase text-left mb-1">Ruang 3.2
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 text-left"><?=$count3;?></div>
                                                </div>
                                                <div class="col">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="symb/book.png" height="50"  alt="Logo of IT">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- Pending Requests Card Example -->
                        <a class="btn col-xl-3 col-md-6 mb-4"href="tables4.php">
                            <div class="btn-left card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-m font-weight-bold text-warning text-uppercase text-left mb-1">
                                                Ruang 3.3</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-left"><?=$count4;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="symb/patient.png" height="50"  alt="Logo of adminkes">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="btn col-xl-3 col-md-6 mb-4"href="tables5.php">
                            <div class="btn-left card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-m font-weight-bold text-danger text-uppercase mb-1 text-left">
                                                Ruang 3.4</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-left"><?=$count5;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="symb/pc.png" height="50"  alt="Logo of adminkes">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        

                        <!-- Pie Chart -->
                        

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            

                            <!-- Color System -->
                            

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            

                            <!-- Approach -->
                            

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SIVET UIM third Task Force 2K24</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah benar anda ingin Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" jika yakin dengan pilihan anda.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="logout.php">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
