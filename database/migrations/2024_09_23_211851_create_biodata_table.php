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
        Schema::create('biodata', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->string('asrama');
            $table->string('nama_lengkap');
            $table->string('tempat lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin',['perempuan','laki-laki',]);
            $table->text('alamat');
            $table->integer('kontak');
            $table->foreignid('id');
            $table->foreign('id')->references('id')->on('siswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata');
    }
};
