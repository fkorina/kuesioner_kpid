<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questionnaire_answers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('respondent_id')->comment('foreign key respondent');
            $table->bigInteger('questionnaire_id')->comment('foreign key questionnaire');
            $table->bigInteger('questionnaire_option_id')->nullable()->comment('foreign key questionnaire option');
            $table->text('essay')->nullable()->comment('isi essay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionnaire_answers');
    }
};
