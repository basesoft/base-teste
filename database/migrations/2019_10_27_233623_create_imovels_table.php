<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('endereco',100);
            $table->string('bairro',50);
            $table->string('municipio',50);
            $table->string('estado',2);
            $table->string('cep',9);
            $table->string('tipo_imovel',25);
            $table->string('proprietario',50);
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
        Schema::dropIfExists('imoveis');
    }
}
