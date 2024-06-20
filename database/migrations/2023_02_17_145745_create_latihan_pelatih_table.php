<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latihan_pelatih', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('id_pelatih')->constrained('pelatih')->references('id')->onDelete('restrict')->onUpdate('cascade');
            $table->string('nama_latihan');
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
        Schema::dropIfExists('kinds');
    }
};
