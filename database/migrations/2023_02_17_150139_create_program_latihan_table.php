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
        Schema::create('program_latihan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('id_user')->constrained('users')->references('id')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignUuid('id_pelatih')->constrained('pelatih')->references('id')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignUuid('id_latihan_pelatih')->constrained('latihan_pelatih')->references('id')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignUuid('id_permintaan')->constrained('permintaan')->references('id')->onDelete('restrict')->onUpdate('cascade');
            $table->date('tanggal');
            $table->string('latihan_ke');
            $table->enum('status', ['Selesai', 'Belum Dikerjakan']);
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
        Schema::dropIfExists('programs');
    }
};
