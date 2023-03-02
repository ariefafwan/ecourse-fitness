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
            $table->string('latihan9');
            $table->string('latihan10');
            $table->string('latihan11');            
            $table->string('latihan12');
            $table->string('latihan13');
            $table->string('latihan14');
            $table->string('latihan15');
            $table->string('latihan16');
            $table->string('latihan17');
            $table->string('latihan18');
            $table->string('latihan19');
            $table->string('latihan20');
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
