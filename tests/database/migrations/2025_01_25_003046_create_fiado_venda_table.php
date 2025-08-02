<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiadoVendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiado_venda', function (Blueprint $table) {
            $table->id();
            $table->double('valor_pago', 8, 2)->nullable();
            $table->double('valor_total', 8, 2)->nullable();
            $table->string('forma_pagamento', 250)->nullable();
            $table->integer('prazo')->nullable();
            $table->date('vencimento')->nullable();
            $table->unsignedInteger('venda_id')->nullable();
            $table->unsignedInteger('cliente_id')->nullable();
            $table->unsignedInteger('idFormaPagamento');
            $table->timestamps();
            
            $table->foreign('cliente_id', 'fiado_venda_ibfk_1')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('venda_id', 'fiado_venda_ibfk_2')->references('id')->on('vendas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idFormaPagamento', 'fiado_venda_ibfk_3')->references('id')->on('fatura_vendas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiado_venda');
    }
}
