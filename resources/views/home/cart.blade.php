@extends('layouts.home')

@section('title', 'Cart | D3-Ecommerce')

@section('content')
    <style>
        .icon-hover-primary:hover {
            border-color: #3b71ca !important;
            background-color: white !important;
        }

        .icon-hover-primary:hover i {
            color: #3b71ca !important;
        }

        .icon-hover-danger:hover {
            border-color: #dc4c64 !important;
            background-color: white !important;
        }

        .icon-hover-danger:hover i {
            color: #dc4c64 !important;
        }
    </style>
    </header>

    <!-- cart + summary -->
    <section class="bg-light my-5">
        <div class="container">

            <!-- cart -->
            <form class="row form-cart">
                <input type="hidden" name="id_member" value="{{ Auth::guard('webmember')->user()->id }}">
                <div class="col-lg-9 mt-4 mb-4">
                    <div class="card border shadow-0">
                        <div class="m-4">
                            <h4 class="card-title mb-4">Your shopping cart</h4>
                            @foreach ($carts as $cart)
                                <input type="hidden" name="id_produk[]" value="{{ $cart->product->id }}">
                                <input type="hidden" name="jumlah[]" value="{{ $cart->jumlah }}">
                                <input type="hidden" name="size[]" value="{{ $cart->size }}">
                                <input type="hidden" name="color[]" value="{{ $cart->color }}">
                                <input type="hidden" name="total[]" value="{{ $cart->total }}">
                                <div class="row gy-3 mb-4">
                                    <div class="col-lg-5">
                                        <div class="me-lg-5">
                                            <div class="d-flex">
                                                <img src="/uploads/{{ $cart->product->gambar }}"
                                                    class="card-img-top rounded"
                                                    style="width: 96px; height: 96px; background-size: cover;" />
                                                {{-- <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/11.webp"
                                                    class="border rounded me-3" style="width: 96px; height: 96px;" /> --}}
                                                <div class="">
                                                    <a href="#" class="nav-link">{{ $cart->product->nama_barang }}</a>
                                                    {{-- <a href="#" class="nav-link">Winter jacket for men and lady</a> --}}
                                                    {{-- <p class="text-muted ml-3">Yellow, Jeans</p> --}}
                                                    <p class="text-muted ml-3"> <span class="text-dark">Ukuran: </span>
                                                        {{ $cart->size }}</p>
                                                    <p class="text-muted ml-3"> <span class="text-dark">Warna: </span>
                                                        {{ $cart->color }}</p>
                                                    <text class="text-muted ml-3 h6"><span class="text-dark">Harga: Rp
                                                        </span>
                                                        {{ number_format($cart->product->harga, 0, ',', '.') }}</text>
                                                    {{-- <text class="h6">$1156.00</text> <br /> --}}
                                                    {{-- <small class="text-muted ml-3 text-nowrap"> $460.00 / per item </small> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap mr-2">
                                        <div class="form-outline">
                                            {{-- <input id="form1" min="0" name="quantity" value="1"
                                                type="number" class="form-control" /> --}}
                                            <label class="form-label" for="form1">Quantity</label>
                                            <p class="text-muted ml-3"> {{ number_format($cart->jumlah, 0, ',', '.') }}</p>
                                        </div>
                                    </div>

                                    <div class="ml-2">
                                        <p class="text-muted ml-3"> <span class="text-dark h6 font-weight-bold">Total
                                                Biaya:
                                            </span class="h4"> Rp
                                            {{ number_format($cart->total, 0, ',', '.') }}</p>
                                            <a href="/delete_from_cart/{{ $cart->id }}"
                                                class="btn btn-light border text-danger icon-hover-danger rounded-pill">
                                                Remove</a>
                                        {{-- @harga satuan in here --}}
                                    </div>
                                    {{-- <div
                                        class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                                        <div class="float-md-end">
                                            <a href="#" class="btn btn-light border px-2 icon-hover-primary"><i
                                                    class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                                        </div>
                                    </div> --}}
                                </div>
                            @endforeach
                            {{-- 
                            <div class="row gy-3 mb-4">
                                <div class="col-lg-5">
                                    <div class="me-lg-5">
                                        <div class="d-flex">
                                            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/12.webp"
                                                class="border rounded me-3" style="width: 96px; height: 96px;" />
                                            <div class="">
                                                <a href="#" class="nav-link">Mens T-shirt Cotton Base</a>
                                                <p class="text-muted ml-3">Blue, Medium</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap mr-2">
                                    <div class="form-outline">
                                        <input id="form1" min="0" name="quantity" value="1" type="number"
                                            class="form-control" />
                                        <label class="form-label" for="form1">Quantity</label>
                                    </div>
                                </div>

                                <div class="ml-2">
                                    <text class="h6">$44.80</text> <br />
                                    <small class="text-muted ml-3 text-nowrap"> $12.20 / per item </small>
                                </div>
                                <div
                                    class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                                    <div class="float-md-end">
                                        <a href="#!" class="btn btn-light border px-2 icon-hover-primary"><i
                                                class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                                        <a href="#" class="btn btn-light border text-danger icon-hover-danger">
                                            Remove</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row gy-3">
                                <div class="col-lg-5">
                                    <div class="me-lg-5">
                                        <div class="d-flex">
                                            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/13.webp"
                                                class="border rounded me-3" style="width: 96px; height: 96px;" />
                                            <div class="">
                                                <a href="#" class="nav-link">Blazer Suit Dress Jacket for Men</a>
                                                <p class="text-muted ml-3">XL size, Jeans, Blue</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap mr-2">
                                    <div class="form-outline">
                                        <input id="form1" min="0" name="quantity" value="1" type="number"
                                            class="form-control" />
                                        <label class="form-label" for="form1">Quantity</label>
                                    </div>
                                </div>
                                <div class="ml-2">
                                    <text class="h6">$1156.00</text> <br />
                                    <small class="text-muted ml-3 text-nowrap"> $460.00 / per item </small>
                                </div>
                                <div
                                    class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                                    <div class="float-md-end">
                                        <a href="#!" class="btn btn-light border px-2 icon-hover-primary"><i
                                                class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                                        <a href="#" class="btn btn-light border text-danger icon-hover-danger">
                                            Remove</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <div class="border-top pt-4 mx-4 mb-4">
                            <p><i class="fas fa-truck text-muted ml-3 fa-lg"></i> Free Delivery within 1-2 weeks</p>
                            <p class="text-muted ml-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut
                                aliquip
                            </p>
                        </div>
                    </div>
                </div>
                <!-- cart -->
                <!-- summary -->
                <div class="col-lg-3 mt-4 mb-4">
                    <div class="card mb-3 border shadow-0">
                        <div class="card-body">
                            {{-- <form>
                                <div class="form-group">
                                    <label class="form-label">Have coupon?</label>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control border" name=""
                                            placeholder="Coupon code" />
                                        <button class="btn btn-light border">Apply</button>
                                    </div>
                                </div>P
                                
                            </form> --}}
                            {{-- <form> --}}
                            <div class="form-group">
                                {{-- <input type="hidden" name="nama_provinsi" class="nama_provinsi"> --}}
                                {{-- <input type="hidden" name="nama_kota" class="nama_kota"> --}}
                                <label class="form-label">Provinsi</label>
                                <div class="input-group mb-3">
                                    <select type="text" class="form-control border font-italic provinsi" id="provinsi"
                                        name="provinsi" placeholder="Provinsi...">
                                        @foreach ($provinsi->rajaongkir->results as $provinsi)
                                            <option value="{{ $provinsi->province_id }}">{{ $provinsi->province }}
                                            </option>
                                        @endforeach
                                    </select>
                                    {{-- <button class="btn btn-light border">Apply</button> --}}
                                </div>
                                <label class="form-label">Kota</label>
                                <div class="input-group mb-3">
                                    <select type="text" class="form-control border font-italic kota" id="kota"
                                        name="kota" placeholder="Kota...">
                                    </select>
                                    {{-- <button class="btn btn-light border">Apply</button> --}}
                                </div>
                                {{-- <label class="form-label">Detail Alamat</label>
                                    <div class="input-group mb-3">
                                        <input type="text"
                                            class="form-control border text-dark font-italic detail_alamat"
                                            id="detail_alamat" name="detail_alamat" placeholder="Alamat lengkap..." />
                                    </div> --}}
                                <label class="form-label">Berat Barang</label>
                                <div class="input-group mb-3">
                                    <input type="number" pattern="\d+" min="1"
                                        class="form-control border text-dark font-italic berat" id="berat"
                                        name="berat" placeholder="Berat barang..." />
                                </div>
                                <a href="#" name="calc_shipping"
                                    class="btn btn-info text-white w-100 rounded-pill border update-total">Update Totals</a>
                                {{-- </form> --}}
                            </div>
                            <div class="card shadow-0 border">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Total price:</p>
                                        <p class="mb-2 cart-total">Rp {{ number_format($cart_total, 0, ',', '.') }}</p>
                                        {{-- <p class="mb-2">$329.00</p> --}}
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        {{-- <p class="mb-2">Discount:</p> --}}
                                        <p class="mb-2">Shipping Cost:</p>
                                        <p class="mb-2 text-success shipping-cost">0</p>
                                        {{-- <p class="mb-2 text-success">-$60.00</p> --}}
                                    </div>
                                    {{-- <div class="d-flex justify-content-between"> --}}
                                    {{-- <p class="mb-2">TAX:</p> --}}
                                    {{-- <p class="mb-2">0</p> --}}
                                    {{-- <p class="mb-2">$14.00</p> --}}
                                    {{-- </div> --}}
                                    <hr />
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Order Total:</p>
                                        <input type="hidden" name="grand_total" class="grand_total">
                                        <p class="mb-2 fw-bold grand-total">0</p>
                                        {{-- <p class="mb-2">Total price:</p> --}}
                                        {{-- <p class="mb-2 fw-bold">$283.00</p> --}}
                                    </div>

                                    <div class="mt-3">
                                        <a href="#" class="btn btn-success w-100 shadow-0 mb-2 checkout"> Make
                                            Purchase </a>
                                        <a href="/" class="btn btn-light w-100 border mt-2"> Back to shop </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- summary -->
            </form>

        </div>
    </section>

    <!-- cart + summary -->
    {{-- <section>
        <div class="container my-5">
            <header class="mb-4">
                <h3>Recommended items</h3>
            </header>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card px-4 border shadow-0 mb-4 mb-lg-0">
                        <div class="mask px-2" style="height: 50px;">
                            <div class="d-flex justify-content-between">
                                <h6><span class="badge bg-danger pt-1 mt-3 text-white ms-2">New</span></h6>
                                <a href="#"><i class="fas fa-heart text-primary fa-lg float-end pt-3 m-2"></i></a>
                            </div>
                        </div>
                        <a href="#" class="">
                            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/7.webp"
                                class="card-img-top rounded-2" />
                        </a>
                        <div class="card-body d-flex flex-column pt-3 border-top">
                            <a href="#" class="nav-link">Gaming Headset with Mic</a>
                            <div class="price-wrap mb-2">
                                <strong class="">$18.95</strong>
                                <del class="">$24.99</del>
                            </div>
                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card px-4 border shadow-0 mb-4 mb-lg-0">
                        <div class="mask px-2" style="height: 50px;">
                            <a href="#"><i class="fas fa-heart text-primary fa-lg float-end pt-3 m-2"></i></a>
                        </div>
                        <a href="#" class="">
                            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/5.webp"
                                class="card-img-top rounded-2" />
                        </a>
                        <div class="card-body d-flex flex-column pt-3 border-top">
                            <a href="#" class="nav-link">Apple Watch Series 1 Sport </a>
                            <div class="price-wrap mb-2">
                                <strong class="">$120.00</strong>
                            </div>
                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card px-4 border shadow-0">
                        <div class="mask px-2" style="height: 50px;">
                            <a href="#"><i class="fas fa-heart text-primary fa-lg float-end pt-3 m-2"></i></a>
                        </div>
                        <a href="#" class="">
                            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/9.webp"
                                class="card-img-top rounded-2" />
                        </a>
                        <div class="card-body d-flex flex-column pt-3 border-top">
                            <a href="#" class="nav-link">Men's Denim Jeans Shorts</a>
                            <div class="price-wrap mb-2">
                                <strong class="">$80.50</strong>
                            </div>
                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card px-4 border shadow-0">
                        <div class="mask px-2" style="height: 50px;">
                            <a href="#"><i class="fas fa-heart text-primary fa-lg float-end pt-3 m-2"></i></a>
                        </div>
                        <a href="#" class="">
                            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/10.webp"
                                class="card-img-top rounded-2" />
                        </a>
                        <div class="card-body d-flex flex-column pt-3 border-top">
                            <a href="#" class="nav-link">Mens T-shirt Cotton Base Layer Slim fit </a>
                            <div class="price-wrap mb-2">
                                <strong class="">$13.90</strong>
                            </div>
                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Recommended -->

@endsection

@push('js')
    <script>
        $(function() {

            $('.provinsi').change(function() {
                $.ajax({
                    url: '/get_kota/' + $(this).val(),
                    success: function(data) {
                        data = JSON.parse(data)
                        option = ""
                        data.rajaongkir.results.map((kota) => {
                            option +=
                                `<option value=${kota.city_id}>${kota.city_name}</option>`
                        })
                        $('.kota').html(option)
                    }
                });
            });

            $('.update-total').click(function(e) {
                e.preventDefault();
                $.ajax({
                    url: '/get_ongkir/' + $('.kota').val() + '/' + $('.berat').val(),
                    success: function(data) {
                        // data = JSON.parse(data);
                        // grandTotal = parseInt(data.rajaongkir.results[0].costs[0].cost[0].value) + parseInt($('.cart-total').text());
                        // $('.shipping-cost').text(data.rajaongkir.results[0].costs[0].cost[0].value);
                        // $('.grand-total').text(grandTotal);
                        // $('.grand_total').val(grandTotal);

                        // Mengambil data JSON dari respons server
                        data = JSON.parse(data);
                        var shippingCost = parseInt(data.rajaongkir.results[0].costs[0].cost[0]
                            .value);
                        var cartTotal = parseInt($('.cart-total').text().replace(/\D/g, ''));
                        var grandTotal = shippingCost + cartTotal;

                        $('.shipping-cost').text(formatRupiah(shippingCost));
                        $('.grand-total').text(formatRupiah(grandTotal));
                        $('.grand_total').val(grandTotal);

                        function formatRupiah(number) {
                            var formatter = new Intl.NumberFormat('id-ID', {
                                style: 'currency',
                                currency: 'IDR',
                                minimumFractionDigits: 0,
                                maximumFractionDigits: 0
                            });
                            return formatter.format(number);
                        }

                    }
                });
            });

            $('.checkout').click(function(e) {
                e.preventDefault();
                $.ajax({

                    url: '/checkout_orders',
                    method: 'POST',
                    data: $('.form-cart').serialize(),
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                    success: function() {
                        window.location.href = '/checkout';
                    }
                });
            });

            // const API_KEY = '8919288a651ecac9d54c7ae7a58ee580';

            // $.ajax({
            //     url: 'https://api.rajaongkir.com/starter/province',
            //     method: "GET",
            //     header:  {
            //         key: API_KEY
            //     },
            //     success: function(data) {


            //         console.log(data);
            //     }
            // })
        })
    </script>
@endpush
