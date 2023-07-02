<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Jawaban Responden</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <h5 class="text-center">Laporan Jawaban Responden</h5>
    <br>
    <div class="card">
        <div class="card-header">
            <h4 class="text-title">Data Responden</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label>Nama</label>
                    <h5>{{ $data['name'] }}</h5>
                </div>
                <div class="col-md-6">
                    <label>Jenis Kelamin</label>
                    <h5>{{ $data['gender'] }}</h5>
                </div>
                <div class="col-md-6">
                    <label>No. Handphone</label>
                    <h5>{{ $data['phone'] }}</h5>
                </div>
                <div class="col-md-6">
                    <label>Pekerjaan</label>
                    <h5>{{ $data['job'] }}</h5>
                </div>
                <div class="col-md-6">
                    <label>Umur</label>
                    <h5>{{ $data['age'] }}</h5>
                </div>
                <div class="col-md-6">
                    <label>Pendidikan Terakhir</label>
                    <h5>{{ $data['last_education'] }}</h5>
                </div>
                <div class="col-md-6">
                    <label>Penghasilan</label>
                    <h5>{{ $data['income'] }}</h5>
                </div>
                <div class="col-md-6">
                    <label>Daerah Kab/Kota</label>
                    <h5>{{ $data['city'] }}</h5>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Jawaban Responden</h4>
        </div>
        <div class="card-body">
            @php
                $i = 1;
            @endphp
            <div class="row mb-3">
                @foreach ($data['questionnaire_answers'] as $item)
                    <div class="col-md-6">
                        <h5>{{ $i++ }}. {{ $item['questionnaire']['question'] }}</h5>
                        <h6>Jawaban :</h6>
                        @if (!empty($item['questionnaire_option_id']))
                            <p align="justify">{{ $item['questionnaire_option']['name'] }}</p>
                        @else
                            <p align="justify">{{ $item['essay'] }}</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
