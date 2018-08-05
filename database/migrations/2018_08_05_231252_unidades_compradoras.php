<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UnidadesCompradoras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades_compradoras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo')->unique();
            $table->string('uge');
            $table->string('orgao');
            $table->string('gestao');
            $table->string('nome');
            $table->string('endereco');
            $table->string('cep');
            $table->string('email');
            $table->string('telefone1');
            $table->string('telefone2');
            $table->string('fax');
            $table->string('cnpj');
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
        Schema::drop('unidades_compradoras');
    }
}
