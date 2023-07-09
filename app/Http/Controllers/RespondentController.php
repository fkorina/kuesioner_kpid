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
use Barryvdh\DomPDF\Facade\Pdf;

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
                $url_show = route('respondent.show', Crypt::encrypt($data['id']));

                $btn = "<div class='btn-group'>";
                $btn .= "<a href='$url_show' class = 'btn btn-outline-primary btn-sm text-nowrap'><i class='fas fa-info mr-2'></i> Detail</a>";
                $btn .= "</div>";

                return $btn;
            })
            ->toJson();
    }

    public function show($id)
    {
        $id = Crypt::decrypt($id);
        $data = Respondent::find($id);

        return view('respondents.show', compact('data'));
    }

    public function report_pdf($id)
    {
        $id = Crypt::decrypt($id);
        $data = Respondent::find($id);

        $pdf = PDF::loadView('respondents.report_pdf', compact('data'));

        $fileName = "Laporan Jawaban Responden.pdf";

        return $pdf->stream($fileName);
    }

    public function report_respondent_pdf()
    {
        $data = Respondent::all();

        $pdf = PDF::loadView('respondents.report_respondent_pdf', compact('data'))->setPaper('A4', 'landscape');

        $fileName = "Laporan Responden.pdf";

        return $pdf->stream($fileName);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'name' => 'required',
                'gender' => 'required',
                'phone' => 'required',
                'job' => 'required',
                'age' => 'required',
                'last_education' => 'required',
                'income' => 'required',
                'city' => 'required',
            ]);

            $input = $request->all();

            $respondent = Respondent::create($input);

            // Create Answer
            $questionnaire_id_option = $request->questionnaire_id_option;
            $questionnaire_id_essay = $request->questionnaire_id_essay;

            if (!empty($questionnaire_id_option)) {
                for ($i = 0; $i < count($questionnaire_id_option); $i++) {
                    QuestionnaireAnswer::create([
                        'respondent_id' => $respondent->id,
                        'questionnaire_id' => $questionnaire_id_option[$i],
                        'questionnaire_option_id' => $request->questionnaire_option_id[$i]
                    ]);
                }
            }

            if (!empty($questionnaire_id_essay)) {
                for ($i = 0; $i < count($questionnaire_id_essay); $i++) {
                    QuestionnaireAnswer::create([
                        'respondent_id' => $respondent->id,
                        'questionnaire_id' => $questionnaire_id_essay[$i],
                        'essay' => $request->answer_essay[$i]
                    ]);
                }
            }

            // Save Data
            DB::commit();

            // Alert & Redirect
            Alert::toast('Data Berhasil Disimpan', 'success');
            return redirect()->route('respondent_success_page');
        } catch (\Exception $e) {
            // If Data Error
            DB::rollBack();

            // Alert & Redirect
            Alert::toast('Data Gagal Disimpan', 'error');
            return redirect()->back()->withInput()->with('error', 'Data Tidak Berhasil Diperbarui' . $e->getMessage());
        }
    }
}
