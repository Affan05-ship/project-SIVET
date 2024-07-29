<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIVET - Dashboard</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/stylelagi.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            

            <!-- Heading -->
            <div class="sidebar-heading">
    </div>

            <!-- Nav Item - Pages Collapse Menu -->
         

            <!-- Nav Item - Utilities Collapse Menu -->
           
            <!-- Divider -->
            <hr class="sidebar-divider">

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
          
            </li>

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
                <a class="btn btn-success btn-sm"><h6><strong>Thank you!</strong></h6>for purchasing</a>
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        

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
                    <h1 class="h3 mb-2 text-gray-800">LAB. KOMPUTER</h1>
                    <p class="mb-4">tabel berikut memuat data-data dari inventarisasi ruang laboratorium komputer</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">DATA INVENTARISASI</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="tambah1.php"><button type="button" class="btn btn-success mb-2"> + TAMBAH DATA</button></a>
                               
                           

                              

                                <table border="1">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Barang</th>
                                            <th>Jumlah</th>
                                            <th>Kondisi</th>
                                            <th>OPSI</th>
                                        </tr>
                                    </thead>
                                   
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>Barang</th>
                                            <th>Jumlah</th>
                                            <th>Kondisi</th>
                                            <th>OPSI</th>
                                        </tr>
                                        
                                    </tfoot>
                                    <tbody>
                                    <?php

                                    include ('koneksi.php');

                                    $batas = 2;
                                    $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                                    $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                                    $previous = $halaman - 1;
                                    $next = $halaman + 1;

                                    $data = mysqli_query($koneksi, "select * from invlab");
                                    $jumlah_data = mysqli_num_rows($data);
                                    $total_halaman = ceil($jumlah_data / $batas);

                                    $data_barang = mysqli_query($koneksi, "select * from invlab limit $halaman_awal, $batas");
                                    $nomor = $halaman_awal + 1;
                                   
                                    if(isset($_GET['cari'])){
                                    $cari = $_GET['cari'];
                                    $data = mysqli_query($koneksi,"select * from invlab where barang like '%".$cari."%'");    
                                    }else{
                                    $data = mysqli_query($koneksi,"select * from invlab");  
                                    }
                                    
                                    $no = 1;
                                    while($d = mysqli_fetch_array($data)){
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['barang']; ?></td>
                                        <td><?php echo $d['jumlah']; ?></td>
                                        <td><?php echo $d['kondisi']; ?></td>
                                        <td>
                                            <a href="edit1.php?id=<?php echo $d['id']; ?>"><button type="button" class="btn btn-warning">EDIT</button></a>
                                            <a href="hapus1.php?id=<?php echo $d['id']; ?>"><button type="button" class="btn btn-danger">HAPUS</button></a>
                                        </td>
                                    </tr>
                                     <?php    
                                     }
                                     ?>
                                    </tbody>
                                </table>
                                </table>
                            </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>