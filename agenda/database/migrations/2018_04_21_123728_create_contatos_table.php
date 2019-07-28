<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('saudacao', 5);
            $table->string('nome', 100);
            $table->char('cpf',11);
            $table->char('telefone', 15)->nullable();
            $table->char('celular', 15);
            $table->string('email', 200);
            $table->char('nascimento',10)->nullable();
            $table->string('foto', 200)->nullable();
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
