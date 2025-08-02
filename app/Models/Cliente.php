<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property string|null $nomeCliente
 * @property string|null $rua
 * @property string|null $numero
 * @property string|null $bairro
 * @property string|null $complemento
 * @property string|null $cep
 * @property string|null $telefone
 * @property string|null $cpf_cnpj
 * @property string|null $ie_rg
 * @property int|null $contribuinte
 * @property int|null $cidade_id
 * @property int|null $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Cidade|null $cidade
 * @property User|null $user
 * @property Collection|Venda[] $vendas
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'clientes';

	protected $casts = [
		'contribuinte' => 'int',
		'cidade_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'nomeCliente',
		'rua',
		'numero',
		'bairro',
		'complemento',
		'cep',
		'telefone',
		'cpf_cnpj',
		'ie_rg',
		'contribuinte',
		'cidade_id',
		'user_id'
	];

	public function cidade()
	{
		return $this->belongsTo(Cidade::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	

}
