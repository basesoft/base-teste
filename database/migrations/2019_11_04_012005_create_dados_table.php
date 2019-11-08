<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('endereco',50);
            $table->string('bairro',50);
            $table->string('municipio',50);
            $table->string('estado',50);
            $table->string('cep',50);
            $table->string('tipo_imovel',50);
            $table->string('nome_proprietario',50);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados');
    }
}
