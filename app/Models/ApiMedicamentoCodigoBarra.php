<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class APIMedicamentoCodigoBarra
 * 
 * @property string|null $PRODUTO
 * @property string|null $INDICAÇÃO
 * @property int $CODIGO_DE_BARRAS
 * @property int|null $ITEM
 * @property string|null $FABRICANTE
 * @property string|null $APRESENTACAO
 *
 * @package App\Models
 */
class APIMedicamentoCodigoBarra extends Model
{
	protected $table = 'API_medicamento_codigo_barra';
	protected $primaryKey = 'CODIGO_DE_BARRAS';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CODIGO_DE_BARRAS' => 'int',
		'ITEM' => 'int'
	];

	protected $fillable = [
		'PRODUTO',
		'INDICAÇÃO',
		'ITEM',
		'FABRICANTE',
		'APRESENTACAO'
	];
}
