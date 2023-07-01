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
        Schema::create('respondents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('nama');
            $table->string('gender')->comment('jenis kelamin');
            $table->string('phone')->comment('no hp');
            $table->string('job')->comment('pekerjaan');
            $table->string('age')->comment('umur');
            $table->string('last_education')->comment('pendidikan terakhir');
            $table->string('income')->comment('penghasilan');
            $table->string('city')->comment('kabupaten/kota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respondents');
    }
};
