<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Deposito
 * 
 * @property int $id
 * @property float $valor
 * @property string|null $descricao
 * @property int $entrada_saida_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property EntradaSaida $entrada_saida
 *
 * @package App\Models
 */
class Deposito extends Model
{
	protected $table = 'deposito';

	protected $casts = [
		'valor' => 'float',
		'entrada_saida_id' => 'int'
	];

	protected $fillable = [
		'valor',
		'descricao',
		'entrada_saida_id'
	];

	public function entrada_saida()
	{
		return $this->belongsTo(EntradaSaida::class, 'entrada_saida_id');
	}
}
