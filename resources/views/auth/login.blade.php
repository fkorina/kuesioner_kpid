<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIENDRA | KPID SUMSEL</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('desain/assets/images/logokpid.png') }}" />
    <link rel="stylesheet" href="{{ asset('posdash/assets/css/backend-plugin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('posdash/assets/css/backend.css?v=1.0.0') }}">
    <link rel="stylesheet" href="{{ asset('posdash/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('posdash/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('posdash/assets/vendor/remixicon/fonts/remixicon.css') }}">
</head>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <div class="container">
                <div class="row align-items-center justify-content-center height-self-center">
                    <div class="col-lg-8">
                        <div class="card auth-card">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center auth-content">
                                    <div class="col-lg-7 align-self-center">
                                        <div class="p-3">
                                            <h2 class="mb-2">SIENDRA</h2>
                                            <p>KPID SUMSEL</p>
                                            <form action="{{ route('login') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" type="text"
                                                                name="name" value="{{ old('name') }}">
                                                            <label>Nama</label>
                                                            @error('name')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" name="password"
                                                                type="password" value="{{ old('password') }}">
                                                            @error('password')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                            <label>Kata Sandi</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <button type="submit" class="btn btn-primary">Masuk</button>

                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 content-right">
                                        <img src="{{ asset('posdash/assets/images/login/SIENDRA.png') }}"
                                            class="img-fluid image-right" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('posdash/assets/js/backend-bundle.min.js') }}"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('posdash/assets/js/ table - treeview . js') }}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('posdash/assets/ js/customizer.js') }}"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="{{ asset('posdash/assets/js/chart-custom . js') }}"></script>

    <!-- app JavaScript -->
    <script src="{{ asset('posdash/assets/js/app.js') }}"></script>
</body>

</html>
