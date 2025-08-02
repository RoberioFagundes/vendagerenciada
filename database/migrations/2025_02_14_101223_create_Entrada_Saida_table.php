<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaSaidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Entrada_Saida', function (Blueprint $table) {
            $table->id();
            $table->decimal('valortotalvenda', 10, 2);
            $table->timestamps();
            $table->unsignedInteger('venda_id')->nullable();
            
            $table->foreign('venda_id', 'Entrada_Saida_ibfk_1')->references('id')->on('vendas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Entrada_Saida');
    }
}
