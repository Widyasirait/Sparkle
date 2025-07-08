<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('baris_parkir', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('zona_id');
            $table->integer('nomor_slot');
            $table->enum('keterangan', ['Terisi', 'Kosong'])->default('Kosong');
            $table->timestamps();

            $table->foreign('zona_id')->references('id')->on('zona_parkir')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baris_parkir');
    }
};
