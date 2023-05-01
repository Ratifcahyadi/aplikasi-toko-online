<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="/sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="/sb-admin-2/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .bg-gradient-primaries {
            background: #a100f6;
            background: -moz-linear-gradient(180deg, #a100f6 0%, #02d2ff%) 100%);
            background: -webkit-linear-gradient(180deg, rgba(161,0,246,1) 0%, rgba(2,210,255,1) 100%);
            background: linear-gradient(180deg, rgba(161,0,246,1) 0%, rgba(2,210,255,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#a100f6",endColorstr="#02d2ff",GradientType=1);
        }

        .text-bg {
            background: #a100f6;
            background: -moz-linear-gradient(45deg, #a100f6 0%, #02d2ff%) 100%);
            background: -webkit-linear-gradient(45deg, rgba(161,0,246,1) 0%, rgba(2,210,255,1) 100%);
            background: linear-gradient(45deg, rgba(161,0,246,1) 0%, rgba(2,210,255,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#a100f6",endColorstr="#02d2ff",GradientType=1);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .text-bg:hover {
            background: url('https://picsum.photos/seed/picsum/40');
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
/* 
        .text-bg {
            background: -webkit-linear-gradient(45deg, #a100f6 0%, #02d2ff 80%);
            -webkit-background-clip: text;
            -webkit-textfield-color: transparent;
        } */
        
        .no-underline:hover {
            text-decoration: none; !important
        }

        .placeholder-white::placeholder, .input-group input[type=text] {
            color: white; 
            caret-color: yellow;
        }

        .bg-glass {
            background: rgba( 255, 255, 255, 0.25 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 4px );
            -webkit-backdrop-filter: blur( 4px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }
    </style>
</head>
<body id="page-top">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-light topbar sticky-top shadow" >

        <!-- Sidebar - Brand -->
        <a class="no-underline sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-dumpster fa-2x" style="color: #9900ff;"></i>
                {{-- <i class="fas fa-laugh-wink"></i> --}}
            </div>
            <h1 class="text-bg font-weight-bold fa-2x">D3-Ecommerce</h1>
            {{-- <div class="sidebar-brand-text mx-3">SB Admin<sup>2</sup></div> --}}
        </a>
        
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <div class="ml-auto d-flex align-items-center">
            <!-- Topbar Search -->
            <form
                class="d-none d-sm-inline-block form-inline ml-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="placeholder-white form-control border-0 small" style="background: #02d2ff" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
    
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ms-auto">
    
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
                {{-- <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">3+</span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Alerts Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 12, 2019</div>
                                <span class="font-weight-bold">A new monthly report is ready to download!</span>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-success">
                                    <i class="fas fa-donate text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 7, 2019</div>
                                $290.29 has been deposited into your account!
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 2, 2019</div>
                                Spending Alert: We've noticed unusually high spending for your account.
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                </li> --}}
    
                <!-- Nav Item - Messages -->
                {{-- <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope fa-fw"></i>
                        <!-- Counter - Messages -->
                        <span class="badge badge-danger badge-counter">7</span>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            Message Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                    alt="...">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold">
                                <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                    problem I've been having.</div>
                                <div class="small text-gray-500">Emily Fowler · 58m</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                    alt="...">
                                <div class="status-indicator"></div>
                            </div>
                            <div>
                                <div class="text-truncate">I have the photos that you ordered last month, how
                                    would you like them sent to you?</div>
                                <div class="small text-gray-500">Jae Chun · 1d</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                    alt="...">
                                <div class="status-indicator bg-warning"></div>
                            </div>
                            <div>
                                <div class="text-truncate">Last month's report looks great, I am very happy with
                                    the progress so far, keep up the good work!</div>
                                <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                    alt="...">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div>
                                <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                    told me that people say this to all dogs, even if they aren't good...</div>
                                <div class="small text-gray-500">Chicken the Dog · 2w</div>
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                    </div>
                </li> --}}
    
                <div class="topbar-divider d-none d-sm-block"></div>
    
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                        <img class="img-profile rounded-circle"
                            src="/sb-admin-2/img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        {{-- aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div> --}}
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
    
            </ul>
        </div>

    </nav>
    <!-- End of Topbar -->

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primaries sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Divider -->
            {{-- <hr class="sidebar-divider my-0"> --}}

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-glass py-2 collapse-inner rounded">
                        <a class="collapse-item text-warning" href="/kategori">Data Kategori</a>
                        <a class="collapse-item text-warning" href="/subkategori">Data Subkategori</a>
                        <a class="collapse-item text-warning" href="/slider">Data Slider</a>
                        <a class="collapse-item text-warning" href="/member">Data Member</a>
                        <a class="collapse-item text-warning" href="/testimoni">Data Testimoni</a>
                        <a class="collapse-item text-warning" href="/reviews">Data Reviews</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Data Pesanan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-glass py-2 collapse-inner rounded">
                        <a class="collapse-item text-warning" href="/pesanan/baru">Pesanan Baru</a>
                        <a class="collapse-item text-warning" href="/pesanan/dikonfirmasi">Pesanan Dikonfirmasi</a>
                        <a class="collapse-item text-warning" href="/pesanan/dikemas">Pesanan Dikemas</a>
                        <a class="collapse-item text-warning" href="/pesanan/dikirim">Pesanan Dikirim</a>
                        <a class="collapse-item text-warning" href="/pesanan/diterima">Pesanan Diterima</a>
                        <a class="collapse-item text-warning" href="/pesanan/selesai">Pesanan Selesai</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/laporan">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Laporan Pesanan</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="/logout">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">@yield('title')</h1>
                    {{-- <img src="https://loremflickr.com/320/240" /> --}}
                    <img src="https://picsum.photos/seed/picsum/200/100" alt="">


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white ">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto"> Copyright &copy;
                        <div style="color: rgb(153,0,255);"> 
                            <i class="fas fa-dumpster fa-1x"></i>
                            <span>D3-Ecommerce </span>  
                            <span id="year"></span>
                        </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" di bawah jika ingin keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const d = new Date();
        let year = d.getFullYear();
        document.getElementById("year").innerHTML = year;
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="/sb-admin-2/vendor/jquery/jquery.min.js"></script>
    <script src="/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/sb-admin-2/js/sb-admin-2.min.js"></script>

</body>

</html>