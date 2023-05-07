@extends('layouts.home')

@section('title', 'About | D3-Ecommerce')

@section('content')
<style>
.icon-hover:hover {
border-color: #3b71ca !important;
background-color: white !important;
}

.icon-hover:hover i {
color: #3b71ca !important;
}
</style>
{{-- ///// --}}
<!--Main Navigation-->
<header>
    <style>
        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
        height: 100vh;
        }

        .carousel-item:nth-child(1) {
        background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        }
        .carousel-item:nth-child(2) {
        background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        }
        .carousel-item:nth-child(3) {
        background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
        #introCarousel {
            margin-top: -58.59px;
        }
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
            height: 50vh;
        }
        }

        .navbar .nav-link {
        color: #fff !important;
        }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" target="_blank" href="https://mdbootstrap.com/docs/standard/">
            <strong>MDB</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="#intro">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
                target="_blank">Learn Bootstrap 5</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://mdbootstrap.com/docs/standard/" target="_blank">Download MDB UI KIT</a>
            </li>
            </ul>

            <ul class="navbar-nav d-flex flex-row">
            <!-- Icons -->
            <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
                target="_blank">
                <i class="fab fa-youtube"></i>
                </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
                <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
                <i class="fab fa-github"></i>
                </a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Carousel wrapper -->
    {{-- <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
        </ol>

        <!-- Inner -->
        <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center">
                <h1 class="mb-3">Learn Bootstrap 5 with MDB</h1>
                <h5 class="mb-4">Best & free guide of responsive web design</h5>
                <a
                    class="btn btn-outline-light btn-lg m-2"
                    href="https://www.youtube.com/watch?v=c9B4TPnak1A"
                    role="button"
                    rel="nofollow"
                    target="_blank"
                    >Start tutorial</a
                >
                <a
                    class="btn btn-outline-light btn-lg m-2"
                    href="https://mdbootstrap.com/docs/standard/"
                    target="_blank"
                    role="button"
                    >Download MDB UI KIT</a
                >
                </div>
            </div>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center">
                <h2>You can place here any content</h2>
                </div>
            </div>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <div
            class="mask"
            style="
                background: linear-gradient(
                45deg,
                rgba(29, 236, 197, 0.7),
                rgba(91, 14, 214, 0.7) 100%
                );
            "
            >
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center">
                <h2>And cover it with any mask</h2>
                <a
                    class="btn btn-outline-light btn-lg m-2"
                    href="https://mdbootstrap.com/docs/standard/content-styles/masks/"
                    target="_blank"
                    role="button"
                    >Learn about masks</a
                >
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div> --}}
    <!-- Carousel wrapper -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
    <div class="container">
        <!--Section: Content-->
        <section>
        <div class="row">
            <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
                <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            </div>

            <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Facilis consequatur eligendi</strong></h4>
            <p class="text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
                sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
            </p>
            <p><strong>Doloremque vero ex debitis veritatis?</strong></p>
            <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
                nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
                alias, unde optio accusantium soluta, iusto molestiae adipisci et?
            </p>
            </div>
        </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="text-center">
        <h4 class="mb-5"><strong>Facilis consequatur eligendi</strong></h4>

        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img
                    src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
                    class="img-fluid"
                />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
                </div>
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img
                    src="https://mdbootstrap.com/img/new/standard/nature/023.jpg"
                    class="img-fluid"
                />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
                </div>
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img
                    src="https://mdbootstrap.com/img/new/standard/nature/111.jpg"
                    class="img-fluid"
                />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
                </div>
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
                </div>
            </div>
            </div>
        </div>
        </section>
        <!--Section: Content-->

    </footer>
    <!--Footer-->

