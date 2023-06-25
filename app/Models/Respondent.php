<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Respondent extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    // untuk kota /kabupaten

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


    // untuk jenis kelamin
    const GENDER_LAKILAKI = "Laki-laki";
    const GENDER_PEREMPUAN = "Perempuan";

    const GENDER_CHOICE = [
        self::GENDER_LAKILAKI => self::GENDER_LAKILAKI,
        self::GENDER_PEREMPUAN  => self::GENDER_PEREMPUAN,

    ];


    // untuk umur

    const AGE_DIBAWAH_21_TAHUN = "Di bawah 21 Tahun";
    const AGE_21_30_TAHUN = "21-30 Tahun";
    const AGE_31_40_TAHUN = "31-40 Tahun";
    const AGE_41_50_TAHUN = "41-50 Tahun";
    const AGE_DIATAS_50_TAHUN = "Di atas 50 Tahun";

    const AGE_CHOICE = [
        self::AGE_DIBAWAH_21_TAHUN => self::AGE_DIBAWAH_21_TAHUN,
        self::AGE_21_30_TAHUN => self::AGE_21_30_TAHUN,
        self::AGE_31_40_TAHUN => self::AGE_31_40_TAHUN,
        self::AGE_41_50_TAHUN => self::AGE_41_50_TAHUN,
        self::AGE_DIATAS_50_TAHUN => self::AGE_DIATAS_50_TAHUN,

    ];

    // untuk pendidikan terakhir
    const EDUCATION_SMP = "SMP atau lebih rendah";
    const EDUCATION_SMA = "SMA";
    const EDUCATION_DIPLOMA = "DIPLOMA (D1,D2,D3)";
    const EDUCATION_SARJANA = "SARJANA (S1,D4)";
    const EDUCATION_PASCA_SARJANA = "PASCA SARJANA (S2,S3) ";

    const EDUCATION_CHOICE = [
        self::EDUCATION_SMP => self::EDUCATION_SMP,
        self::EDUCATION_SMA => self::EDUCATION_SMA,
        self::EDUCATION_DIPLOMA => self::EDUCATION_DIPLOMA,
        self::EDUCATION_SARJANA => self::EDUCATION_SARJANA,
        self::EDUCATION_PASCA_SARJANA => self::EDUCATION_PASCA_SARJANA,
    ];
    // untuk penghasilan
    const INCOME_SATU = "< 1.000.000 PERBULAN";
    const INCOME_LIMA = "<5.000.000 PERBULAN";
    const INCOME_DIATAS_LIMA = "DI ATAS 5.000.000 PERBULAN";

    const INCOME_CHOICE = [
        self::INCOME_SATU => self::INCOME_SATU,
        self::INCOME_LIMA => self::INCOME_LIMA,
        self::INCOME_DIATAS_LIMA => self::INCOME_DIATAS_LIMA,



    ];
}
