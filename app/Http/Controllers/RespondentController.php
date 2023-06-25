<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respondent;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Carbon;
use App\Models\QuestionnaireAnswer;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RespondentController extends Controller
{
    public function index()
    {
        // Confirm Delete Alert
        $title = 'Hapus Data!';
        $text = "Apakah yakin ingin menghapus data?";
        confirmDelete($title, $text);

        return view('respondents.index');
    }

    public function datatable()
    {
        $model = Respondent::query();
        return DataTables::of($model)
            ->addColumn('action', function ($data) {
                $url_show = route('respondent.show');
                $url_edit = route('respondent.edit');
                $url_delete = route('respondent.destroy');

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Lihat</a>";
                $btn .= "<a href='$url_edit' class = 'btn btn-outline-info btn-sm text-nowrap'><i class='fas fa-edit mr-2'></i> Edit</a>";
                $btn .= "<a href='$url_delete' class = 'btn btn-outline-danger btn-sm text-nowrap' data-confirm-delete='true'><i class='fas fa-trash mr-2'></i> Hapus</a>";
                $btn .= "</div>";
            })
            ->toJson();
    }


    public function create()
    {
        $respondent = Respondent::all();
        return view('respondents.add', compact('respondent'));
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = Respondent::find($id);
        $student = Respondent::all();

        return view('respondent.edit', compact('data', 'respondent'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'name' => 'required',
            ]);

            $input = $request->all();

            $respondent = Respondent::create($input);

            // Create Answer
            if ($questionnaire_id = $request->name) {
                for ($i  = 0; $i < count($questionnaire_id); $i++) {
                    if ($request->questionnaire_option_id) {
                        $data = [
                            'respondent_id' => $respondent->id,
                            'questionnaire_id' => Crypt::decrypt($request->questionnaire_id[$i]),
                            'questionnaire_option_id' => Crypt::decrypt($request->questionnaire_option_id[$i])
                        ];
                    } elseif ($request->answer_essay) {
                        $data = [
                            'respondent_id' => $respondent->id,
                            'questionnaire_id' => Crypt::decrypt($request->questionnaire_id[$i]),
                            'essay' => Crypt::decrypt($request->answer_essay[$i])
                        ];
                    }
                    QuestionnaireAnswer::create($data);
                }
            }

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Gagal Disimpan', 'error');
            return redirect()->back()->withInput()->with('error', 'Data Tidak Berhasil Diperbarui' . $e->getMessage());
        }
    }

    public function update($id, Request $request)
    {
    }

    public function destroy($id)
    {
    }
}
