<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstacionamentoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estacionamento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cnpj')->unique();
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->string('rua');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('numero');
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
        Schema::dropIfExists('estacionamento');
    }
}
