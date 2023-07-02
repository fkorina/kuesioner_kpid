@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Data Jawaban Responden</h4>
            </div>
            <div class="text-end">
                <a href="" class="btn btn-info">Cetak PDF</a>
                <a href="{{ route('respondent.index') }}" class="btn btn-warning">Kembali</a>
            </div>
        </div>

        <div class="card-body">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-title">Data Responden</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nama</label>
                            <input type="text" class="form-control" value="{{ $data['name'] }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" value="{{ $data['gender'] }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label>No. Handphone</label>
                            <input type="text" class="form-control" value="{{ $data['phone'] }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" value="{{ $data['job'] }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label>Umur</label>
                            <input type="text" class="form-control" value="{{ $data['age'] }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label>Pendidikan Terakhir</label>
                            <input type="text" class="form-control" value="{{ $data['last_education'] }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label>Penghasilan</label>
                            <input type="text" class="form-control" value="{{ $data['income'] }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label>Daerah Kab/Kota</label>
                            <input type="text" class="form-control" value="{{ $data['city'] }}" readonly>
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
        </div>
    </div>
@endsection
