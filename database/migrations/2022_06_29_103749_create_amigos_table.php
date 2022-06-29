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
        Schema::create('amigos', function (Blueprint $table) {
            $table->id();
            $table->timestamp('data_solicitacao');
            $table->unsignedBigInteger('id_solicitante');
            $table->foreign('id_solicitante')->references('id')->on('users');
            $table->unsignedBigInteger('id_solicitado');
            $table->foreign('id_solicitado')->references('id')->on('users');
            $table->string('situacao');
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
        Schema::dropIfExists('amigos');
    }
};
