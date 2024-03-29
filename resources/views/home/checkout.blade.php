@extends('layouts.home')

@section('title', 'Checkout | D3-Ecommerce')

@section('content')
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <form class="row d-flex justify-content-center my-4 checkout ecommerce-checkout" name="checkout" method="POST"
                action="/payments">
                @csrf
                <input type="hidden" name="id_order" value="{{ $orders->id }}">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Cart - 2 items</h5>
                        </div>
                        <div class="card-body">
                            <!-- Single item -->
                            <div class="billing mt-3">
                                <label for="" class="text-primary mb-0">Provinsi</label>
                                <select type="text" class="form-control rounded-pill border font-italic provinsi"
                                    id="provinsi" name="provinsi" placeholder="Provinsi...">
                                    @foreach ($provinsi->rajaongkir->results as $provinsi)
                                        <option value="{{ $provinsi->province_id }}">{{ $provinsi->province }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="billing mt-3">
                                <label for="" class="text-primary mb-0">Kabupaten/Kota</label>
                                <select id="kota" class="form-control font-italic rounded-pill kota"
                                    name="kabupaten">
                                </select>
                            </div>
                            <div class="billing mt-3">
                                <label for="" class="text-primary mb-0">Detail Alamat</label>
                                <textarea type="text" id="" class="form-control font-italic rounded-pill"
                                    name="detail_alamat">
                                </textarea>
                            </div>
                            <div class="billing mt-3">
                                <label for="" class="text-primary mb-0">Atas Nama</label>
                                <input type="text" id=""
                                    class="form-control font-italic rounded-pill" name="atas_nama">
                            </div>
                            <div class="billing mt-3">
                                <label for="" class="text-primary mb-0">No Rekening</label>
                                <input type="text" id=""
                                    class="form-control font-italic rounded-pill" name="no_rekening">
                            </div>
                            <div class="billing mt-3">
                                <label for="" class="text-primary mb-0">Nominal Trasfer</label>
                                <input type="text" id=""
                                    class="form-control font-italic rounded-pill" name="jumlah">
                            </div>

              {{-- <div class="row">
                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                  <!-- Image -->
                  <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
                      class="w-100" alt="Blue Jeans Jacket" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                  </div>
                  <!-- Image -->
                </div>
  
                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                  <!-- Data -->
                  <p><strong>Blue denim shirt</strong></p>
                  <p>Color: blue</p>
                  <p>Size: M</p>
                  <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                    title="Remove item">
                    <i class="fas fa-trash"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
                    title="Move to the wish list">
                    <i class="fas fa-heart"></i>
                  </button>
                  <!-- Data -->
                </div>
  
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                  <!-- Quantity -->
                  <label class="form-label" for="form1">Quantity</label>
                  <div class="d-flex mb-4" style="max-width: 300px">
                    <button class="btn btn-primary px-3 mr-1"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>
  
                    <div class="form-outline">
                      <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                    </div>
                    
                    <button class="btn btn-primary px-3 ml-1 ms-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                  <!-- Quantity -->
  
                  <!-- Price -->
                  <p class="text-start text-md-center">
                    <strong>$17.99</strong>
                  </p>
                  <!-- Price -->
                </div>
              </div> --}}
                            <!-- Single item -->

                            <hr class="my-4" />

                            <!-- Single item -->
                            {{-- <div class="row">
                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                  <!-- Image -->
                  <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp"
                      class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                  </div>
                  <!-- Image -->
                </div>
  
                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                  <!-- Data -->
                  <p><strong>Red hoodie</strong></p>
                  <p>Color: red</p>
                  <p>Size: M</p>
  
                  <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                    title="Remove item">
                    <i class="fas fa-trash"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
                    title="Move to the wish list">
                    <i class="fas fa-heart"></i>
                  </button>
                  <!-- Data -->
                </div>
  
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                  <!-- Quantity -->
                  <label class="form-label" for="form1">Quantity</label>
                  <div class="d-flex mb-4" style="max-width: 300px">
                    <button class="btn btn-primary px-3  mr-2 me-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>
  
                    <div class="form-outline">
                      <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                    </div>
  
                    <button class="btn btn-primary px-3 ml-2 ms-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- Quantity -->
  
                  <!-- Price -->
                  <p class="text-start text-md-center">
                    <strong>$17.99</strong>
                  </p>
                  <!-- Price -->
                </div>
              </div> --}}
                            <!-- Single item -->
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <p><strong>Expected shipping delivery</strong></p>
                            <p class="mb-0">12.10.2020 - 14.10.2020</p>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body">
                            <p><strong>We accept</strong></p>
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                                alt="Visa" />
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                                alt="American Express" />
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                                alt="Mastercard" />
                            {{-- <img class="me-2" width="45px"
                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp"
                alt="PayPal acceptance mark" /> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                {{-- <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Products
                                    <span>$53.98</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Shipping
                                    <span>Gratis</span>
                                </li> --}}
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong>Rp {{ number_format($orders->grand_total, 0, ',', '.') }} </strong></span>
                                    {{-- <span><strong>$53.98</strong></span> --}}
                                </li>
                            </ul>

                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Go to checkout
                            </button>
                            <div class="identify-user mt-2">
                                <label class="font-weight-bold mb-0" for="">Atas Nama: </label>
                                <p>{{ $about->atas_nama }} </p>
                            </div>
                            <div class="identify-user mt-2">
                                <label class="font-weight-bold mb-0" for="">No. Rekening:</label>
                                <p> {{ $about->no_rekening }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
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
        });
    </script>
@endpush
