<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ config('app.name') }} - Login</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">

    <style>
        .nav-tabs {
            display: flex;
            justify-content: center;
            border-bottom: none;
        }

        .nav-tabs .nav-item {
            margin-bottom: -1px;
        }

        .nav-tabs .nav-link {
            border: none;
            border-bottom: 3px solid transparent;
            color: #6c757d;
            font-weight: bold !important;
        }

        .nav-tabs .nav-link.active {
            border-color: #11468F;
            color: #000;
        }

        .nav-tabs .nav-link:not(.active) {
            border-color: #6c757d;
            color: #6c757d !important;
        }

        .nav-tabs .nav-link:hover {
            border-color: #6c757d;
        }

        .input-group {
            display: flex;
            align-items: center;
        }

        .input-group-text {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .or-separator {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 5px 0;
        }

        .or-separator::before,
        .or-separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ccc;
        }

        .or-separator:not(:empty)::before {
            margin-right: .25em;
        }

        .or-separator:not(:empty)::after {
            margin-left: .25em;
        }
    </style>

</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-5 offset-xl-4">
                        <div class="card" style="border-radius: 15px;">
                            <div class="text-center mt-5">
                                <img src="../assets/img/polinema.png" alt="logo" width="75">
                            </div>
                            <div class="text-center px-3 mt-4">
                                <h4 class="text-dark">Login ke <span class="text">SIM-TA</span></h4>
                            </div>
                            <div class="mt-0 text-center">
                                <p>Kelola tugas akhir dengan mudah</p>
                            </div>
                            <div class="card-body mt-0 pt-0">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="dosen-tab" data-toggle="tab" href="#dosen"
                                            role="tab" aria-controls="dosen" aria-selected="true">Dosen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="mahasiswa-tab" data-toggle="tab" href="#mahasiswa"
                                            role="tab" aria-controls="mahasiswa" aria-selected="false">Mahasiswa</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="dosen" role="tabpanel"
                                        aria-labelledby="dosen-tab">
                                        <form action="{{ route('login') }}" method="POST" class="needs-validation mt-4"
                                            novalidate="">
                                            @csrf
                                            <div class="form-group mb-3 px-4">
                                                <div class="input-group d-flex align-items-center">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                    <input type="email" name="email" value="{{ old('email') }}"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        placeholder="Masukkan Alamat Email">
                                                    @error('email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group mb-5 px-4">
                                                <div class="input-group d-flex align-items-center">
                                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                    <input type="password" name="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        placeholder="Masukkan Password">
                                                    @error('password')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="d-block">
                                                    <div class="float-right">
                                                        <a href="/forgot-password" class="text-small">
                                                            Lupa Password?
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group px-4">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block"
                                                    tabindex="4">
                                                    Login
                                                </button>
                                                <div class="or-separator">or</div>
                                                <button type="button" class="btn btn-secondary btn-lg btn-block">
                                                    Login SSO Email Polinema
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="mahasiswa" role="tabpanel"
                                        aria-labelledby="mahasiswa-tab">
                                        <form action="{{ route('login') }}" method="POST"
                                            class="needs-validation mt-4" novalidate="">
                                            @csrf
                                            <div class="form-group mb-3 px-4">
                                                <div class="input-group d-flex align-items-center">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                    <input type="email" name="email" value="{{ old('email') }}"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        placeholder="Masukkan Alamat Email">
                                                    @error('email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group mb-5 px-4">
                                                <div class="input-group d-flex align-items-center">
                                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                    <input type="password" name="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        placeholder="Masukkan Password">
                                                    @error('password')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="d-block">
                                                    <div class="float-right">
                                                        <a href="/forgot-password" class="text-small">
                                                            Lupa Password?
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group px-4">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block"
                                                    tabindex="4">
                                                    Login
                                                </button>
                                                <div class="or-separator">or</div>
                                                <button type="button" class="btn btn-secondary btn-lg btn-block">
                                                    Login SSO Email Polinema
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>
