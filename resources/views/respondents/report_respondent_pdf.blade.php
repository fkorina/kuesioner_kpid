<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Responden</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <h5 class="text-center">Laporan Responden</h5>
    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Nomor Handphone</th>
                <th>Pekerjaan</th>
                <th>Umur</th>
                <th>Pendidikan Terakhir</th>
                <th>Penghasilan</th>
                <th>Kota/Kabupaten</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @php
                $i = 1;
            @endphp
            @forelse ($data as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->job }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->last_education }}</td>
                    <td>{{ $item->income }}</td>
                    <td>{{ $item->city }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">Data Tidak Ada</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
