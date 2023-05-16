
  <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
            <!-- Link Swiper's CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="/sb-admin-2/scss/sb-admin-2.css" />
        <!-- Custom fonts for this template-->
        <link href="/sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    </head>
    <body>
        <!--Main Navigation-->

    <!-- Jumbotron -->
    <div class="p-3 text-center bg-light border-bottom sticky-top">
        <div class="container-fluid">
        <nav class="navbar navbar-expand navbar-light justify-content-between">
            <div class="row">
                <!-- Sidebar - Brand -->
            <a class="no-underline sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="text-mobile-icon fa-2x fas fa-dumpster text-md text-purple-10"></i>
                </div>
                <h1 class="text-mobile text-bg font-weight-bold fa-2x">D3-Ecommerce</h1>
            </a>
            </div>
            <!-- Center elements -->
            {{-- <div class="order-lg-last"> --}}
            <div class="row">
            <div class="d-flex float-end">
                <a href="/login_member" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center mr-2" target="_blank"> <i class="fas fa-user-alt m-1 me-md-2"></i><p class="d-none d-md-block mb-0">Login</p> </a>
                <a href="/checkout" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center mr-2" target="_blank"> <i class="fas fa-heart m-1 me-md-2"></i><p class="d-none d-md-block mb-0">Wishlist</p> </a>
                <a href="/cart" class="border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-shopping-cart m-1 me-md-2"></i><p class="d-none d-md-block mb-0">My cart</p> </a>
                {{-- <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-shopping-cart m-1 me-md-2"></i><p class="d-none d-md-block mb-0">My cart</p> </a> --}}
            </div>
            </div>
            <!-- Center elements -->
        </nav>
        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-light rounded justify-content-between navbar-responsive" style="background-color: #e9e3fd;">
            <!-- Container wrapper -->
            <!-- Toggle button -->
            {{-- <button
            class="navbar-toggler border py-2 text-dark"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarLeftAlignExample"
            aria-controls="navbarLeftAlignExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <i class="fas fa-bars"></i>
            </button> --}}
            
            
            <!-- Collapsible wrapper -->
            <div class="right " id="navbar">
                <!-- Left links -->
                <ul class="navbar-responsive navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark" href="/products">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/faq">F.A.Q</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/about">About</a>
                </li>
                <!-- Navbar dropdown -->
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    Others
                    </a> --}}
                    <!-- Dropdown menu -->
                    {{-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="#">Action</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                    </ul> --}}
                </li>
                    
                </ul>
                <!-- Left links -->
            </div>
            <div class="left">
                <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            
            <!-- Container wrapper -->
        </nav>
        
        <!-- Navbar -->
        </div>
    </div>
    <!-- Jumbotron -->



    <div class="content-wrapper">
    @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-muted mt-3" style="background-color: #f5f5f5;">
        <!-- Section: Links  -->
        <section class="">
        <div class="container text-center text-md-start pt-4 pb-4">
            <!-- Grid row -->
            <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-12 col-lg-3 col-sm-12 mb-2">
                <!-- Content -->
            <div class="copyright text-center my-auto"> 
                <p>
                Copyright &copy;
                <i class="fas fa-dumpster fa-1x text-purple-10 rotate-n-15"></i>
                <span class="text-bg">D3-Ecommerce </span>  
                <span id="year"></span>
                </p>  
            </div>
        </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-6 col-sm-4 col-lg-2">
                <!-- Links -->
                <h6 class="text-uppercase text-dark fw-bold mb-2">
                Store
                </h6>
                <ul class="list-unstyled mb-4">
                <li><a class="text-muted" href="#">About us</a></li>
                <li><a class="text-muted" href="#">Find store</a></li>
                <li><a class="text-muted" href="#">Categories</a></li>
                <li><a class="text-muted" href="#">Blogs</a></li>
                </ul>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-6 col-sm-4 col-lg-2">
                <!-- Links -->
                <h6 class="text-uppercase text-dark fw-bold mb-2">
                Information
                </h6>
                <ul class="list-unstyled mb-4">
                <li><a class="text-muted" href="#">Help center</a></li>
                <li><a class="text-muted" href="#">Money refund</a></li>
                <li><a class="text-muted" href="#">Shipping info</a></li>
                <li><a class="text-muted" href="#">Refunds</a></li>
                </ul>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-6 col-sm-4 col-lg-2">
                <!-- Links -->
                <h6 class="text-uppercase text-dark fw-bold mb-2">
                Support
                </h6>
                <ul class="list-unstyled mb-4">
                <li><a class="text-muted" href="#">Help center</a></li>
                <li><a class="text-muted" href="#">Documents</a></li>
                <li><a class="text-muted" href="#">Account restore</a></li>
                <li><a class="text-muted" href="#">My orders</a></li>
                </ul>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-12 col-sm-12 col-lg-3">
                <!-- Links -->
                <h6 class="text-uppercase text-dark fw-bold mb-2">Newsletter</h6>
                <p class="text-muted">Stay in touch with latest updates about our products and offers</p>
                <div class="input-group mb-3">
                <input type="email" class="form-control border" placeholder="Email" aria-label="Email" aria-describedby="button-addon2" />
                <button class="btn btn-info rounded-right border shadow-0" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                    Join
                </button>
                </div>
            </div>
            <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        </section>
        <!-- Section: Links  -->

        <div class="">
        <div class="container">
            <div class="d-flex justify-content-between py-4 border-top">
            <!--- payment --->
            <div>
                <i class="fab fa-lg fa-cc-visa text-dark"></i>
                <i class="fab fa-lg fa-cc-amex text-dark"></i>
                <i class="fab fa-lg fa-cc-mastercard text-dark"></i>
                <i class="fab fa-lg fa-cc-paypal text-dark"></i>
            </div>
            <!--- payment --->

            <!--- language selector --->
            <div class="dropdown dropup">
                <a class="dropdown-toggle text-dark" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> <i class="flag-united-kingdom flag m-0 me-1"></i>English </a>

                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Dropdown">
                <li>
                    <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English <i class="fa fa-check text-success ms-2"></i></a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                    <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
                </li>
                </ul>
            </div>
            <!--- language selector --->
            </div>
        </div>
        </div>
    </footer>
    <!-- Footer -->
        @stack('swiper')
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <!-- Bootstrap core JavaScript-->
        <script src="/sb-admin-2/vendor/jquery/jquery.min.js"></script>
        <script src="/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="/sb-admin-2/js/sb-admin-2.min.js"></script>
    </body>
    </html>


