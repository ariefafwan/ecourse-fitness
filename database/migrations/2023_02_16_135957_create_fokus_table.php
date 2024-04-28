<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fokus', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('id_user')->constrained('users')->references('id')->onDelete('restrict')->onUpdate('cascade');
            $table->enum('target', ['Menurunkan Berat Badan', 'Membesarkan Otot', 'Menjaga Kebugaran']);
            $table->enum('level', ['Pemula', 'Menengah', 'Mahir']);
            $table->bigInteger('berat_badan');
            $table->bigInteger('tinggi_badan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aspeks');
    }
};
