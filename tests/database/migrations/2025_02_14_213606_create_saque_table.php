<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saque', function (Blueprint $table) {
            $table->id();
            $table->text('descricao');
            $table->timestamps();
            $table->unsignedBigInteger('entrada_saida_id')->nullable();
            $table->decimal('valor', 10, 2);
            
            $table->foreign('entrada_saida_id', 'saque_ibfk_1')->references('id')->on('Entrada_Saida')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saque');
    }
}
