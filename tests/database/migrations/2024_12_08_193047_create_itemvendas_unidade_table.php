<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemvendasUnidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemvendas_unidade', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('venda_id');
            $table->unsignedBigInteger('produtofarmaciaUnidade_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->decimal('quantidadeUnidade', 6, 2)->nullable();
            $table->string('tipo_venda', 30)->nullable()->comment("para ver se o usuário vai querer a venda por produto ou por unidade de produto");
            $table->decimal('valor', 10, 2);
            $table->timestamps();
            
            $table->foreign('venda_id', 'itemvendas_unidade_ibfk_1')->references('id')->on('vendas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id', 'itemvendas_unidade_ibfk_2')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('produtofarmaciaUnidade_id', 'itemvendas_unidade_ibfk_3')->references('id')->on('produto_famarcia_unidades')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itemvendas_unidade');
    }
}
