<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemvendasUnidade
 * 
 * @property int $id
 * @property int $venda_id
 * @property int|null $produtofarmaciaUnidade_id
 * @property int|null $user_id
 * @property float|null $quantidadeUnidade
 * @property string|null $tipo_venda
 * @property float $valor
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Venda $venda
 * @property User|null $user
 * @property ProdutoFamarciaUnidade|null $produto_famarcia_unidade
 *
 * @package App\Models
 */
class ItemvendasUnidade extends Model
{
	protected $table = 'itemvendas_unidade';

	protected $casts = [
		'venda_id' => 'int',
		'produtofarmaciaUnidade_id' => 'int',
		'user_id' => 'int',
		'quantidadeUnidade' => 'float',
		'valor' => 'float'
	];

	protected $fillable = [
		'venda_id',
		'produtofarmaciaUnidade_id',
		'user_id',
		'quantidadeUnidade',
		'tipo_venda',
		'valor'
	];

	public function venda()
	{
		return $this->belongsTo(Venda::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function produto_famarcia_unidade()
	{
		return $this->belongsTo(ProdutoFamarciaUnidade::class, 'produtofarmaciaUnidade_id');
	}
}
