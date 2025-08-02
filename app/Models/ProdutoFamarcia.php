<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProdutoFamarcium
 * 
 * @property int $id
 * @property string $COD_BARRA
 * @property string|null $substancia
 * @property string|null $indicacao
 * @property string|null $cnpj
 * @property string|null $laboratorio
 * @property string|null $codigoGgrem
 * @property int $registro_ms
 * @property int|null $EAN_1
 * @property int|null $EAN_2
 * @property int|null $EAN_3
 * @property string|null $produto
 * @property string|null $apresentacao
 * @property string|null $classeTerapeutica
 * @property string|null $tipoProduto
 * @property string|null $regimePreco
 * @property string|null $PFSemImpostos
 * @property float|null $PF_0
 * @property float|null $PF_12
 * @property float|null $PF_12_ALC
 * @property float|null $PF_17
 * @property float|null $PF17_ALC
 * @property float|null $PF_17_5
 * @property float|null $PF_17_5_ALC
 * @property float|null $PF_18
 * @property float|null $PF_18_ALC
 * @property float|null $PF_19
 * @property float|null $PF_19_ALC
 * @property float|null $PF_20
 * @property float|null $PF_20_ALC
 * @property float|null $PF_21
 * @property float|null $PF_21_ALC
 * @property float|null $PF_22
 * @property float|null $PF_22_ALC
 * @property float|null $PMC_Sem_Impostos
 * @property float|null $PMC
 * @property float|null $PMC_12
 * @property float|null $PMC_12_ALC
 * @property float|null $PMC_17
 * @property float|null $PMC_17_ALC
 * @property float|null $PMC_17_5
 * @property float|null $PMC_17_5_ALC
 * @property float|null $PMC_18
 * @property float|null $PMC_18_ALC
 * @property float|null $PMC_19
 * @property float|null $PMC_19_ALC
 * @property float|null $PMC_20
 * @property float|null $PMC_20_ALC
 * @property float|null $PMC_21
 * @property float|null $PMC_21_ALC
 * @property float|null $PMC_22
 * @property float|null $PMC_22_ALC
 * @property string|null $restricao_hospital
 * @property string|null $CAP
 * @property string|null $CONFAZ_87
 * @property string|null $ICMS_0
 * @property string|null $ANÁLISE_RECURSAL
 * @property string|null $LISTA_DE_CONCESSÃO_DE_CRÉDITO_TRIBUTÁRIO_PIS_COFINS
 * @property string|null $COMERCIALIZAÇAO_2022
 * @property string|null $TARJA
 * @property float|null $QTD_PRODUTO
 * @property float|null $QTD_PRODUTO_UNIDADE
 * @property float|null $valor_venda
 * @property float $valor_produto
 * @property float $valor_unitario
 * @property int|null $USER_ID
 * 
 * @property User|null $user
 *
 * @package App\Models
 */
class ProdutoFamarcia extends Model
{
	
	protected $table = 'produto_famarcia';
	public $timestamps = false;

	protected $casts = [
		'registro_ms' => 'int',
		'EAN_1' => 'int',
		'EAN_2' => 'int',
		'EAN_3' => 'int',
		'PF_0' => 'float',
		'PF_12' => 'float',
		'PF_12_ALC' => 'float',
		'PF_17' => 'float',
		'PF17_ALC' => 'float',
		'PF_17_5' => 'float',
		'PF_17_5_ALC' => 'float',
		'PF_18' => 'float',
		'PF_18_ALC' => 'float',
		'PF_19' => 'float',
		'PF_19_ALC' => 'float',
		'PF_20' => 'float',
		'PF_20_ALC' => 'float',
		'PF_21' => 'float',
		'PF_21_ALC' => 'float',
		'PF_22' => 'float',
		'PF_22_ALC' => 'float',
		'PMC_Sem_Impostos' => 'float',
		'PMC' => 'float',
		'PMC_12' => 'float',
		'PMC_12_ALC' => 'float',
		'PMC_17' => 'float',
		'PMC_17_ALC' => 'float',
		'PMC_17_5' => 'float',
		'PMC_17_5_ALC' => 'float',
		'PMC_18' => 'float',
		'PMC_18_ALC' => 'float',
		'PMC_19' => 'float',
		'PMC_19_ALC' => 'float',
		'PMC_20' => 'float',
		'PMC_20_ALC' => 'float',
		'PMC_21' => 'float',
		'PMC_21_ALC' => 'float',
		'PMC_22' => 'float',
		'PMC_22_ALC' => 'float',
		'QTD_PRODUTO' => 'float',
		'QTD_PRODUTO_UNIDADE' => 'float',
		'valor_venda' => 'float',
		'valor_produto' => 'float',
		'valor_unitario'=>'float',
		'USER_ID' => 'int'
	];

	protected $fillable = [
		'COD_BARRA',
		'substancia',
		'indicacao',
		'cnpj',
		'laboratorio',
		'codigoGgrem',
		'registro_ms',
		'EAN_1',
		'EAN_2',
		'EAN_3',
		'produto',
		'apresentacao',
		'classeTerapeutica',
		'tipoProduto',
		'regimePreco',
		'PFSemImpostos',
		'PF_0',
		'PF_12',
		'PF_12_ALC',
		'PF_17',
		'PF17_ALC',
		'PF_17_5',
		'PF_17_5_ALC',
		'PF_18',
		'PF_18_ALC',
		'PF_19',
		'PF_19_ALC',
		'PF_20',
		'PF_20_ALC',
		'PF_21',
		'PF_21_ALC',
		'PF_22',
		'PF_22_ALC',
		'PMC_Sem_Impostos',
		'PMC',
		'PMC_12',
		'PMC_12_ALC',
		'PMC_17',
		'PMC_17_ALC',
		'PMC_17_5',
		'PMC_17_5_ALC',
		'PMC_18',
		'PMC_18_ALC',
		'PMC_19',
		'PMC_19_ALC',
		'PMC_20',
		'PMC_20_ALC',
		'PMC_21',
		'PMC_21_ALC',
		'PMC_22',
		'PMC_22_ALC',
		'restricao_hospital',
		'CAP',
		'CONFAZ_87',
		'ICMS_0',
		'ANÁLISE_RECURSAL',
		'LISTA_DE_CONCESSÃO_DE_CRÉDITO_TRIBUTÁRIO_PIS_COFINS',
		'COMERCIALIZAÇAO_2022',
		'TARJA',
		'QTD_PRODUTO',
		'QTD_PRODUTO_UNIDADE',
		'valor_venda',
		'valor_produto',
		'valor_unitario',
		'USER_ID'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'USER_ID');
	}

}
