<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableProdutoFamarciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('produto_famarcia', function (Blueprint $table) {
            $table->decimal('valor_unitario',6,2)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('produto_famarcia', function (Blueprint $table) {
            $table->dropColumn('valor_unitario',6,2)->nullable(); 
        });
    }
}
