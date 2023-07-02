<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Respondent;
use App\Models\Questionnaire;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalUser = User::all()->count();
        $totalQuestionnaire = Questionnaire::all()->count();
        $totalRespondent = Respondent::all()->count();

        return view('home', compact('totalUser', 'totalQuestionnaire', 'totalRespondent'));
    }
}
