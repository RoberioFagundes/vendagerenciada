<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposito', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor', 10, 2);
            $table->text('descricao')->nullable();
            $table->unsignedBigInteger('entrada_saida_id');
            $table->timestamps();
            
            $table->foreign('entrada_saida_id', 'deposito_ibfk_1')->references('id')->on('Entrada_Saida')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposito');
    }
}
