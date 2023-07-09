<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionnaire;

class RespondentPageController extends Controller
{
    public function index()
    {
        $data = Questionnaire::all();
        return view('kuesioner', compact('data'));
    }

    public function success()
    {
        return view('success');
    }
}
