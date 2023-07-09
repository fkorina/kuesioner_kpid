@extends('layouts.app')

@section('css_after')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 mb-4 mt-1">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <h4 class="font-weight-bold">Jawaban Responden</h4>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Manajemen Jawaban Responden</h4>
                            </div>
                            <a target="_blank" href="{{ route('respondent.report_respondent_pdf') }}"
                                class="btn btn-primary">Print</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>No. Telepon</th>
                                            <th>Kota/Kabupaten</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_after')
    <script>
        $(document).ready(function() {
            getDatatable();
        });

        let data_table = "";

        function getDatatable() {
            data_table = $("#data-table").DataTable({
                ajax: {
                    url: "{{ route('respondent.datatable') }}",
                },
                serverSide: true,
                destroy: true,
                order: [
                    [0, 'desc']
                ],
                columns: [{
                        data: null,
                        sortable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        name: 'action',
                        data: 'action',
                        sortable: false,
                        searchable: false,
                    },
                    {
                        name: 'name',
                        data: 'name'
                    },
                    {
                        name: 'gender',
                        data: 'gender'
                    },
                    {
                        name: 'phone',
                        data: 'phone'
                    },
                    {
                        name: 'city',
                        data: 'city'
                    },
                ],
            });
        }
    </script>
@endsection
