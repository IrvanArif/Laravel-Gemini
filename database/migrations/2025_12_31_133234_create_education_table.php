<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->string('institution');  // Nama Kampus
            $table->string('degree');       // Gelar
            $table->string('period');       // Tahun
            $table->string('gpa')->nullable(); // IPK (Boleh kosong)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};