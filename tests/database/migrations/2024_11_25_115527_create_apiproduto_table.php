<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiprodutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apiproduto', function (Blueprint $table) {
            $table->bigInteger('id')->primary()->comment("são os registros do remedios");
            $table->string('substancia', 300)->nullable();
            $table->string('cnpj', 25)->nullable();
            $table->string('laboratorio', 300)->nullable();
            $table->string('codigoGgrem', 50)->nullable();
            $table->bigInteger('EAN_1')->nullable();
            $table->bigInteger('EAN_2')->nullable();
            $table->bigInteger('EAN_3')->nullable();
            $table->string('produto', 300)->nullable();
            $table->text('apresentacao')->nullable();
            $table->text('classeTerapeutica')->nullable();
            $table->string('tipoProduto', 50)->nullable();
            $table->string('regimePreco', 500)->nullable();
            $table->string('PFSemImpostos', 50)->nullable();
            $table->decimal('PF_0', 10, 2)->nullable();
            $table->decimal('PF_12', 10, 2)->nullable();
            $table->decimal('PF_12_ALC', 10, 2)->nullable();
            $table->decimal('PF_17', 10, 2)->nullable();
            $table->decimal('PF17_ALC', 10, 2)->nullable();
            $table->decimal('PF_17_5', 10, 2)->nullable();
            $table->decimal('PF_17_5_ALC', 10, 2)->nullable();
            $table->decimal('PF_18', 10, 2)->nullable();
            $table->decimal('PF_18_ALC', 10, 2)->nullable();
            $table->decimal('PF_19', 10, 2)->nullable();
            $table->decimal('PF_19_ALC', 10, 2)->nullable();
            $table->decimal('PF_20', 10, 2)->nullable();
            $table->decimal('PF_20_ALC', 10, 2)->nullable();
            $table->decimal('PF_21', 10, 2)->nullable();
            $table->decimal('PF_21_ALC', 10, 2)->nullable();
            $table->decimal('PF_22', 10, 2)->nullable();
            $table->decimal('PF_22_ALC', 10, 2)->nullable();
            $table->decimal('PMC_Sem_Impostos', 10, 2)->nullable();
            $table->decimal('PMC', 10, 2)->nullable();
            $table->decimal('PMC_12', 10, 2)->nullable();
            $table->decimal('PMC_12_ALC', 10, 2)->nullable();
            $table->decimal('PMC_17', 10, 2)->nullable();
            $table->decimal('PMC_17_ALC', 10, 2)->nullable();
            $table->decimal('PMC_17_5', 10, 2)->nullable();
            $table->decimal('PMC_17_5_ALC', 10, 2)->nullable();
            $table->decimal('PMC_18', 10, 2)->nullable();
            $table->decimal('PMC_18_ALC', 10, 2)->nullable();
            $table->decimal('PMC_19', 10, 2)->nullable();
            $table->decimal('PMC_19_ALC', 10, 2)->nullable();
            $table->decimal('PMC_20', 10, 2)->nullable();
            $table->decimal('PMC_20_ALC', 10, 2)->nullable();
            $table->decimal('PMC_21', 10, 2)->nullable();
            $table->decimal('PMC_21_ALC', 10, 2)->nullable();
            $table->decimal('PMC_22', 10, 2)->nullable();
            $table->decimal('PMC_22_ALC', 10, 2)->nullable();
            $table->string('restricao_hospital', 50)->nullable();
            $table->string('CAP', 50)->nullable();
            $table->string('CONFAZ_87', 50)->nullable();
            $table->string('ICMS_0', 50)->nullable();
            $table->string('ANÁLISE_RECURSAL', 50)->nullable();
            $table->string('LISTA_DE_CONCESSÃO_DE_CRÉDITO_TRIBUTÁRIO_PIS_COFINS', 50)->nullable();
            $table->string('COMERCIALIZAÇAO_2022', 50)->nullable();
            $table->string('TARJA', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apiproduto');
    }
}
