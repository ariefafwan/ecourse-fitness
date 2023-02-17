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
            $table->string('nama_rumus');
            $table->bigInteger('pelatih_id')->unsigned();
            $table->foreign('pelatih_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan1_id')->unsigned();
            $table->foreign('latihan1_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan2_id')->unsigned();
            $table->foreign('latihan2_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan3_id')->unsigned();
            $table->foreign('latihan3_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan4_id')->unsigned();
            $table->foreign('latihan4_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan5_id')->unsigned();
            $table->foreign('latihan5_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan6_id')->unsigned();
            $table->foreign('latihan6_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan7_id')->unsigned();
            $table->foreign('latihan7_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan8_id')->unsigned();
            $table->foreign('latihan8_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan9_id')->unsigned();
            $table->foreign('latihan9_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan10_id')->unsigned();
            $table->foreign('latihan10_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan11_id')->unsigned();
            $table->foreign('latihan11_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan12_id')->unsigned();
            $table->foreign('latihan12_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan13_id')->unsigned();
            $table->foreign('latihan13_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan14_id')->unsigned();
            $table->foreign('latihan14_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan15_id')->unsigned();
            $table->foreign('latihan15_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan16_id')->unsigned();
            $table->foreign('latihan16_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan17_id')->unsigned();
            $table->foreign('latihan17_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan18_id')->unsigned();
            $table->foreign('latihan18_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan19_id')->unsigned();
            $table->foreign('latihan19_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('latihan20_id')->unsigned();
            $table->foreign('latihan20_id')->references('id')->on('latihans')->onDelete('cascade')->onUpdate('cascade');
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
