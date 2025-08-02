<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemVenda
 * 
 * @property int $id
 * @property int $venda_id
 * @property int|null $produto_id
 * @property float $quantidade
 * @property float|null $quantidadeUnidade
 * @property string|null $tipo_venda
 * @property float $valor
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property ProdutoFamarcium|null $produto_famarcium
 * @property Venda $venda
 *
 * @package App\Models
 */
class ItemVenda extends Model
{
	protected $table = 'item_vendas';

	protected $casts = [
		'venda_id' => 'int',
		'produto_id' => 'int',
		'quantidade' => 'float',
		'quantidadeUnidade' => 'float',
		'valor' => 'float'
	];

	protected $fillable = [
		'venda_id',
		'produto_id',
		'quantidade',
		'quantidadeUnidade',
		'tipo_venda',
		'valor'
	];


	public function produtofamarcia(){
		return $this->belongsTo(ProdutoFamarcia::class, 'produto_id');
	}

	public function venda()
	{
		return $this->belongsTo(Venda::class);
	}
}
