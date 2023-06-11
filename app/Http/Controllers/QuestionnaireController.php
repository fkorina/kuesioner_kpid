<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionnaire;
use App\Models\QuestionnaireOption;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class QuestionnaireController extends Controller
{
    public function index()
    {
        // Confirm Delete Alert
        $title = 'Hapus Data!';
        $text = "Apakah yakin ingin menghapus data?";
        confirmDelete($title, $text);

        return view('questionnaires.index');
    }

    public function datatable()
    {
        $model = Questionnaire::query();
        return DataTables::of($model)
            ->editColumn('created_at', function ($data) {
                $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->translatedFormat('d F Y - H:i');
                return $formatedDate;
            })
            ->addColumn('action', function ($data) {
                $url_show = route('questionnaire.show', $data->id);
                $url_edit = route('questionnaire.edit', $data->id);
                $url_delete = route('questionnaire.destroy', $data->id);

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Lihat</a>";
                $btn .= "<a href='$url_edit' class = 'btn btn-outline-info btn-sm text-nowrap'><i class='fas fa-edit mr-2'></i> Edit</a>";
                $btn .= "<a href='$url_delete' class = 'btn btn-outline-danger btn-sm text-nowrap' data-confirm-delete='true'><i class='fas fa-trash mr-2'></i> Hapus</a>";
                $btn .= "</div>";
                return $btn;
            })
            ->toJson();
    }

    public function create()
    {
        return view('questionnaires.add');
    }

    public function edit($id)
    {

        $data = Questionnaire::find($id);


        return view('questionnaires.edit', compact('data',));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'question' => 'required'
            ]);

            // Create Data
            $input = $request->all();

            $questionnaire = Questionnaire::create($input);


            // Create Questionnaire Option
            if ($request->name) {
                $questionnaire_option = $request->input('name', []);

                for ($i  = 0; $i < count($questionnaire_option); $i++) {
                    if ($questionnaire_option[$i] != "") {
                        QuestionnaireOption::create([
                            'questionnaire_id' => $questionnaire->id,
                            'question' => $request->name[$i]
                        ]);
                    }
                }
            }

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('questionnaire.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Tersimpan', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Disimpan' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            // Update Data

            $questionnaire = Questionnaire::find($id);

            $input = $request->all();

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

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $questionnaire = Questionnaire::find($id);

            // Delete Data
            $questionnaire->delete();

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Dihapus', 'success');
            return redirect()->route('questionnaire.index');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Tidak Berhasil Dihapus', 'error');
            return redirect()->back()->with('error', 'Data Tidak Berhasil Dihapus' . $e->getMessage());
        }
    }
}