{{-- ///// --}}

<!-- Heading -->
<div class="bg-primary mb-4">
<div class="container py-4">
    <h3 class="text-white mt-2">Men's wear</h3>
    <!-- Breadcrumb -->
    <nav class="d-flex mb-2">
    <h6 class="mb-0">
        <a href="" class="text-white-50">Home</a>
        <span class="text-white-50 mx-2"> > </span>
        <a href="" class="text-white-50">Library</a>
        <span class="text-white-50 mx-2"> > </span>
        <a href="" class="text-white"><u>Data</u></a>
    </h6>
    </nav>
    <!-- Breadcrumb -->
</div>
</div>
<!-- Heading -->
</header>

<!-- sidebar + content -->
<section class="">
<div class="container">
<div class="row">
    <!-- sidebar -->
    <div class="col-lg-3">
    <!-- Toggle button -->
    <button
            class="btn btn-outline-secondary mb-3 w-100 d-lg-none"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
        <span>Show filter</span>
    </button>
    <!-- Collapsible wrapper -->
    <div class="collapse card d-lg-block mb-5" id="navbarSupportedContent">
        <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
            <button
                    class="accordion-button text-dark bg-light"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#panelsStayOpen-collapseOne"
                    aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne"
                    >
                Related items
            </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
            <div class="accordion-body">
                <ul class="list-unstyled">
                <li><a href="#" class="text-dark">Electronics </a></li>
                <li><a href="#" class="text-dark">Home items </a></li>
                <li><a href="#" class="text-dark">Books, Magazines </a></li>
                <li><a href="#" class="text-dark">Men's clothing </a></li>
                <li><a href="#" class="text-dark">Interiors items </a></li>
                <li><a href="#" class="text-dark">Underwears </a></li>
                <li><a href="#" class="text-dark">Shoes for men </a></li>
                <li><a href="#" class="text-dark">Accessories </a></li>
                </ul>
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
            <button
                    class="accordion-button text-dark bg-light"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#panelsStayOpen-collapseTwo"
                    aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseTwo"
                    >
                Brands
            </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
            <div class="accordion-body">
                <div>
                <!-- Checked checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1" checked />
                    <label class="form-check-label" for="flexCheckChecked1">Mercedes</label>
                    <span class="badge badge-secondary float-end">120</span>
                </div>
                <!-- Checked checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked />
                    <label class="form-check-label" for="flexCheckChecked2">Toyota</label>
                    <span class="badge badge-secondary float-end">15</span>
                </div>
                <!-- Checked checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3" checked />
                    <label class="form-check-label" for="flexCheckChecked3">Mitsubishi</label>
                    <span class="badge badge-secondary float-end">35</span>
                </div>
                <!-- Checked checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4" checked />
                    <label class="form-check-label" for="flexCheckChecked4">Nissan</label>
                    <span class="badge badge-secondary float-end">89</span>
                </div>
                <!-- Default checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">Honda</label>
                    <span class="badge badge-secondary float-end">30</span>
                </div>
                <!-- Default checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">Suzuki</label>
                    <span class="badge badge-secondary float-end">30</span>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
            <button
                    class="accordion-button text-dark bg-light"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#panelsStayOpen-collapseThree"
                    aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree"
                    >
                Price
            </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
            <div class="accordion-body">
                <div class="range">
                <input type="range" class="form-range" id="customRange1" />
                </div>
                <div class="row mb-3">
                <div class="col-6">
                    <p class="mb-0">
                    Min
                    </p>
                    <div class="form-outline">
                    <input type="number" id="typeNumber" class="form-control" />
                    <label class="form-label" for="typeNumber">$0</label>
                    </div>
                </div>
                <div class="col-6">
                    <p class="mb-0">
                    Max
                    </p>
                    <div class="form-outline">
                    <input type="number" id="typeNumber" class="form-control" />
                    <label class="form-label" for="typeNumber">$1,0000</label>
                    </div>
                </div>
                </div>
                <button type="button" class="btn btn-white w-100 border border-secondary">apply</button>
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
            <button
                    class="accordion-button text-dark bg-light"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#panelsStayOpen-collapseFour"
                    aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFour"
                    >
                Size
            </button>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingThree">
            <div class="accordion-body">
                <input type="checkbox" class="btn-check border justify-content-center" id="btn-check1" checked autocomplete="off" />
                <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check1">XS</label>
                <input type="checkbox" class="btn-check border justify-content-center" id="btn-check2" checked autocomplete="off" />
                <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check2">SM</label>
                <input type="checkbox" class="btn-check border justify-content-center" id="btn-check3" checked autocomplete="off" />
                <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check3">LG</label>
                <input type="checkbox" class="btn-check border justify-content-center" id="btn-check4" checked autocomplete="off" />
                <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check4">XXL</label>
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
            <button
                    class="accordion-button text-dark bg-light"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#panelsStayOpen-collapseFive"
                    aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFive"
                    >
                Ratings
            </button>
            </h2>
            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingThree">
            <div class="accordion-body">
                <!-- Default checkbox -->
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                <label class="form-check-label" for="flexCheckDefault">
                    <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                </label>
                </div>
                <!-- Default checkbox -->
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                <label class="form-check-label" for="flexCheckDefault">
                    <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-secondary"></i>
                </label>
                </div>
                <!-- Default checkbox -->
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                <label class="form-check-label" for="flexCheckDefault">
                    <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-secondary"></i>
                    <i class="fas fa-star text-secondary"></i>
                </label>
                </div>
                <!-- Default checkbox -->
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                <label class="form-check-label" for="flexCheckDefault">
                    <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-secondary"></i><i class="fas fa-star text-secondary"></i>
                    <i class="fas fa-star text-secondary"></i>
                </label>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- sidebar -->
    <!-- content -->
    <div class="col-lg-9">
    <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
        <strong class="d-block py-2">32 Items found </strong>
        <div class="ms-auto">
        <select class="form-select d-inline-block w-auto border pt-1">
            <option value="0">Best match</option>
            <option value="1">Recommended</option>
            <option value="2">High rated</option>
            <option value="3">Randomly</option>
        </select>
        <div class="btn-group shadow-0 border">
            <a href="#" class="btn btn-light" title="List view">
            <i class="fa fa-bars fa-lg"></i>
            </a>
            <a href="#" class="btn btn-light active" title="Grid view">
            <i class="fa fa-th fa-lg"></i>
            </a>
        </div>
        </div>
    </header>

    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/10.webp" class="card-img-top" />
            <div class="card-body d-flex flex-column">
            <div class="d-flex flex-row">
                <h5 class="mb-1 me-1">$34,50</h5>
                <span class="text-danger"><s>$49.99</s></span>
            </div>
            <p class="card-text">T-shirts with multiple colors, for men and lady</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/11.webp" class="card-img-top" />
            <div class="card-body d-flex flex-column">
            <h5 class="card-title">$120.00</h5>
            <p class="card-text">Winter Jacket for Men and Women, All sizes</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/12.webp" class="card-img-top" />
            <div class="card-body d-flex flex-column">
            <h5 class="card-title">$120.00</h5>
            <p class="card-text">T-shirts with multiple colors, for men and lady</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/13.webp" class="card-img-top" style="aspect-ratio: 1 / 1"/>
            <div class="card-body d-flex flex-column">
            <h5 class="card-title">$120.00</h5>
            <p class="card-text">Blazer Suit Dress Jacket for Men, Blue color</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/14.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
            <h5 class="card-title">$510.00</h5>
            <p class="card-text">Slim sleeve wallet Italian leather - multiple colors</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/10.webp" class="card-img-top" />
            <div class="card-body d-flex flex-column">
            <h5 class="card-title">$79.99</h5>
            <p class="card-text">T-shirts with multiple colors, for men and lady</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/11.webp" class="card-img-top" />
            <div class="card-body d-flex flex-column">
            <h5 class="card-title">$120.00</h5>
            <p class="card-text">Winter Jacket for Men and Women, All sizes</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/12.webp" class="card-img-top" />
            <div class="card-body d-flex flex-column">
            <h5 class="card-title">$120.00</h5>
            <p class="card-text">T-shirts with multiple colors, for men and lady</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/9.webp" class="card-img-top" />
            <div class="card-body d-flex flex-column">
            <h5 class="card-title">$43.50</h5>
            <p class="card-text">Summer New Men's Denim Jeans Shorts</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <hr />

    <!-- Pagination -->
    <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
        <ul class="pagination">
        <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
        </ul>
    </nav>
    <!-- Pagination -->
    </div>
</div>
</div>            
</section>
<!-- sidebar + content -->

@endsection
