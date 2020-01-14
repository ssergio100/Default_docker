<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('assunto',100);
            $table->text('mensagem');
            $table->string('nome',50);
            $table->string('sobrenome',50);
            $table->string('telefone',20);
            $table->string('celular',20);
            $table->string('email',100);
            $table->string('produto', 50);
            $table->boolean('ativo')->default(1);
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
        Schema::dropIfExists('contatos');
    }
}
