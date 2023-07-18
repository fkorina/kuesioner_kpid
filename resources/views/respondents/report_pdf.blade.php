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
    <h4 class="text-center">Laporan Jawaban Responden Kuesioner KPID</h4>
    <br>
    <div class="card">
        <div class="card-header">
            <h5>Data Pribadi</h5>
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <td>
                        <h6>Nama</h6>
                    </td>
                    <td>
                        <h6> :</h6>
                    </td>
                    <td>
                        <h6 style="margin-left: 10px">{{ $data['name'] }}</h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>Jenis Kelamin</h6>
                    </td>
                    <td>
                        <h6> :</h6>
                    </td>
                    <td>
                        <h6 style="margin-left: 10px">{{ $data['gender'] }}</h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>No. Handphone</h6>
                    </td>
                    <td>
                        <h6> :</h6>
                    </td>
                    <td>
                        <h6 style="margin-left: 10px">{{ $data['phone'] }}</h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>Pekerjaan</h6>
                    </td>
                    <td>
                        <h6> :</h6>
                    </td>
                    <td>
                        <h6 style="margin-left: 10px">{{ $data['job'] }}</h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>Umur</h6>
                    </td>
                    <td>
                        <h6> :</h6>
                    </td>
                    <td>
                        <h6 style="margin-left: 10px">{{ $data['age'] }}</h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>Pendidikan Terakhir</h6>
                    </td>
                    <td>
                        <h6> :</h6>
                    </td>
                    <td>
                        <h6 style="margin-left: 10px">{{ $data['last_education'] }}</h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>Penghasilan</h6>
                    </td>
                    <td>
                        <h6> :</h6>
                    </td>
                    <td>
                        <h6 style="margin-left: 10px">{{ $data['income'] }}</h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>Daerah Kab/Kota</h6>
                    </td>
                    <td>
                        <h6>:</h6>
                    </td>
                    <td>
                        <h6 style="margin-left: 10px">{{ $data['city'] }}</h6>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-header">
            <h5>Jawaban</h5>
        </div>
        <div class="card-body">
            @php
                $i = 1;
            @endphp
            <div class="row mb-3">
                @foreach ($data['questionnaire_answers'] as $item)
                    <div class="col-auto">
                        <h6 align="justify">{{ $i++ }}. {{ $item['questionnaire']['question'] }}</h6>
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


