<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login Member</title>

    <!-- Custom fonts for this template-->
    <link href="/sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .bg-warning-login {
            background: #200046;
            color: aliceblue;
        }

        .custom-control-label {
            accent-color : #f6c23e !important; 
        }

    </style>
</head>

<body class="bg-gradient-primaries" style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');">

    <div class="container ">
        <!-- Outer Row -->
        <div class="row justify-content-center d-flex align-items-center min-vh-100">

            <div class="col-xl-6 col-lg-12 col-md-12">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row bg-warning-login">
                            {{-- <div class="col-lg-6 d-none d-lg-block bg-register-images" style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');"></div> --}}
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <i class="fas fa-dumpster fa-7x" style="color: rgb(153,0,255);"></i>
                                        <h1 class="h2 font-weight-bold text-white mb-4">LOGIN MEMBER E-COMMERCE</h1>
                                    </div>
                                    @if (Session::has('errors'))
                                    <ul class="alert text-white bg-success">
                                        @foreach (Session::get('errors') as $error)
                                            <li>{{ $error[0] }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                    @if (Session::has('success'))
                                        <p class="alert text-primary bg-secondary">{{ Session::get('success') }}</p>
                                    @endif

                                    @if (Session::has('failed'))
                                        <p class="alert text-white bg-danger">{{ Session::get('failed') }}</p>
                                    @endif

                                    <form class="form-login user" method="POST" action="/login_member">
                                        @csrf
                                        <div class="form-group">
                                            <label class="text-warning" for="email">Email</label>
                                            <input required name="email" type="email" class="form-control form-control-user rounded-lg border-bottom-primary"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Masukkan Email...">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-warning" for="email">Password</label>
                                            <input required name="password" type="password" class="form-control form-control-user rounded-lg border-bottom-primary"
                                                id="exampleInputPassword" placeholder="Masukkan Password...">
                                        </div>
                                        {{-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div> --}}
                                        <button type="submit" class="btn btn-warning btn-lg btn-block rounded-lg mb-3">
                                            Masuk
                                        </button>
                                        <span>Belum punya akun? 
                                            <a href="/register_member" class="text-warning h3:hover">Buat Akun</a>
                                        </span>

                                    </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/sb-admin-2/vendor/jquery/jquery.min.js"></script>
    <script src="/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/sb-admin-2/js/sb-admin-2.min.js"></script>
</body>

</html>