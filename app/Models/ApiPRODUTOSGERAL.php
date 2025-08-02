<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ApiPRODUTOSGERAL
 * 
 * @property int $id
 * @property string|null $descricao
 * @property string|null $descricao_semacento
 * @property string|null $peso
 * @property string|null $ncm
 * @property string|null $cest_codigo
 * @property string|null $quantidade_embalagem
 * @property string|null $marca
 * @property string|null $categoria
 *
 * @package App\Models
 */
class ApiPRODUTOSGERAL extends Model
{
	protected $table = 'Api_PRODUTOS_GERAL';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'descricao',
		'descricao_semacento',
		'peso',
		'ncm',
		'cest_codigo',
		'quantidade_embalagem',
		'marca',
		'categoria'
	];
}
