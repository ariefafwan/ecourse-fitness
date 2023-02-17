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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('pelatih_id')->unsigned();
            $table->foreign('pelatih_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('runtutanke');
            $table->date('tgl');
            $table->string('status');
            $table->bigInteger('kind_id')->unsigned();
            $table->foreign('kind_id')->references('id')->on('kinds')->onDelete('cascade')->onUpdate('cascade');
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
