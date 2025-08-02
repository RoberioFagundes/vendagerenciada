<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Saque
 * 
 * @property int $id
 * @property string $descricao
 * @property Carbon $updated_at
 * @property Carbon $created_at
 * @property int|null $entrada_saida_id
 * @property float $valor
 * 
 * @property EntradaSaida|null $entrada_saida
 *
 * @package App\Models
 */
class Saque extends Model
{
	protected $table = 'saque';

	protected $casts = [
		'entrada_saida_id' => 'int',
		'valor' => 'float'
	];

	protected $fillable = [
		'descricao',
		'entrada_saida_id',
		'valor'
	];

	public function entrada_saida()
	{
		return $this->belongsTo(EntradaSaida::class, 'entrada_saida_id');
	}
}
