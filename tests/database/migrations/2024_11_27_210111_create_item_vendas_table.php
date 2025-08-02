<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('venda_id');
            $table->unsignedBigInteger('produto_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->decimal('quantidade', 6, 2);
            $table->decimal('quantidadeUnidade', 6, 2)->nullable();
            $table->string('tipo_venda', 30)->nullable()->comment("para ver se o usuário vai querer a venda por produto ou por unidade de produto");
            $table->decimal('valor', 10, 2);
            $table->timestamps();
            
            $table->foreign('produto_id', 'item_vendas_ibfk_1')->references('id')->on('produto_famarcia')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id', 'item_vendas_ibfk_2')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('venda_id', 'item_vendas_venda_id_foreign')->references('id')->on('vendas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_vendas');
    }
}
