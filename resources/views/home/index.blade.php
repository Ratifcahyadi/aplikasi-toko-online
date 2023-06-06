@extends('layouts.home')

@section('title', 'Home | D3-Ecommerce')

@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($sliders as $slider)
            <div class="swiper-slide">   
                <div class="glass-box bg-dark p-2">
                    <h1 class="text-primary mb-2 text-left">{{ $slider->nama_slider }}</h1>
                    <h2 class="text-info mb-2 text-center ">{{ $slider->deskripsi }}</h2>
                </div> 
                <img  src="/uploads/{{ $slider->gambar }}" class="w-100 slider">
            </div>
            @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        },
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
    });
    </script>
<!-- Jumbotron -->
<div class="bg-gradient-linear text-white py-5">
    <div class="container py-5">
    <h1>
        Best products & <br />
        brands in our store
    </h1>
    <p>
        Trendy Products, Factory Prices, Excellent Service
    </p>
    <button type="button" class="btn btn-outline-light">
        Learn more
    </button>
    <button type="button" class="btn btn-light shadow-0 text-primary pt-2 border border-white">
        <span class="pt-1">Purchase now</span>
    </button>
    </div>
</div>
<!-- Jumbotron -->

<section class="sectio-warp promo-banners pb-3 mt-2" style="background: #fff !important">
    <div class="container" >
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-lg-3 mb-3 promo-banner">
                    <a href="/front/#">
                        <div class="card">
                                <img src="/uploads/{{ $category->gambar }}" alt="gamabar kategori" class="w-100 rounded-top">
                            <div class="card-body rounded-bottom">
                                <h2>{{ $category->nama_kategori }}</h2>
                                <span>{{ $category->deskripsi }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

@php
    $subcategories = 
    App\Models\Subcategory::where('id_kategori', $category->id)->get();
@endphp
<div class="container my-2 bg-info p-2">
    <h4 class="text-white">Sub Kategori Produk</h4>
    @foreach ($subcategories as $subcategory)
    <li>
        <a class="text-warning" href="/products/1">{{ $subcategory->nama_subkategori }}</a>
    </li>
    @endforeach
</div>

<!-- Products -->
<div class="container my-5">
    <header class="mb-4">
        <h3>New products</h3>
        </header>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="/uploads/{{ $product->gambar }}" class="card-img-top" style="aspect-ratio: 16 / 9" />
                <div class="card-body d-flex flex-column ">
                    <h5 class="card-title">{{ $product->nama_barang }}</h5>
                    <p class="card-text">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                    <div class="card-footer justify-content-between d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="#!" class="btn bg-gradient-linear text-white border-0 shadow-0 me-1">Add to cart</a>
                    <a href="#!" class="btn btn-warning bg-opacity-favorit border-none px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-white px-1"></i></a>
                    </div>
                </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/1.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column ">
                    <h5 class="card-title">GoPro HERO6 4K Action Camera - Black</h5>
                    <p class="card-text">$790.50</p>
                    <div class="card-footer justify-content-between d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                    </div>
                </div>
                </div>
            </div> --}}
            {{-- <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/2.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Canon camera 20x zoom, Black color EOS 2000</h5>
                    <p class="card-text">$320.00</p>
                    <div class="card-footer justify-content-between d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/3.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Xiaomi Redmi 8 Original Global Version 4GB</h5>
                    <p class="card-text">$120.00</p>
                    <div class="card-footer justify-content-between d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/4.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Apple iPhone 12 Pro 6.1" RAM 6GB 512GB Unlocked</h5>
                    <p class="card-text">$120.00</p>
                    <div class="card-footer justify-content-between d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/5.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Apple Watch Series 1 Sport Case 38mm Black</h5>
                    <p class="card-text">$790.50</p>
                    <div class="card-footer justify-content-between d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/6.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">T-shirts with multiple colors, for men and lady</h5>
                    <p class="card-text">$120.00</p>
                    <div class="card-footer justify-content-between d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/7.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Gaming Headset 32db Blackbuilt in mic</h5>
                    <p class="card-text">$99.50</p>
                    <div class="card-footer justify-content-between d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                    <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">T-shirts with multiple colors, for men and lady</h5>
                    <p class="card-text">$120.00</p>
                    <div class="card-footer justify-content-between d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                    </div>
                </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Products -->

    <!-- Feature -->
    <section class="mt-5" style="background-color: #f5f5f5;">
    <div class="container text-dark pt-3">
        <header class="pt-4 pb-3">
        <h3>Why choose us</h3>
        </header>

        <div class="row mb-4">
        <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-camera-retro fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
                <h6 class="title">Reasonable prices</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
            </figure>
            <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-star fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
                <h6 class="title">Best quality</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
            </figure>
            <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-plane fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
                <h6 class="title">Worldwide shipping</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
            </figure>
            <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-users fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
                <h6 class="title">Customer satisfaction</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
            </figure>
            <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-thumbs-up fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
                <h6 class="title">Happy customers</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
            </figure>
            <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
            <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                <i class="fas fa-box fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
                <h6 class="title">Thousand items</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
            </figcaption>
            </figure>
            <!-- itemside // -->
        </div>
        <!-- col // -->
        </div>
    </div>
    <!-- container end.// -->
    </section>
    <!-- Feature -->

    <!-- Blog -->
    {{-- <section class="mt-5 mb-4">
    <div class="container text-dark">
        <header class="mb-4">
        <h3>Blog posts</h3>
        </header>

        <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <article>
            <a href="#" class="img-fluid">
                <img class="rounded w-100" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/posts/1.webp" style="object-fit: cover;" height="160" />
            </a>
            <div class="mt-2 text-muted small d-block mb-1">
                <span>
                <i class="fa fa-calendar-alt fa-sm"></i>
                23.12.2022
                </span>
                <a href="#"><h6 class="text-dark">How to promote brands</h6></a>
                <p>When you enter into any new area of science, you almost reach</p>
            </div>
            </article>
        </div>
        <!-- col.// -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <article>
            <a href="#" class="img-fluid">
                <img class="rounded w-100" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/posts/2.webp" style="object-fit: cover;" height="160" />
            </a>
            <div class="mt-2 text-muted small d-block mb-1">
                <span>
                <i class="fa fa-calendar-alt fa-sm"></i>
                13.12.2022
                </span>
                <a href="#"><h6 class="text-dark">How we handle shipping</h6></a>
                <p>When you enter into any new area of science, you almost reach</p>
            </div>
            </article>
        </div>
            <!-- col.// -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <article>
                <a href="#" class="img-fluid">
                    <img class="rounded w-100" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/posts/3.webp" style="object-fit: cover;" height="160" />
                </a>
                <div class="mt-2 text-muted small d-block mb-1">
                    <span>
                    <i class="fa fa-calendar-alt fa-sm"></i>
                    25.11.2022
                    </span>
                    <a href="#"><h6 class="text-dark">How to promote brands</h6></a>
                    <p>When you enter into any new area of science, you almost reach</p>
                </div>
                </article>
            </div>
            <!-- col.// -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <article>
                <a href="#" class="img-fluid">
                    <img class="rounded w-100" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/posts/4.webp" style="object-fit: cover;" height="160" />
                </a>
                <div class="mt-2 text-muted small d-block mb-1">
                    <span>
                    <i class="fa fa-calendar-alt fa-sm"></i>
                    03.09.2022
                    </span>
                    <a href="#"><h6 class="text-dark">Success story of sellers</h6></a>
                    <p>When you enter into any new area of science, you almost reach</p>
                </div>
                </article>
            </div>
        </div>
        </div>
    </div>
    </section> --}}
    <!-- Blog -->

    {{-- Tetimoni --}}
    <section class="mt-5 mb-4">
        <h4 class="text-primary text-center">Testimoni</h4>
        <div class="container bg-warning p-5">
            @foreach ($testimonies as $testimony)
            <div class="container">
                <p class="mb-2 text-white">{{ $testimony->deskripsi }}</p>
                <span>{{ $testimony->nama_testimoni }}</span>
            </div>
            @endforeach
        </div>
    </section>
@endsection
@push('swiper')
<script>
        var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        },
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        });
</script>
@endpush