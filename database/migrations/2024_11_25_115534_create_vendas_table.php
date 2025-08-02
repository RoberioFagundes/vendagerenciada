<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cliente_id');
            $table->unsignedBigInteger('user_id');
            $table->decimal('valor', 10, 2);
            $table->integer('numero_nfe');
            $table->integer('sequencia_evento')->default(0);
            $table->string('chave', 44);
            $table->enum('estado', ['Novo', 'Rejeitado', 'Cancelado', 'Aprovado']);
            $table->timestamps();
            
            $table->foreign('cliente_id', 'vendas_cliente_id_foreign')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id', 'vendas_ibfk_1')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
