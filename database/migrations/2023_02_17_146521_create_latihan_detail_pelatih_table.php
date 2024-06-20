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
        Schema::create('latihan_detail_pelatih', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('id_latihan_pelatih')->constrained('latihan_pelatih')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama');
            $table->tinyInteger('urutan');
            $table->string('file');
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
        Schema::dropIfExists('latihan_detail_pelatih');
    }
};
