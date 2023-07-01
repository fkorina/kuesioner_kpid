<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v5.6.13, https://mobirise.com -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="generator" content="Mobirise v5.6.13, mobirise.com" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:src" content="" />
    <meta property="og:image" content="" />
    <meta name="twitter:title" content="Home" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link rel="shortcut icon" href="{{ asset('desain/assets/images/logoo.png') }}" type="image/x-icon" />
    <meta name="description" content="" />

    <title>SIENDRA</title>
    <link rel="stylesheet" href="{{ asset('desain/assets/web/assets/mobirise-icons2/mobirise2.css') }}" />
    <link rel="stylesheet" href="{{ asset('desain/assets/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('desain/assets/bootstrap/css/bootstrap-grid.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('desain/assets/bootstrap/css/bootstrap-reboot.min.css"') }} />
    <link rel="stylesheet"
        href="{{ asset('desain/assets/dropdown/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('desain/assets/socicon/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('desain/assets/theme/css/style.css') }}" />
    <link rel="preload"
        href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&display=swap" />
    </noscript>
    <link rel="preload" as="style" href="{{ asset('desain/assets/mobirise/css/mbr-additional.css') }}" />
    <link rel="stylesheet" href="{{ asset('desain/assets/mobirise/css/mbr-additional.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <section data-bs-version="5.1" class="menu menu3 cid-sFAA5oUu2Y" once="menu" id="menu3-1">
        <nav class="navbar navbar-dropdown navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <img src="{{ asset('desain/assets/images/logokpid.png') }}" alt="Mobirise Website Builder"
                            style="height: 3rem" />
                    </span>

                    <span class="navbar-logo">
                        <img src="{{ asset('desain/assets/images/endra.png') }}" alt="Mobirise Website Builder"
                            style="height: 6rem" />
                    </span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse"
                    data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item">
                            <a class="nav-link link text-black text-primary display-7" href="{{ url('/') }}">
                                BERANDA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black text-primary display-7" href="#image2-4">DATA
                                RESPONDEN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black display-7" href="#kuesioner">PERTANYAAN KUESIONER</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section data-bs-version="5.1" class="header1 cid-sFCAOqBTxa" id="header1-i">
        <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0)"></div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">

                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="image2 cid-tI8WNGIm54" id="image2-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <form action="{{ route('respondent.store') }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Responden</h4>
                            </div>
                            <div class="card-body">
                                @if (session('error'))
                                    <p>{{ session('error') }}</p>
                                @endif
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{ old('name') }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="gender">Jenis Kelamin </label>
                                    <select name="gender" id="gender" class="form-select">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        @foreach (App\Models\Respondent::GENDER_CHOICE as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="phone">No. Handphone</label>
                                    <input type="number" id="phone" name="phone" class="form-control"
                                        value="{{ old('phone') }}" required>
                                </div>


                                <div class="form-group">
                                    <label for="job">Pekerjaan</label>
                                    <input type="text" id="job" name="job" class="form-control"
                                        value="{{ old('job') }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="age">Umur</label>
                                    <select name="age" id="age" class="form-select" required>
                                        <option value="">Pilih Umur</option>
                                        @foreach (App\Models\Respondent::AGE_CHOICE as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="last_education">Pendidikan Terakhir </label>
                                    <select name="last_education" id="last_education" class="form-select" required>
                                        <option value="">Pilih Pendidikan Terakhir </option>
                                        @foreach (App\Models\Respondent::EDUCATION_CHOICE as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="income">Penghasilan</label>
                                    <select name="income" id="income" class="form-select">
                                        <option value="">Pilih Penghasilan</option>
                                        @foreach (App\Models\Respondent::INCOME_CHOICE as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="city">Daerah Kab/kota</label>
                                    <select name="city" id="city" class="form-select">
                                        <option value="">Pilih Daerah Kab/Kota</option>
                                        @foreach (App\Models\Respondent::REGENCY_CHOICE as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-5" id="kuesioner">
                            <div class="card-header">
                                <h4>Kuesioner</h4>
                            </div>
                            <div class="card-body">
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($data as $item)
                                    <div class="row mb-3">
                                        <div class="col-md-11">
                                            <h5>{{ $i++ }} {{ $item->question }}</h5>
                                            @if ($item->questionnaire_options->count())
                                                <input type="hidden" name="questionnaire_id_option[]"
                                                    value="{{ $item->id }}">
                                                @foreach ($item->questionnaire_options as $item2)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="questionnaire_option_id[]" id="{{ $item2->id }}"
                                                            value="{{ $item2->id }}">
                                                        <label class="form-check-label" for="{{ $item2->id }}">
                                                            {{ $item2->name }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            @else
                                                <input type="hidden" name="questionnaire_id_essay[]"
                                                    value="{{ $item->id }}">
                                                <textarea name="answer_essay[]" rows="3" class="form-control"></textarea>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <br>
                        <center>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <hr />
    <section data-bs-version="5.1" class="footer3 cid-sFAOjz8nX7" once="footers" id="footer3-d">
        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="row social-row">
                    <div class="social-list align-right pb-2">
                        <div class="soc-item">
                            <a href="https://www.instagram.com/kpidsumsel/?hl=id" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"
                                    style="color: rgb(0, 0, 0); fill: rgb(0, 0, 0)"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/kpid.sumsel.7?mibextid=ZbWKwL" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"
                                    style="color: rgb(0, 0, 0); fill: rgb(0, 0, 0)"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="mailto:info@site.com" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"
                                    style="color: rgb(0, 0, 0); fill: rgb(0, 0, 0)"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="mailto:Kpid.sumsel@yahoo.com" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-mail socicon"
                                    style="color: rgb(0, 0, 0); fill: rgb(0, 0, 0)"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row row-copirayt">
                    <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                        © Copyright by SIENDRA
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="display-7"
        style="
        padding: 0;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        align-content: center;
        display: flex;
        position: relative;
        height: 0rem;
      ">
        <a href="https://mobiri.se/2871549"
            style="
          flex: 1 1;
          height: 0rem;
          position: absolute;
          width: 100%;
          z-index: 1;
        "></a>
        <a style="z-index: 1" href="https://mobirise.com/website-design-software.html"></a>
    </section>

    <script src="{{ asset('desain/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('desain/assets/smoothscroll/smooth-scroll.js') }}"></script>
    <script src="{{ asset('desain/assets/ytplayer/index.js') }}"></script>
    <script src="{{ asset('desain/assets/dropdown/js/navbar-dropdown.js') }}"></script>
    <script src="{{ asset('desain/assets/theme/js/script.js') }}"></script>

    @include('sweetalert::alert')
</body>

</html>
