<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta id="" name="description" content="">
    <meta id="" name="author" content="">
    <title>Register Member</title>

    <!-- Custom fonts for this template-->
    <link href="/sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .bg-warning-login {
            background: #46002b;
            color: aliceblue;
        }

        .custom-control-label {
            accent-color : #f6c23e; !important
        }

        /* .form-control-user:focus {
            border: solid 4px #f6c23e;
        } */

        body {
            background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');
            /* background-repeat: no-repeat; */
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body class="bg-gradient-primaries">

    <div class="container ">
        <!-- Outer Row -->
        <div class="row justify-content-center d-flex align-items-center min-vh-100">

            <div class="col-xl-12 col-lg-12 col-md-12">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="bg-warning-login">
                            {{-- <div class="col-lg-6 d-none d-lg-block bg-register-images" style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');"></div> --}}
                            
                            <div class="p-5">
                                <div class="text-center">
                                    <i class="fas fa-dumpster fa-7x" style="color: rgb(255, 115, 0);"></i>
                                    <h1 class="h2 font-weight-bold text-warning mb-4">Register E-COMMERCE</h1>
                                </div>
                                @if (Session::has('errors'))
                                    <ul class="alert text-white bg-secondary">
                                        @foreach (Session::get('errors') as $error)
                                            <li>{{ $error[0] }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                <form class="form-login user row" method="POST" action="/register_member">
                                    @csrf
                                    <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="text-danger" for="email">Nama Member</label>
                                            <input required id="nama_member" name="nama_member" type="text" class="form-control form-control-user rounded-lg border-left-warning nama_member"
                                            placeholder="Masukkan Nama Member...">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-danger" for="email">Email</label>
                                            <input required id="email" name="email" type="email" class="form-control form-control-user rounded-lg border-left-warning email"
                                            placeholder="Masukkan Email...">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-danger" for="password">Password</label>
                                            <input required id="password" name="password" type="password" class="form-control form-control-user rounded-lg border-left-warning password"
                                                id="exampleInputPassword" placeholder="Masukkan Password...">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-danger" for="konfirmasi_password">Konfirmasi Password</label>
                                            <input required id="konfirmasi_password" name="konfirmasi_password" type="password" class="form-control form-control-user rounded-lg border-left-warning konfirmasi_password"
                                                id="exampleInputPassword" placeholder="Masukkan Konfirmasi Password...">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-danger" for="no_hp">No. Handphone</label>
                                            <input required id="no_hp" name="no_hp" type="number" class="form-control form-control-user rounded-lg border-left-warning no_hp"
                                            placeholder="Masukkan No. Handphone...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-xl-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="text-info" for="provinsi">Provinsi</label>
                                            <input required id="provinsi" name="provinsi" type="text" class="form-control form-control-user rounded-lg border-left-info provinsi"
                                            placeholder="Masukkan Provinsi...">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-info" for="kabupaten">Kabupaten</label>
                                            <input required id="kabupaten" name="kabupaten" type="text" class="form-control form-control-user rounded-lg border-left-info kabupaten"
                                            placeholder="Masukkan Kabupaten...">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-info" for="kecamatan">Kecamatan</label>
                                            <input required id="kecamatan" name="kecamatan" type="text" class="form-control form-control-user rounded-lg border-left-info kecamatan"
                                            placeholder="Masukkan Kecamatan...">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-info" for="email">Detail Alamat</label>
                                            <textarea required id="detail_alamat" name="detail_alamat" type="text" class="form-control form-control-user rounded-lg border-left-info detail_alamat"
                                            placeholder="Masukkan Detail Alamat..."></textarea>
                                        </div>
                                    </div>
                                        <button type="submit" class="btn btn-danger btn-lg btn-block rounded mb-3">
                                            Register
                                        </button>
                                        <span>Sudah punya akun? 
                                            <a href="/login_member" class="text-warning text-warning">Login</a>
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