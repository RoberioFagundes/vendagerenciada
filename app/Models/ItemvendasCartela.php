<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemvendasCartela
 * 
 * @property int $id
 * @property int $venda_id
 * @property int|null $produtofarmaciaCartela_id
 * @property int|null $user_id
 * @property float|null $quantidadecartela
 * @property string|null $tipo_venda
 * @property float $valor
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User|null $user
 * @property Venda $venda
 * @property ProdutoFamarciaCartela|null $produto_famarcia_cartela
 *
 * @package App\Models
 */
class ItemvendasCartela extends Model
{
	protected $table = 'itemvendas_cartela';

	protected $casts = [
		'venda_id' => 'int',
		'produtofarmaciaCartela_id' => 'int',
		'user_id' => 'int',
		'quantidadecartela' => 'float',
		'valor' => 'float'
	];

	protected $fillable = [
		'venda_id',
		'produtofarmaciaCartela_id',
		'user_id',
		'quantidadecartela',
		'tipo_venda',
		'valor'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function venda()
	{
		return $this->belongsTo(Venda::class);
	}

	public function produto_famarcia_cartela()
	{
		return $this->belongsTo(ProdutoFamarciaCartela::class, 'produtofarmaciaCartela_id');
	}
}
