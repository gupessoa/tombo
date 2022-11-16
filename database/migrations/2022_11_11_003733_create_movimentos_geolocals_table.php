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
        Schema::create('movimentos_geolocals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_geolocal');
            $table->foreign('id_geolocal')->references('id')->on('geolocals')->onDelete('cascade');;
            $table->unsignedBigInteger('id_movimento');
            $table->foreign('id_movimento')->references('id')->on('movimentos')->onDelete('cascade');;
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
        Schema::dropIfExists('movimentos_geolocals');
    }
};
