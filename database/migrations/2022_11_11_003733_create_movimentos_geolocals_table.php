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
            $table->foreignId('id_movimento')->references('id')->on('movimentos');
            $table->foreignId('id_geolocal')->references('id')->on('geolocals');
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
