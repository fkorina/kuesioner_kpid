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

        $palembang = Respondent::where('city', Respondent::REGENCY_PALEMBANG)->get()->count();
        $banyuasin = Respondent::where('city', Respondent::REGENCY_BANYUASIN)->get()->count();
        $empat_lawang = Respondent::where('city', Respondent::REGENCY_EMPAT_LAWANG)->get()->count();
        $lahat = Respondent::where('city', Respondent::REGENCY_LAHAT)->get()->count();
        $lubuk_linggau = Respondent::where('city', Respondent::REGENCY_LUBUK_LINGGAU)->get()->count();
        $muara_enim = Respondent::where('city', Respondent::REGENCY_MUARA_ENIM)->get()->count();
        $musi_rawas = Respondent::where('city', Respondent::REGENCY_MUSI_RAWAS)->get()->count();
        $musi_rawas_utara = Respondent::where('city', Respondent::REGENCY_MUSI_RAWAS_UTARA)->get()->count();
        $ogan_ilir = Respondent::where('city', Respondent::REGENCY_OGAN_ILIR)->get()->count();
        $ogan_komering_ilir = Respondent::where('city', Respondent::REGENCY_OGAN_KOMERING_ILIR)->get()->count();
        $ogan_komering_ulu = Respondent::where('city', Respondent::REGENCY_OGAN_KOMERING_ULU)->get()->count();
        $ogan_komering_ulu_selatan = Respondent::where('city', Respondent::REGENCY_OGAN_KOMERING_ULU_SELATAN)->get()->count();
        $ogan_komering_ulu_timur = Respondent::where('city', Respondent::REGENCY_OGAN_KOMERING_ULU_TIMUR)->get()->count();
        $pagar_alam = Respondent::where('city', Respondent::REGENCY_PAGAR_ALAM)->get()->count();
        $pali = Respondent::where('city', Respondent::REGENCY_PALI)->get()->count();
        $prabumulih = Respondent::where('city', Respondent::REGENCY_PRABUMULIH)->get()->count();
        $musi_banyuasin = Respondent::where('city', Respondent::REGENCY_MUSI_BANYUASIN)->get()->count();

        return view('home', compact(
            'totalUser',
            'totalQuestionnaire',
            'totalRespondent',
            'palembang',
            'banyuasin',
            'empat_lawang',
            'lahat',
            'lubuk_linggau',
            'muara_enim',
            'musi_rawas',
            'musi_rawas_utara',
            'ogan_ilir',
            'ogan_komering_ilir',
            'ogan_komering_ulu',
            'ogan_komering_ulu_selatan',
            'ogan_komering_ulu_timur',
            'pagar_alam',
            'pali',
            'prabumulih',
            'musi_banyuasin'
        ));
    }

    public function print()
    {
        $totalUser = User::all()->count();
        $totalQuestionnaire = Questionnaire::all()->count();
        $totalRespondent = Respondent::all()->count();

        $palembang = Respondent::where('city', Respondent::REGENCY_PALEMBANG)->get()->count();
        $banyuasin = Respondent::where('city', Respondent::REGENCY_BANYUASIN)->get()->count();
        $empat_lawang = Respondent::where('city', Respondent::REGENCY_EMPAT_LAWANG)->get()->count();
        $lahat = Respondent::where('city', Respondent::REGENCY_LAHAT)->get()->count();
        $lubuk_linggau = Respondent::where('city', Respondent::REGENCY_LUBUK_LINGGAU)->get()->count();
        $muara_enim = Respondent::where('city', Respondent::REGENCY_MUARA_ENIM)->get()->count();
        $musi_rawas = Respondent::where('city', Respondent::REGENCY_MUSI_RAWAS)->get()->count();
        $musi_rawas_utara = Respondent::where('city', Respondent::REGENCY_MUSI_RAWAS_UTARA)->get()->count();
        $ogan_ilir = Respondent::where('city', Respondent::REGENCY_OGAN_ILIR)->get()->count();
        $ogan_komering_ilir = Respondent::where('city', Respondent::REGENCY_OGAN_KOMERING_ILIR)->get()->count();
        $ogan_komering_ulu = Respondent::where('city', Respondent::REGENCY_OGAN_KOMERING_ULU)->get()->count();
        $ogan_komering_ulu_selatan = Respondent::where('city', Respondent::REGENCY_OGAN_KOMERING_ULU_SELATAN)->get()->count();
        $ogan_komering_ulu_timur = Respondent::where('city', Respondent::REGENCY_OGAN_KOMERING_ULU_TIMUR)->get()->count();
        $pagar_alam = Respondent::where('city', Respondent::REGENCY_PAGAR_ALAM)->get()->count();
        $pali = Respondent::where('city', Respondent::REGENCY_PALI)->get()->count();
        $prabumulih = Respondent::where('city', Respondent::REGENCY_PRABUMULIH)->get()->count();
        $musi_banyuasin = Respondent::where('city', Respondent::REGENCY_MUSI_BANYUASIN)->get()->count();

        return view('print', compact(
            'totalUser',
            'totalQuestionnaire',
            'totalRespondent',
            'palembang',
            'banyuasin',
            'empat_lawang',
            'lahat',
            'lubuk_linggau',
            'muara_enim',
            'musi_rawas',
            'musi_rawas_utara',
            'ogan_ilir',
            'ogan_komering_ilir',
            'ogan_komering_ulu',
            'ogan_komering_ulu_selatan',
            'ogan_komering_ulu_timur',
            'pagar_alam',
            'pali',
            'prabumulih',
            'musi_banyuasin'
        ));
    }
}
