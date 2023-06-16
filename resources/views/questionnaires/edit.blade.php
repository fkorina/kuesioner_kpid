@extends('layouts.app')



@section('content')
<div class="row">
    <div class="col-sm-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Edit Kuesioner</h4>
                </div>
            </div>
            <div class="card-body">
                @if (session('error'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form action="{{ route('questionnaire.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="question">Pertanyaan</label>
                        <input id="question" type="text" name="question" class="form-control"
                            placeholder="Pertanyaan" value="{{ $data['question'] }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="type">Tipe</label>

                    </div>
                    <a href="{{ route('questionnaire.index') }}" class="btn btn-outline-warning mr-2">Kembali</a>
                    <button type="submit" class="btn btn-outline-success">Simpan</button>
                    <hr>
                    <div class="row" id="option">
                        <div class="col-md-8 offset-md-2">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Opsi Jawaban</h4>
                                    <button type="button" id="btn_add" class="btn btn-outline-primary"><i
                                            class="fa fa-plus"></i> Tambah
                                        Data</button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" width="100%">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Aksi</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody"></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js_after')
<script>
    $(() => {
        initQuestionnaireOption();
        showOption();
        $("#option").hide();
    })

    // Option Question
    function initQuestionnaireOption() {
        let rowIndex = 0;

        $("#btn_add").click(function() {
            $("#tbody").append(`<tr id="row${++rowIndex}">
                <td class="text-center">
                <button type="button" class="btn btn-danger remove"><i class="fas fa-trash mr-2"></i> Hapus</button>
                </td>
                <td>
                <input class="form-control" type="text" name="name[]" placeholder="Masukkan Opsi Jawaban" required>
                </td>
                </tr>`);
        });

        $("#tbody").on('click', '.remove', function() {
            let child = $(this).closest('tr').nextAll();

            child.each(function() {
                let id = $(this).attr('id');
                let dig = parseInt(id.substring(1));
                $(this).attr('id', `row${dig - 1}`);

            });

            $(this).closest('tr').remove();
            rowIndex--;
        });
    }

    // Show Hide Option
    function showOption() {
        let type = $('#type');
        $('#type').click(function() {
            if (type.val() == "Pilihan Ganda") {
                $("#option").show();
            } else {
                $("#tbody").empty();
                $("#option").hide();
            }
        })
    }
</script>
@endsection
