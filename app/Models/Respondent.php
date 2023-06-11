<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Respondent extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const REGENCY_PALEMBANG = "Palembang";

    const REGENCY_CHOICE = [
        self::REGENCY_PALEMBANG => self::REGENCY_PALEMBANG
    ];
}
