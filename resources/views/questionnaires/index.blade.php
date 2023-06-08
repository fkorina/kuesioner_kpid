@extends('layouts.app')

@section('css_after')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><b>Data Kuesioner</b></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <a href="{{ route('questionnaire.create') }}" class="btn btn-outline-success btn-sm ml-5">Tambah Data</a>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-striped data_table table-bordered" style="width:100%">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">No </th>
                                    <th class="column-title">Aksi </th>
                                    <th class="column-title">Pertanyaan </th>
                                    <th class="column-title">Dibuat pada </th>
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
@endsection

@section('js_after')
    <script>
        $(document).ready(function() {
            getDatatable();
        });

        let data_table = "";

        function getDatatable() {
            data_table = $(".data_table").DataTable({
                ajax: {
                    url: "{{ route('questionnaire.datatable') }}",
                },
                serverSide: true,
                destroy: true,
                order: [
                    [3, 'desc']
                ],
                columns: [{
                        "data": null,
                        "sortable": false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        name: 'action',
                        data: 'action'
                    },
                    {
                        name: 'question',
                        data: 'question'
                    },
                    {
                        name: 'created_at',
                        data: 'created_at'
                    },
                ],
            });
        }
    </script>
@endsection
