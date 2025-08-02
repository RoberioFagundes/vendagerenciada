<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 50);
            $table->string('rua', 80);
            $table->string('numero', 10);
            $table->string('bairro', 30);
            $table->string('complemento', 100);
            $table->string('cep', 9);
            $table->string('telefone', 15);
            $table->string('cpf_cnpj', 18)->nullable();
            $table->string('ie_rg', 15)->nullable();
            $table->tinyInteger('contribuinte')->nullable();
            $table->unsignedInteger('cidade_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
            
            $table->foreign('cidade_id', 'clientes_cidade_id_foreign')->references('id')->on('cidades')->onDelete('cascade');
            $table->foreign('user_id', 'clientes_ibfk_1')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
