<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FiadoVenda
 * 
 * @property int $id
 * @property float|null $valor_pago
 * @property float|null $valor_total
 * @property string|null $forma_pagamento
 * @property int|null $prazo
 * @property Carbon|null $vencimento
 * @property int|null $venda_id
 * @property int|null $cliente_id
 * @property int|null $idFormaPagamento
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $user_id
 * 
 * @property Cliente|null $cliente
 * @property Venda|null $venda
 * @property FaturaVenda|null $fatura_venda
 * @property User $user
 * @property Collection|RecebimentoFiado[] $recebimento_fiados
 *
 * @package App\Models
 */
class FiadoVenda extends Model
{
	protected $table = 'fiado_venda';

	protected $casts = [
		'valor_pago' => 'float',
		'valor_total' => 'float',
		'prazo' => 'int',
		'vencimento' => 'datetime',
		'venda_id' => 'int',
		'cliente_id' => 'int',
		'idFormaPagamento' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'valor_pago',
		'valor_total',
		'forma_pagamento',
		'prazo',
		'vencimento',
		'venda_id',
		'cliente_id',
		'idFormaPagamento',
		'user_id'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}

	public function venda()
	{
		return $this->belongsTo(Venda::class);
	}

	public function fatura_venda()
	{
		return $this->belongsTo(FaturaVenda::class, 'idFormaPagamento');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function recebimento_fiados()
	{
		return $this->hasMany(RecebimentoFiado::class);
	}
}
