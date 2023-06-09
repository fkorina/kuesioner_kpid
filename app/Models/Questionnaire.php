<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function questionnaire_options()
    {
        return $this->hasMany(QuestionnaireOption::class, 'questionnaire_id', 'id');
    }

    public function questionnaire_answers()
    {
        return $this->hasMany(QuestionnaireAnswer::class, 'questionnaire_id', 'id');
    }
}
