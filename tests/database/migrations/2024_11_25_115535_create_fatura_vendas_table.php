<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaturaVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fatura_vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('venda_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('forma_pagamento', 15);
            $table->decimal('valor', 10, 2);
            $table->date('vencimento');
            $table->timestamps();
            
            $table->foreign('venda_id', 'fatura_vendas_venda_id_foreign')->references('id')->on('vendas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fatura_vendas');
    }
}
