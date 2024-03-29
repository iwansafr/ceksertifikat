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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_seri')->unique();
            $table->integer('tahun');
            $table->string('nama');
            $table->string('instansi')->comment('instansi/sekolah');
            $table->string('email');
            $table->string('no_wa');
            $table->string('jenis_pelatihan');
            $table->text('link')->comment('link sertifikat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertas');
    }
};
