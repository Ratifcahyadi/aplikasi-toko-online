@extends('layouts.home')

@section('title', 'Products | D3-Ecommerce')

@section('content')
    <style>
        .icon-hover:hover {
            border-color: #3b71ca !important;
            background-color: white !important;
            color: #3b71ca !important;
        }

        .icon-hover:hover i {
            color: #3b71ca !important;
        }
    </style>
    </header>
    <section class="py-5">
        <div class="container">
            <div class="row gx-5">
                {{-- <i class="fa fa-angle-right drop-down-trigger"></i> --}}
                @php
                    $categories = App\Models\Category::all();
                @endphp
                @foreach ($categories as $category)
                    <div class="col-md-3 megamenu-item">
                        <div class="menu-list">
                            <li>
                                <span>{{ $category->nama_kategori }}</span>
                            </li>
                            @php
                                $subcategories = App\Models\Subcategory::where('id_kategori', $category->id)->get();
                            @endphp
                            @foreach ($subcategories as $subcategory)
                                <li>
                                    <a href="/products/{{ $subcategory->id }}">{{ $subcategory->nama_subkategori }}</a>
                                </li>
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- content -->
    <section class="py-5">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">Home<a href="/"></a></li>
                <li class="breadcrumb-item">{{ $product->subcategory->nama_subkategori }}<a
                        href="/products/{{ $product->id_subcategory }}"> </a></li>
                <li class="breadcrumb-item active">
                    Products Information
                </li>
            </ul>
            <div class="row gx-5">
                <aside class="col-lg-6">
                    <div class="border rounded-4 mb-3 d-flex justify-content-center">
                        <img src="/uploads/{{ $product->gambar }}" class="card-img-top rounded-5"
                            style="aspect-ratio: 16 / 9" />
                        {{-- <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image"
                            href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp">
                            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit"
                                src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp" />
                        </a> --}}
                    </div>
                    {{-- <div class="d-flex justify-content-center mb-3">
                        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                            href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big1.webp"
                            class="item-thumb">
                            <img width="60" height="60" class="rounded-2"
                                src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big1.webp" />
                        </a>
                        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                            href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big2.webp"
                            class="item-thumb">
                            <img width="60" height="60" class="rounded-2"
                                src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big2.webp" />
                        </a>
                        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                            href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big3.webp"
                            class="item-thumb">
                            <img width="60" height="60" class="rounded-2"
                                src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big3.webp" />
                        </a>
                        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                            href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big4.webp"
                            class="item-thumb">
                            <img width="60" height="60" class="rounded-2"
                                src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big4.webp" />
                        </a>
                        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                            href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp"
                            class="item-thumb">
                            <img width="60" height="60" class="rounded-2"
                                src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp" />
                        </a>
                    </div> --}}
                    <!-- thumbs-wrap.// -->
                    <!-- gallery-wrap .end// -->
                </aside>

                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                            {{ $product->nama_barang }}
                            {{-- Quality Men's Hoodie for Winter, Men's Fashion <br />
                            Casual Hoodie --}}
                        </h4>
                        <div class="d-flex flex-row my-3">
                            <div class="text-warning mb-1 me-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1 mr-2">
                                    4.5
                                </span>
                            </div>
                            <span class="text-muted mr-2"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
                            <span class="text-success ms-2">In stock</span>
                        </div>

                        <div class="mb-3">
                            {{-- <span class="h5">$75.00</span>
                            <span class="text-muted">/per box</span> --}}
                            <span class="h5">Rp {{ number_format($product->harga, 0, ',', '.') }} </span>
                        </div>

                        <p>
                            {{ $product->deskripsi }}
                            {{-- Modern look and quality demo item is a streetwear-inspired collection that continues to break
                            away from the conventions of mainstream fashion. Made in Italy, these black and brown clothing
                            low-top shirts for
                            men. --}}
                        </p>

                        <div class="row">
                            @php
                                $colours = explode(',', $product->warna);
                            @endphp
                            <dt class="col-3">
                                <label class="mb-2">Color</label>
                            </dt>
                            <dd class="col-9">
                                @foreach ($colours as $color)
                                    <div class="mr-2">
                                        <input type="radio" name="color" id="{{ $color }}"
                                            value="{{ $color }}" class="color">
                                        <label for="{{ $color }}"> {{ $color }} </label>
                                    </div>
                                @endforeach
                            </dd>


                            <dt class="col-3">SKU</dt>
                            <dd class="col-9">{{ $product->sku }}</dd>

                            <dt class="col-3">Category</dt>
                            <dd class="col-9">{{ $product->category->nama_kategori }} </dd>

                            <dt class="col-3">Tags</dt>
                            <dd class="col-9">{{ $product->tags }}</dd>
                            {{-- <dt class="col-3">Type:</dt>
                            <dd class="col-9">Regular</dd>
                            
                            <dt class="col-3">Color</dt>
                            <dd class="col-9">Brown</dd>

                            <dt class="col-3">Material</dt>
                            <dd class="col-9">Cotton, Jeans </dd>
                            
                            <dt class="col-3">Brand</dt>
                            <dd class="col-9">Reebook</dd> --}}
                        </div>

                        <hr />

                        <div class="row mb-4">
                            <div class="col-md-4 col-6">
                                @php
                                    $sizes = explode(',', $product->ukuran);
                                @endphp
                                <label class="mb-2">Size</label>
                                <select id="sizeDropdown" class="size form-select border border-secondary form-control" style="height: 35px;">
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size }}">{{ $size }}</option>
                                    @endforeach
                                </select>
                                
                                    {{-- <option>Medium</option>
                            <option>Large</option> --}}
                            </div>
                            <!-- col.// -->
                            <div class="col-md-4 col-6 mb-3">
                                <label class="mb-2 d-block">Quantity</label>
                                <!-- Quantity -->
                                <div class="d-flex mb-4" style="max-width: 300px">
                                    <button class="btn btn-primary px-3  mr-2 me-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <div class="form-outline">
                                        <input id="form1" min="1" name="jumlah" value="{{ $product->jumlah }}"
                                            type="number" class="jumlah form-control" />
                                    </div>

                                    <button class="btn btn-primary px-3 ml-2 ms-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{-- <a href="#" class="btn btn-warning shadow-0"> Buy now </a> --}}
                        <a href="" class="btn btn-primary shadow-0 add-to-cart bg-gradient"> <i
                                class="me-1 fa fa-shopping-basket"></i>
                            Add to cart </a>
                        {{-- <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i
                                class="me-1 fa fa-heart fa-lg"></i> Save </a> --}}
                    </div>
                </main>
            </div>
        </div>
    </section>
    <!-- content -->

    {{-- <section class="bg-light border-top py-4">
        <div class="container">
            <div class="row gx-4">
                <div class="col-lg-8 mb-4">
                    <div class="border rounded-2 px-3 py-2 bg-white">
                        <!-- Pills navs -->
                        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                            <li class="nav-item d-flex" role="presentation">
                                <a class="nav-link d-flex align-items-center justify-content-center w-100 active"
                                    id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab"
                                    aria-controls="ex1-pills-1" aria-selected="true">Specification</a>
                            </li>
                            <li class="nav-item d-flex" role="presentation">
                                <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-2"
                                    data-mdb-toggle="pill" href="#ex1-pills-2" role="tab"
                                    aria-controls="ex1-pills-2" aria-selected="false">Warranty info</a>
                            </li>
                            <li class="nav-item d-flex" role="presentation">
                                <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-3"
                                    data-mdb-toggle="pill" href="#ex1-pills-3" role="tab"
                                    aria-controls="ex1-pills-3" aria-selected="false">Shipping info</a>
                            </li>
                            <li class="nav-item d-flex" role="presentation">
                                <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-4"
                                    data-mdb-toggle="pill" href="#ex1-pills-4" role="tab"
                                    aria-controls="ex1-pills-4" aria-selected="false">Seller profile</a>
                            </li>
                        </ul>
                        <!-- Pills navs -->

                        <!-- Pills content -->
                        <div class="tab-content" id="ex1-content">
                            <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel"
                                aria-labelledby="ex1-tab-1">
                                <p>
                                    With supporting text below as a natural lead-in to additional content. Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut
                                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla
                                    pariatur.
                                </p>
                                <div class="row mb-2">
                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li><i class="fas fa-check text-success me-2"></i>Some great feature name here
                                            </li>
                                            <li><i class="fas fa-check text-success me-2"></i>Lorem ipsum dolor sit amet,
                                                consectetur</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Duis aute irure dolor in
                                                reprehenderit</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Optical heart sensor</li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-6 mb-0">
                                        <ul class="list-unstyled">
                                            <li><i class="fas fa-check text-success me-2"></i>Easy fast and ver good</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Some great feature name here
                                            </li>
                                            <li><i class="fas fa-check text-success me-2"></i>Modern style and design</li>
                                        </ul>
                                    </div>
                                </div>
                                <table class="table border mt-3 mb-2">
                                    <tr>
                                        <th class="py-2">Display:</th>
                                        <td class="py-2">13.3-inch LED-backlit display with IPS</td>
                                    </tr>
                                    <tr>
                                        <th class="py-2">Processor capacity:</th>
                                        <td class="py-2">2.3GHz dual-core Intel Core i5</td>
                                    </tr>
                                    <tr>
                                        <th class="py-2">Camera quality:</th>
                                        <td class="py-2">720p FaceTime HD camera</td>
                                    </tr>
                                    <tr>
                                        <th class="py-2">Memory</th>
                                        <td class="py-2">8 GB RAM or 16 GB RAM</td>
                                    </tr>
                                    <tr>
                                        <th class="py-2">Graphics</th>
                                        <td class="py-2">Intel Iris Plus Graphics 640</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade mb-2" id="ex1-pills-2" role="tabpanel"
                                aria-labelledby="ex1-tab-2">
                                Tab content or sample information now <br />
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                sunt in culpa qui
                                officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            </div>
                            <div class="tab-pane fade mb-2" id="ex1-pills-3" role="tabpanel"
                                aria-labelledby="ex1-tab-3">
                                Another tab content or sample information now <br />
                                Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt
                                mollit anim id est laborum.
                            </div>
                            <div class="tab-pane fade mb-2" id="ex1-pills-4" role="tabpanel"
                                aria-labelledby="ex1-tab-4">
                                Some other tab content or sample information now <br />
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                sunt in culpa qui
                                officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                        <!-- Pills content -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="px-0 border rounded-2 shadow-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Similar items</h5>
                                <div class="d-flex mb-3">
                                    <a href="product/1" class="me-3">
                                        <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp"
                                            style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                    </a>
                                    <div class="info">
                                        <a href="product/1" class="nav-link mb-1">
                                            Rucksack Backpack Large <br />
                                            Line Mounts
                                        </a>
                                        <strong class="ml-3 text-dark"> $38.90</strong>
                                    </div>
                                </div>

                                <div class="d-flex mb-3">
                                    <a href="#" class="me-3">
                                        <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/9.webp"
                                            style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                    </a>
                                    <div class="info">
                                        <a href="#" class="nav-link mb-1">
                                            Summer New Men's Denim <br />
                                            Jeans Shorts
                                        </a>
                                        <strong class="ml-3 text-dark"> $29.50</strong>
                                    </div>
                                </div>

                                <div class="d-flex mb-3">
                                    <a href="#" class="me-3">
                                        <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/10.webp"
                                            style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                    </a>
                                    <div class="info">
                                        <a href="#" class="nav-link mb-1"> T-shirts with multiple colors, for men
                                            and lady </a>
                                        <strong class="ml-3 text-dark"> $120.00</strong>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <a href="#" class="me-3">
                                        <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/11.webp"
                                            style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                    </a>
                                    <div class="info">
                                        <a href="#" class="nav-link mb-1"> Blazer Suit Dress Jacket for Men, Blue
                                            color </a>
                                        <strong class="ml-3 text-dark"> $339.90</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection


@push('js')
    <script>
        $(function() {
            $('.add-to-cart').click(function(e) {
                e.preventDefault();

                // Dapatkan nilai-nilai yang diperlukan dari elemen-elemen HTML
                var id_member = {{ Auth::guard('webmember')->user()->id }};
                var id_barang = {{ $product->id }};
                var jumlah = $('.jumlah').val();
                var size = $('.size').val();
                var color = $('.color').val();
                var total = {{ $product->harga }} * jumlah;
                var is_checkout = 0;

                // Buat objek data yang akan dikirim dalam permintaan Ajax
                var requestData = {
                    id_barang: id_barang,
                    id_member: id_member,
                    jumlah: jumlah,
                    size: size,
                    color: color,
                    total: total,
                    is_checkout: is_checkout,
                    _token: "{{ csrf_token() }}"
                };

                // Lakukan permintaan Ajax untuk menambahkan ke keranjang
                $.ajax({
                    url: '/add_to_cart',
                    method: "POST",
                    data: requestData,
                    success: function(data) {
                        // Berhasil menambahkan ke keranjang, pindah ke halaman keranjang
                        window.location.href = '/cart';
                    },
                    error: function(xhr, status, error) {
                        // Tangani kesalahan jika terjadi
                        console.error(error);
                    }
                });

            });
        });
    </script>
@endpush
