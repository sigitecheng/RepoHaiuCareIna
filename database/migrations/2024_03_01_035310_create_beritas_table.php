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
        Schema::create('Beritas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            // $table->foreign('user_id');
            $table->string('judul');
            $table->string('gambar')->nullable();
            $table->text('isi');
            // $table->unsignedBigInteger('user_id');
            $table->date('tanggal_dibuat');
            $table->string('lokasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Beritas');
    }
};