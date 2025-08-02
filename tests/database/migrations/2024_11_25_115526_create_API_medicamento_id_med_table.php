<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAPIMedicamentoIdMedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('API_medicamento_id_med', function (Blueprint $table) {
            $table->bigInteger('id_med')->primary();
            $table->string('nome', 200)->nullable();
            $table->decimal('preco', 10, 2)->nullable();
            $table->text('lab')->nullable();
            $table->text('uni_emb')->nullable();
            $table->string('formato', 50)->nullable();
            $table->text('dosagem')->nullable();
            $table->decimal('quantidade', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('API_medicamento_id_med');
    }
}
