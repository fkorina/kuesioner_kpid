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
        Schema::create('questionnaire_options', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('pertanyaan');
            $table->bigInteger('questionnaire_id')->comment('foreign key questionnaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionnaire_options');
    }
};
