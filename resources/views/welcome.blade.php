<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="icon" href="{{ asset('images/logoKPID.png') }}">


    <title> SIENDRA | KPID SUMSEL</title>
</head>

<body>
    <!-- Navigasi -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark " style="background-color: white">
        <div class="container">
            <img class="img-fluid" src="{{ asset('images/logoKPID.png') }}" alt="Logo KPID" width="50"
                height="50" />
            <img class="img-fluid" src="img/mi.png" alt="Logo MI" width="50" height="50" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#profil" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> Profil </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#tentang">Tentang SIENDRA</a></li>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navigasi -->

    <!-- Home -->
    <img id="home" src="img/home.jpg" class="img-fluid" alt="home" />
    <!-- Akhir Home -->

    <!-- Profil -->
    <section id="tentang">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1>SIENDRA</h1>
                    <hr size="5px" width="50%" />
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <p>
                        SIENDRA adalah aplikasi penilaian kuesioner penyusunan indeks kepuasan masyarakat terhadap penyiaran di daerah Sumatera selatan untuk mengetahui
                        kepuasan pelayanan melalui sebuah website yang dapat diakses oleh smartphone ataupun personal komputer, sehingga dapat menjadi bahan evaluasi untuk
                        meningkatkan kinerja pelayanan perusahaan.
                    </p>
                </div>
            </div>
        </div>
        </div>
        <br><br>
    </section>
    <!-- Akhir Profil -->




    <!-- Footer -->
    <footer class="text-center bg-light pb-1">
        <p><small>SIENDRA | KPID SUMSEL</small></p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>
