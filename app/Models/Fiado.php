<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Fiado
 * 
 * @property int $id
 * @property int|null $venda_id
 * @property float|null $valor_pago
 * @property float|null $valor_total
 * @property string|null $forma_pagamento
 * @property int|null $prazo
 * @property int|null $cliente_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int|null $idFormaPagamento
 * 
 * @property Venda|null $venda
 * @property FaturaVenda|null $fatura_venda
 * @property Cliente|null $cliente
 *
 * @package App\Models
 */
class Fiado extends Model
{
	protected $table = 'fiado';

	protected $casts = [
		'venda_id' => 'int',
		'valor_pago' => 'float',
		'valor_total' => 'float',
		'prazo' => 'int',
		'cliente_id' => 'int',
		'idFormaPagamento' => 'int'
	];

	protected $fillable = [
		'venda_id',
		'valor_pago',
		'valor_total',
		'forma_pagamento',
		'prazo',
		'cliente_id',
		'idFormaPagamento'
	];

	public function venda()
	{
		return $this->belongsTo(Venda::class);
	}

	public function fatura_venda()
	{
		return $this->belongsTo(FaturaVenda::class, 'idFormaPagamento');
	}

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}
}
