@extends('layouts.home')

@section('title', 'Product | D3-Ecommerce')

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

        <div class="row justify-content-center mb-3">
          <div class="col-md-12">
            <div class="card shadow-0 border rounded-3">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                    <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                      <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="w-100" />
                      <a href="#!">
                        <div class="hover-overlay">
                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-5 col-sm-7">
                    <h5>Rucksack Backpack Jeans</h5>
                    <div class="d-flex flex-row">
                      <div class="text-warning mb-1 me-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="ms-1">
                          4.5
                        </span>
                      </div>
                      <span class="text-muted">154 orders</span>
                    </div>

                    <p class="text mb-4 mb-md-0">
                      Short description about the product goes here, for ex its features. Lorem ipsum dolor sit amet with hapti you enter into any new area of science, you almost lorem ipsum is great text
                      consectetur adipisicing
                    </p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-5">
                    <div class="d-flex flex-row align-items-center mb-1">
                      <h4 class="mb-1 me-1">$34,50</h4>
                      <span class="text-danger"><s>$49.99</s></span>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="mt-4">
                      <button class="btn btn-primary shadow-0" type="button">Buy this</button>
                      <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg px-1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center mb-3">
          <div class="col-md-12">
            <div class="card shadow-0 border rounded-3">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                    <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                      <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/9.webp" class="w-100" />
                      <a href="#!">
                        <div class="hover-overlay">
                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-5 col-sm-7">
                    <h5>Men's Denim Jeans Shorts</h5>
                    <div class="d-flex flex-row">
                      <div class="text-warning mb-1 me-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="ms-1">
                          3
                        </span>
                      </div>
                      <span class="text-muted">73 orders</span>
                    </div>

                    <p class="text mb-4 mb-md-0">
                      Re-engineered Digital Crown with hapti Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua tempor incididunt ut
                      labore et dolore magna [...]
                    </p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-5">
                    <div class="d-flex flex-row align-items-center mb-1">
                      <h4 class="mb-1 me-1">$34,50</h4>
                      <span class="text-danger"><s>$49.99</s></span>
                    </div>
                    <h6 class="text-warning">Paid shipping</h6>
                    <div class="mt-4">
                      <button class="btn btn-primary shadow-0" type="button">Buy this</button>
                      <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg px-1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center mb-3">
          <div class="col-md-12">
            <div class="card shadow-0 border rounded-3">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                    <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                      <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/10.webp" class="w-100" />
                      <a href="#!">
                        <div class="hover-overlay">
                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-5 col-sm-7">
                    <h5>T-shirt for Men Blue Cotton Base</h5>
                    <div class="d-flex flex-row">
                      <div class="text-warning mb-1 me-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <span class="ms-1">
                          3.5
                        </span>
                      </div>
                      <span class="text-muted">910 orders</span>
                    </div>

                    <p class="text mb-4 mb-md-0">
                      Short description about the product goes here, for ex its features. Lorem ipsum dolor sit amet with hapti you enter into any new area of science, you almost lorem ipsum is great text
                      consectetur adipisicing
                    </p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-5">
                    <div class="d-flex flex-row align-items-center mb-1">
                      <h4 class="mb-1 me-1">$99,50</h4>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="mt-4">
                      <button class="btn btn-primary shadow-0" type="button">Buy this</button>
                      <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg px-1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center mb-3">
          <div class="col-md-12">
            <div class="card shadow-0 border rounded-3">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                    <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                      <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/11.webp" class="w-100" />
                      <a href="#!">
                        <div class="hover-overlay">
                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-5 col-sm-7">
                    <h5>Winter Jacket for Men and Women</h5>
                    <div class="d-flex flex-row">
                      <div class="text-warning mb-1 me-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="ms-1">
                          4.5
                        </span>
                      </div>
                      <span class="text-muted">154 orders</span>
                    </div>

                    <p class="text mb-4 mb-md-0">
                      Short description about the product goes here, for ex its features. Lorem ipsum dolor sit amet with hapti you enter into any new area of science, you almost lorem ipsum is great text
                    </p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-5">
                    <div class="d-flex flex-row align-items-center mb-1">
                      <h4 class="mb-1 me-1">$140</h4>
                      <span class="text-danger"><s>$190</s></span>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="mt-4">
                      <button class="btn btn-primary shadow-0" type="button">Buy this</button>
                      <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg px-1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center mb-3">
          <div class="col-md-12">
            <div class="card shadow-0 border rounded-3">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                    <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                      <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/12.webp" class="w-100" />
                      <a href="#!">
                        <div class="hover-overlay">
                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-5 col-sm-7">
                    <h5>T-shirt for Men Blue Cotton Base</h5>
                    <div class="d-flex flex-row">
                      <div class="text-warning mb-1 me-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="ms-1">
                          4.5
                        </span>
                      </div>
                      <span class="text-muted">154 orders</span>
                    </div>

                    <p class="text mb-4 mb-md-0">
                      Short description about the product goes here, for ex its features. Lorem ipsum dolor sit amet with hapti you enter into any new area of science, you almost lorem ipsum is great text
                    </p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-5">
                    <div class="d-flex flex-row align-items-center mb-1">
                      <h4 class="mb-1 me-1">$99.50</h4>
                      <span class="text-danger"><s>$190</s></span>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="mt-4">
                      <button class="btn btn-primary shadow-0" type="button">Buy this</button>
                      <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg px-1"></i></a>
                    </div>
                  </div>
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
@endsection
