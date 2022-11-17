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
        Schema::create('obras', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('data');
            $table->string('nome_outro');
            $table->string('tipo');
            $table->string('tamanho');
            $table->unsignedBigInteger('artista_id');
            $table->foreign('artista_id')->references('id')->on('artistas')->onDelete('cascade');
            $table->unsignedBigInteger('museu_id');
            $table->foreign('museu_id')->references('id')->on('museus')->onDelete('cascade');
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
        Schema::dropIfExists('obras');
    }
};
