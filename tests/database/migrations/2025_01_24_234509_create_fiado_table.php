<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiado', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->unsignedInteger('venda_id')->nullable();
            $table->decimal('valor_pago', 10, 2)->nullable();
            $table->decimal('valor_total', 10, 2)->nullable();
            $table->string('forma_pagamento', 250)->nullable();
            $table->integer('prazo')->nullable();
            $table->date('vencimento')->nullable();
            $table->unsignedInteger('cliente_id')->nullable();
            $table->timestamps();
            $table->unsignedInteger('idFormaPagamento')->nullable();
            
            $table->foreign('venda_id', 'fiado_ibfk_1')->references('id')->on('vendas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idFormaPagamento', 'fiado_ibfk_2')->references('id')->on('fatura_vendas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cliente_id', 'fiado_ibfk_3')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiado');
    }
}
