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
        Schema::create('kinds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('pelatih_id')->unsigned();
            $table->foreign('pelatih_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('latihan1');
            $table->string('latihan2');
            $table->string('latihan3');
            $table->string('latihan4');
            $table->string('latihan5');
            $table->string('latihan6');            
            $table->string('latihan7');
            $table->string('latihan8');
            $table->string('latihan9')->nullable();
            $table->string('latihan10')->nullable();
            $table->string('latihan11')->nullable();
            $table->string('latihan12')->nullable();
            $table->string('latihan13')->nullable();
            $table->string('latihan14')->nullable();
            $table->string('latihan15')->nullable();
            $table->string('latihan16')->nullable();
            $table->string('latihan17')->nullable();
            $table->string('latihan18')->nullable();
            $table->string('latihan19')->nullable();
            $table->string('latihan20')->nullable();
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
