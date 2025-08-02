<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('nome', 50);
            $table->decimal('valor', 10, 2);
            $table->decimal('qtdProduto', 10, 2)->nullable();
            $table->date('validade')->nullable();
            $table->string('ncm', 10);
            $table->string('cfop_interno', 4);
            $table->string('cfop_externo', 4);
            $table->string('codigo_barras', 13);
            $table->string('unidade_venda', 10);
            $table->unsignedInteger('categoria_id');
            $table->decimal('perc_icms', 10, 2)->default(0.00);
            $table->decimal('perc_pis', 10, 2)->default(0.00);
            $table->decimal('perc_cofins', 10, 2)->default(0.00);
            $table->decimal('perc_ipi', 10, 2)->default(0.00);
            $table->string('cst_csosn', 3)->default('');
            $table->string('cst_pis', 3)->default('');
            $table->string('cst_cofins', 3)->default('');
            $table->string('cst_ipi', 3)->default('');
            $table->timestamps();
            $table->decimal('qtd_unidade', 10, 2)->default(0.00)->comment("aqui é porque tem produtos que vende a unidade exemplo posso comprar 1 ou vários comprimido");
            
            $table->foreign('categoria_id', 'produtos_categoria_id_foreign')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id', 'produtos_ibfk_1')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
