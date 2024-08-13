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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100)->nullable();
            $table->string('dusun', 100)->nullable();
            $table->string('alamat', 100)->nullable();
            $table->string('rt', 20)->nullable();
            $table->string('rw', 20)->nullable();
            $table->string('tempat_lahir', 100)->nullable();
            $table->string('tanggal_lahir', 50)->nullable();
            $table->string('jenis_kelamin', 50)->nullable();
            $table->string('hubungan_keluarga', 20)->nullable();
            $table->string('status_kawin', 20)->nullable();
            $table->string('agama', 20)->nullable();
            $table->string('pekerjaan', 50)->nullable();
            $table->string('pendidikan', 50)->nullable();
            $table->string('suku', 50)->nullable();
            $table->string('tahun_lahir', 20)->nullable();
            $table->string('generasi', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
