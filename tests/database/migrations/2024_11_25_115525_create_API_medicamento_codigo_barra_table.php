<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAPIMedicamentoCodigoBarraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('API_medicamento_codigo_barra', function (Blueprint $table) {
            $table->string('PRODUTO', 512)->nullable();
            $table->string('INDICAÇÃO', 512)->nullable();
            $table->bigInteger('CODIGO_DE_BARRAS')->primary();
            $table->integer('ITEM')->nullable();
            $table->string('FABRICANTE', 150)->nullable();
            $table->text('APRESENTACAO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('API_medicamento_codigo_barra');
    }
}
