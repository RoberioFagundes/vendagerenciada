<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EntradaSaida
 * 
 * @property int $id
 * @property float $valortotalvenda
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property int|null $venda_id
 * @property int|null $recebimento_fiado_id
 * @property int|null $user_id
 * 
 * @property Venda|null $venda
 * @property RecebimentoFiado|null $recebimento_fiado
 * @property User|null $user
 * @property Collection|Deposito[] $depositos
 * @property Collection|Saque[] $saques
 *
 * @package App\Models
 */
class EntradaSaida extends Model
{
	protected $table = 'Entrada_Saida';

	protected $casts = [
		'valortotalvenda' => 'float',
		'venda_id' => 'int',
		'recebimento_fiado_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'valortotalvenda',
		'venda_id',
		'recebimento_fiado_id',
		'user_id'
	];

	public function venda()
	{
		return $this->belongsTo(Venda::class);
	}

	public function recebimento_fiado()
	{
		return $this->belongsTo(RecebimentoFiado::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function depositos()
	{
		return $this->hasMany(Deposito::class, 'entrada_saida_id');
	}

	public function saques()
	{
		return $this->hasMany(Saque::class, 'entrada_saida_id');
	}
}
