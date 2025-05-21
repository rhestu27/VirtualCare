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
       Schema::create('konsultasis', function (Blueprint $table) {
        $table->id();
        $table->foreignId('dokter_id')->constrained('users')->onDelete('cascade');
        $table->foreignId('pasien_id')->constrained('users')->onDelete('cascade');
        $table->text('keluhan');
        $table->text('catatan_dokter')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsultasis');
    }
};
