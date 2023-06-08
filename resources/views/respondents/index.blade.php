@extends('layouts.app')

@section('css_after')
@endsection

@section('content')
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">

                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">

                <a class="text-end btn btn-sm btn-outline-info" href="{{ route('respondent.create') }}"><i
                    class="fa fa-plus"></i> Tambah Data</a>

                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th>
                                    <input type="checkbox" id="check-all" class="flat">
                                </th>
                                <th class="column-title">No. </th>
                                <th class="column-title">Nama </th>
                                <th class="column-title">Jenis Kelamin</th>
                                <th class="column-title">Nomor HP</th>
                                <th class="column-title">Pekerjaan </th>
                                <th class="column-title">Umur </th>
                                <th class="column-title">Pendidikan Terakhir</th>
                                <th class="column-title">Penghasilan </th>
                                <th class="column-title">Kota/Kabupaten</th>
                                <
                                </th>
                                <th class="bulk-actions" colspan="7">
                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                            class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                </th>
                            </tr>
                        </thead>

                        <tbody>





                        </tbody>
                    </table>
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
                    [4, 'desc']
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
                        name: 'name',
                        data: 'name'
                    },
                    {
                        name: 'last_education',
                        data: 'last_education'
                    },

                    {
                        name: '',
                        data: ''
                    },
                    {
                        name: 'job',
                        data: 'job'
                    },
                    {
                        name: 'age',
                        data: 'age'
                    },

                    {
                        name: 'last_education',
                        data: 'last_education'
                    },
                    {
                        name: 'income',
                        data: 'income'
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
