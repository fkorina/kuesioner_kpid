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
                            @if ($data['questionnaire_options']->count())
                                <input type="text" class="form-control" value="Pilihan Ganda" disabled>
                            @else
                                <input type="text" class="form-control" value="Essai" disabled>
                            @endif
                        </div>
                        <a href="{{ route('questionnaire.index') }}" class="btn btn-outline-warning mr-2">Kembali</a>
                        <button type="submit" class="btn btn-outline-success">Simpan</button>
                        <hr>
                        @if ($data['questionnaire_options']->count())
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
                                                    <tbody id="tbody">
                                                        @php
                                                            $i = 0;
                                                        @endphp
                                                        @foreach ($data['questionnaire_options'] as $item)
                                                            <tr id="row{{ $i++ }}">
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-danger remove"><i
                                                                            class="fas fa-trash mr-2"></i> Hapus</button>
                                                                </td>
                                                                <td>
                                                                    <input type="hidden" name="questionnaire_option_id[]"
                                                                        value="{{ $item['id'] }}">
                                                                    <input class="form-control" type="text"
                                                                        name="name[]" placeholder="Masukkan Opsi Jawaban"
                                                                        value="{{ $item['name'] }}" required>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
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
        })

        // Option Question
        function initQuestionnaireOption() {
            let rowIndex = <?php echo count($data['questionnaire_options']); ?>;

            $("#btn_add").click(function() {
                $("#tbody").append(`<tr id="row${rowIndex++}">
                <td class="text-center">
                <button type="button" class="btn btn-danger remove"><i class="fas fa-trash mr-2"></i> Hapus</button>
                </td>
                <td>
                <input name="questionnaire_option_id[]" type="hidden" value="">
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
    </script>
@endsection


public function update(Request $request, $id)
{
try {
DB::beginTransaction();
// Update Data

$questionnaire = Questionnaire::find($id);

$input = $request->all();

$questionnaire->update($input);

// Questionnaire Option
if ($questionnaire_option_id = $request->questionnaire_option_id) {
for ($i = 0; $i < count($questionnaire_option_id); $i++) { if ($questionnaire_option_id[$i] !==null) { // Update
    Questionnaire Option $questionnaire_option=QuestionnaireOption::find($questionnaire_option_id[$i]);
    $questionnaire_option->update([
    'questionnaire_id' => $questionnaire->id,
    'name' => $request->name[$i]
    ]);

    // Delete Data
    QuestionnaireOption::where('questionnaire_id', $id)
    ->whereNotIn('id', $questionnaire_option_id)
    ->delete();
    } else {
    // Create New Questionnaire Option
    QuestionnaireOption::create([
    'questionnaire_id' => $questionnaire->id,
    'name' => $request->name[$i]
    ]);
    }
    }
    }


    // Save Data
    DB::commit();

    // Alert & Redirect
    Alert::toast('Data Berhasil Diperbarui', 'success');
    return redirect()->route('questionnaire.index');
    } catch (\Exception $e) {
    // If Data Error
    DB::rollBack();

    // Alert & Redirect
    Alert::toast('Data Tidak Tersimpan', 'error');
    return redirect()->back()->with('error', 'Data Tidak Berhasil Diperbarui' . $e->getMessage());
    }
    }


    public function edit($id)
    {

    $data = Questionnaire::find($id);

    return view('questionnaires.edit', compact('data',));
    }

    @if ($data['questionnaire_options']->count())
        <input type="text" class="form-control" value="Pilihan Ganda" disabled>
    @else
        <input type="text" class="form-control" value="Essai" disabled>
    @endif
