<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Respondent extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const REGENCY_PALEMBANG = "Palembang";
    const REGENCY_BANYUASIN = "Banyuasin";
    const REGENCY_EMPAT_LAWANG = "Empat Lawang";
    const REGENCY_LAHAT = "Lahat";
    const REGENCY_MUARA_ENIM = "Muara Enim";
    const REGENCY_MUSI_BANYUASIN = "Musi Banyuasin";
    const REGENCY_MUSI_RAWAS = "Musi Rawas";
    const REGENCY_MUSI_RAWAS_UTARA = "Musi Rawas Utara";
    const REGENCY_OGAN_ILIR = "Ogan Ilir";
    const REGENCY_OGAN_KOMERING_ILIR = "Ogan Komering Ilir";
    const REGENCY_OGAN_KOMERING_ULU = "Ogan Komering Ulu";
    const REGENCY_OGAN_KOMERING_ULU_SELATAN = "Ogan Komering Ulu Selatan";
    const REGENCY_OGAN_KOMERING_ULU_TIMUR = "Ogan Komering Ulu Timur";
    const REGENCY_PALI = "Pali";
    const REGENCY_LUBUK_LINGGAU = "Lubuk Linggau";
    const REGENCY_PAGAR_ALAM = "Pagar ALam";
    const REGENCY_PRABUMULIH = "Prabumulih";

    const REGENCY_CHOICE = [
        self::REGENCY_PALEMBANG => self::REGENCY_PALEMBANG,
        self::REGENCY_BANYUASIN => self::REGENCY_BANYUASIN,
        self::REGENCY_EMPAT_LAWANG => self::REGENCY_EMPAT_LAWANG,
        self::REGENCY_LAHAT => self::REGENCY_LAHAT,
        self::REGENCY_MUARA_ENIM => self::REGENCY_MUARA_ENIM,
        self::REGENCY_MUSI_RAWAS => self::REGENCY_MUSI_RAWAS,
        self::REGENCY_MUSI_RAWAS_UTARA => self::REGENCY_MUSI_RAWAS_UTARA,
        self::REGENCY_OGAN_ILIR => self::REGENCY_OGAN_ILIR,
        self::REGENCY_OGAN_KOMERING_ILIR => self::REGENCY_OGAN_KOMERING_ILIR,
        self::REGENCY_OGAN_KOMERING_ULU => self::REGENCY_OGAN_KOMERING_ULU,
        self::REGENCY_OGAN_KOMERING_ULU_SELATAN => self::REGENCY_OGAN_KOMERING_ULU_SELATAN,
        self::REGENCY_OGAN_KOMERING_ULU_TIMUR => self::REGENCY_OGAN_KOMERING_ULU_TIMUR,
        self::REGENCY_PALI   => self::REGENCY_PALI,
        self::REGENCY_LUBUK_LINGGAU => self::REGENCY_LUBUK_LINGGAU,
        self::REGENCY_PAGAR_ALAM => self::REGENCY_PAGAR_ALAM,
        self::REGENCY_PRABUMULIH => self::REGENCY_PRABUMULIH,
    ];
}
