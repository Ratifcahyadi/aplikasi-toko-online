<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="/sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        html, body, {
            font-family: 'Poppins' sans-serif; !important
        }

        .bg-gradient-primaries {
            background: #a100f6;
            background: -moz-linear-gradient(180deg, #a100f6 0%, #02d2ff%) 100%);
            background: -webkit-linear-gradient(180deg, rgba(161,0,246,1) 0%, rgba(2,210,255,1) 100%);
            background: linear-gradient(180deg, rgba(161,0,246,1) 0%, rgba(2,210,255,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#a100f6",endColorstr="#02d2ff",GradientType=1);
        }

        .bg-gradient-linear {
            background: #a100f6;
            background: -moz-linear-gradient(45deg, #a100f6 0%, #02d2ff%) 100%);
            background: -webkit-linear-gradient(45deg, rgba(161,0,246,1) 0%, rgba(2,210,255,1) 100%);
            background: linear-gradient(45deg, rgba(161,0,246,1) 0%, rgba(2,210,255,1) 100%);
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

        .bg-purple-900 {
            background: #200046;
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
            /* border-radius: 10px; */
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }

        .text-purple-10 {
            color: #9900ff
        }

        .shadow-smooth {
            box-shadow:
            4.5px 4.5px 3.6px rgba(0, 0, 0, 0.01),
            12.5px 12.5px 10px rgba(0, 0, 0, 0.022),
            30.1px 30.1px 24.1px rgba(0, 0, 0, 0.039),
            100px 100px 80px rgba(0, 0, 0, 0.07)
            ;
        }

        .glow-on-hover {
            width: 220px;
            height: 50px;
            border: none;
            outline: none;
            color: #fff;
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 30px;
            box-shadow:
            4.5px 4.5px 3.6px rgba(0, 0, 0, 0.01),
            12.5px 12.5px 10px rgba(0, 0, 0, 0.022),
            30.1px 30.1px 24.1px rgba(0, 0, 0, 0.039),
            100px 100px 80px rgba(0, 0, 0, 0.07)
            ;
        }

        .glow-on-hover:before {
            content: '';
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
            position: absolute;
            top: -2px;
            left:-2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            transition: opacity .3s ease-in-out;
            border-radius: 30px;
        }

        .glow-on-hover:active {
            color: #000
        }

        .glow-on-hover:active:after {
            background: transparent;
        }

        .glow-on-hover:hover:before {
            opacity: 1;
        }

        .glow-on-hover:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: #47006d;
            left: 0;
            top: 0;
            border-radius: 30px;
        }

        @keyframes glowing {
            0% { background-position: 0 0; }
            50% { background-position: 400% 0; }
            100% { background-position: 0 0; }
        }

    </style>
</head>
<body id="page-top">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-light shadow-smooth topbar sticky-top shadow" >

        <!-- Sidebar - Brand -->
        <a class="no-underline sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-dumpster fa-2x text-purple-10"></i>
            </div>
            <h1 class="text-bg font-weight-bold fa-2x">D3-Ecommerce</h1>
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
                    <input type="text" class="placeholder-white form-control border-0 small" style="background: #604bff79" placeholder="Search for..."
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Data Pesanan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
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
                    <h1 class="h3 mb-4 mt-2 text-white bg-gradient-linear p-2 rounded-lg">@yield('title')</h1>
                    @yield('content')
                    {{-- <img src="https://loremflickr.com/320/240" /> --}}
                    {{-- <img src="https://picsum.photos/seed/picsum/200/100" alt=""> --}}
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white mt-2">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto"> 
                        <p>
                        Copyright &copy;
                        <i class="fas fa-dumpster fa-1x text-purple-10 rotate-n-15"></i>
                        <span class="text-bg">D3-Ecommerce </span>  
                        <span id="year"></span>
                        </p>  
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

    @stack('js')

</body>

</html>