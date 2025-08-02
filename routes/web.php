<?php


// use App\Http\Controllers\CobrancaAsaasController;
use App\Http\Controllers\VendaController;
use App\Http\Resources\Remedio;
use App\Http\Controllers\TestevendaController;
use App\Http\Resources\remedioCollection;
use App\Models\Apiproduto;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;//para email 
// use App\Http\Controllers\ClienteAsaasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (Request $request) {

    //comparando se na tabela user tem coluna role verificando de existe um registro do tipo admin
    if((auth()->user()->role == "user")){
	
		// $cliente_id={{ session('cliente_id') }};
		// dd($cliente_id);

		// Blog::latest()->limit(5)->get();

		$cliente_id=User::latest()->limit(1)->get('cliente_id');
	  
        return view('dashboard.pagina_cobranca',compact('cliente_id'));

    }

	if ((auth()->user()->role == "aprovado")) {

		$clientes = User::join('clientes', 'clientes.user_id', '=', 'users.id')->where('users.id', auth()->user()->id)->get();

		$produtos = User::join('produto_famarcia', 'produto_famarcia.user_id', '=', 'users.id')->where('users.id', auth()->user()->id)->get();


		return view('dashboard.aprovado.aprovado',compact('clientes','produtos'));

	}

     //comparando se na tabela user tem coluna role verificando de existe um registro do tipo aluno
     if((auth()->user()->role == "plano_basico")){

        return view('dashboard.plano_basico.pagamentoAprovado');

    }

     //comparando se na tabela user tem coluna role verificando de existe um registro do tipo professor
     if((auth()->user()->role == "plano_medio") && (auth()->pagamento=="aprovado")){
		
        return view('dashboard.plano_medio.pagamentoAprovado');

    }

     //comparando se na tabela user tem coluna role verificando de existe um registro do tipo admin
     if((auth()->user()->role == "plano_avancado")){
		$titulo = "dashboard";
        return view('default',compact('titulo'));

    }
   
})->middleware(['auth', 'verified'])->middleware(['auth'])->name('dashboard');

// Route::get('/', function () {
// 	return redirect('/');
// });

Route::group(['prefix' => 'categorias'], function(){
	Route::get('/', 'CategoriaController@index')->middleware(['auth'])->name('categoria_index');
	Route::get('/new', 'CategoriaController@new')->middleware(['auth'])->name('categoria_nova');
	Route::get('/edit/{id}', 'CategoriaController@edit')->middleware(['auth'])->name('categoria_edit');

	Route::delete('/delete/{id}', 'CategoriaController@delete')->middleware(['auth'])->name('categoria_delete');
	Route::post('/save', 'CategoriaController@save')->middleware(['auth'])->name('categoria_save');
	Route::post('/update', 'CategoriaController@update')->middleware(['auth'])->name('categoria_update');
});

Route::group(['prefix' => 'produtos'], function(){
	Route::get('/', 'ProdutoController@index')->middleware(['auth'])->name('produto_index');
	Route::get('/new', 'ProdutoController@new')->middleware(['auth'])->name('produto_novo');
	Route::get('/edit/{id}', 'ProdutoController@edit')->middleware(['auth'])->name('produto_edit');

	Route::delete('/delete/{id}', 'ProdutoController@delete')->middleware(['auth'])->name('produto_delete');
	Route::post('/save', 'ProdutoController@save')->middleware(['auth'])->name('produto_save');
	Route::post('/update', 'ProdutoController@update')->middleware(['auth'])->name('produto_update');
});

Route::group(['prefix' => 'produtosfamarciaUnidade'], function(){
	Route::get('/', 'ProdutoFamarciaUnidadeController@index')->middleware(['auth'])->name('index_produto_unidade');
	Route::get('/produto/unidade', 'ProdutoFamarciaUnidadeController@new')->middleware(['auth'])->name('produto_unidade_novo');
	Route::get('/produtofamarciaUnidadeedit/{id}', 'ProdutoFamarciaUnidadeController@edit')->middleware(['auth'])->name('produto__unidade_edit');

	Route::delete('/produtofamarciaUnidadedelete/{id}', 'ProdutoFamarciaUnidadeController@delete')->middleware(['auth'])->name('produto_unidade_delete');
	Route::post('/save', 'ProdutoFamarciaUnidadeController@save')->middleware(['auth'])->name('produto_unidade_save');
	Route::put('/update', 'ProdutoFamarciaUnidadeController@update')->middleware(['auth'])->name('produto_unidade_update');
});

Route::group(['prefix' => 'Estoque'], function () {
	Route::get('/', 'EstoqueController@index')->middleware(['auth'])->name('index_estoque');

});
Route::group(['prefix' => 'produtosfamarciaCartela'], function(){
	Route::get('/', 'ProdutoFamarciaCartelaController@index_produto_famarcia_cartela')->middleware(['auth'])->name('index_produto_cartela');
	Route::get('/produto/cartela', 'ProdutoFamarciaCartelaController@create_produto_famarcia_cartela')->middleware(['auth'])->name('produto_cartela_novo');
	Route::get('/produtofamarciacartelaedit/{id}', 'ProdutoFamarciaCartelaController@edit_produto_famarcia_cartela')->middleware(['auth'])->name('produto__cartela_edit');

	Route::delete('/produtofamarciacarteladelete/{id}', 'ProdutoFamarciaCartelaController@delete_produto_famarcia_cartela')->middleware(['auth'])->name('produto_cartela_delete');
	Route::post('/save', 'ProdutoFamarciaCartelaController@store_produto_famarcia_cartela')->middleware(['auth'])->name('produto_cartela_save');
	Route::put('/update', 'ProdutoFamarciaCartelaController@update_produto_famarcia_cartela')->middleware(['auth'])->name('produto_cartela_update');
});

Route::group(['prefix' => 'cidades'], function(){
	Route::get('/', 'CidadeController@index')->middleware(['auth'])->name('cidade_index');
	Route::get('/new', 'CidadeController@new')->middleware(['auth'])->name('cidade_nova');
	Route::get('/edit/{id}', 'CidadeController@edit')->middleware(['auth'])->name('cidade_edit');
	Route::delete('/delete/{id}', 'CidadeController@delete')->middleware(['auth'])->name('cidade_delete');
	Route::post('/save', 'CidadeController@save')->middleware(['auth'])->name('cidade_save');
	Route::post('/update', 'CidadeController@update')->middleware(['auth'])->name(('cidade_update'));
});

Route::group(['prefix' => 'clientes'], function(){
	Route::get('/', 'ClienteController@index')->middleware(['auth'])->name('cliente_index');
	Route::get('/new', 'ClienteController@new')->middleware(['auth'])->name('cliente_novo');
	Route::get('/edit/{id}', 'ClienteController@edit')->middleware(['auth'])->name('cliente_edit');
	Route::get('/delete/{id}', 'ClienteController@delete')->middleware(['auth'])->name('cliente_delete');
	Route::post('/save', 'ClienteController@save')->middleware(['auth'])->name('cliente_save');
	Route::post('/update', 'ClienteController@update')->middleware(['auth'])->name('cliente_update');
});

Route::group(['prefix' => 'emitente'], function(){
	Route::get('/', 'EmitenteController@index')->middleware(['auth'])->name('emitente_index');
	Route::post('/save', 'EmitenteController@save')->middleware(['auth'])->name('emitente_save');
});

Route::group(['prefix' => 'vendas'], function(){
	Route::get('/', 'VendaController@index')->middleware(['auth'])->name('venda_index');
	Route::get('/new', 'VendaController@new')->middleware(['auth'])->name('venda_nova');
	Route::get('/show/{id}', 'VendaController@show')->middleware(['auth'])->name('venda_show');
	Route::post('/vendas/save', 'VendaController@save')->middleware(['auth'])->name('venda_save');
	Route::delete('/vendas/venda/delete/{id}', 'VendaController@delete')->middleware(['auth'])->name('venda_delete');
	Route::delete('/vendasUnidade/vendaUnidade/{id}', 'ItemVendaUnidadeController@deleteUnidade')->middleware(['auth'])->name('venda_unidade_delete');
	Route::delete('/vendasCartela/vendaCartela/{id}', 'ItemVendaCartelaController@deleteCartela')->middleware(['auth'])->name('venda_cartela_delete');
	
	// Route::get('/vendas/save', 'VendaController@save')->middleware(['auth'])->name('venda_save');
});

Route::group(['prefix' => 'vendasFarmaciaUniverso'], function(){
	Route::get('/', 'TemplateFarmaciaUniversoController@index')->middleware(['auth'])->name('venda_index_FarmaciaUniverso');
	Route::get('/new', 'TemplateFarmaciaUniversoController@new')->middleware(['auth'])->name('venda_nova_FarmaciaUniverso');
	Route::get('/show/{id}', 'TemplateFarmaciaUniversoController@show')->middleware(['auth'])->name('venda_show_FarmaciaUniverso');
	Route::post('/vendas/save', 'TemplateFarmaciaUniversoController@save')->middleware(['auth'])->name('venda_save_FarmaciaUniverso');
	Route::delete('/vendas/venda/delete/{id}', 'TemplateFarmaciaUniversoController@delete')->middleware(['auth'])->name('venda_delete_FarmaciaUniverso');
	Route::delete('/vendasUnidade/vendaUnidade/{id}', 'TemplateFarmaciaUniversoController@deleteUnidade')->middleware(['auth'])->name('venda_unidade_delete_FarmaciaUniverso');
	Route::delete('/vendasCartela/vendaCartela/{id}', 'TemplateFarmaciaUniversoController@deleteCartela')->middleware(['auth'])->name('venda_cartela_delete_FarmaciaUniverso');
	
	// Route::get('/vendas/save', 'VendaController@save')->middleware(['auth'])->name('venda_save');
});



// Route::post('order/productsByCategory', ['as' => 'apelidoDaRota', 'uses'=>'OrderController@productsByCategory']);
// Route::group(['prefix' => 'vendas'], function(){
// 	Route::get('/', 'VendaController@index')->middleware(['auth'])->name('venda_index');
// 	Route::get('/new', 'VendaController@new')->middleware(['auth'])->name('venda_nova');
// 	Route::get('/show/{id}', 'VendaController@show')->middleware(['auth'])->name('venda_show');
// 	Route::delete('venda/delete/{id}', 'VendaController@delete')->middleware(['auth'])->name('venda_delete');
// 	Route::post('/vendas/save', 'VendaController@save')->middleware(['auth'])->name('venda_save');
// 	// Route::get('/vendas/save', 'VendaController@save')->middleware(['auth'])->name('venda_save');
// });

Route::group(['prefix' => 'notafiscal'], function(){
	Route::get('/gerarXml/{id}', 'NotaFiscalController@gerarXml')->middleware(['auth'])->name('gerarXml');
	Route::post('/transmitir', 'NotaFiscalController@transmitir')->middleware(['auth'])->name('transmitir');

	Route::get('/imprimir/{id}', 'NotaFiscalController@imprimir')->middleware(['auth'])->name('imprimir');
	Route::get('/imprimirSimples/{id}', 'NotaFiscalController@imprimirSimples')->middleware(['auth'])->name('imprimirSimples');
	Route::get('/imprimirCorrecao/{id}', 'NotaFiscalController@imprimirCorrecao')->middleware(['auth'])->name('imprimirCorrecao');
	Route::get('/imprimirCancelamento/{id}', 'NotaFiscalController@imprimirCancelamento')->middleware(['auth'])->name('imprimirCancelamento');

	Route::get('/download/{id}', 'NotaFiscalController@download')->middleware(['auth'])->name('download');

	Route::post('/cartaCorrecao', 'NotaFiscalController@cartaCorrecao')->name('cartacorrecao');
	Route::post('/cancenlarNFe', 'NotaFiscalController@cancenlarNFe')->middleware(['auth'])->name('cancelarNFe');
});

Route::group(['prefix' => 'produto-famarcia'], function(){
	
	Route::get('/', 'ProdutoFamarciaController@index_produto_famarcia')->middleware(['auth'])->name('produto_famarcia_index');
	Route::get('formulario-produto-famarcia', 'ProdutoFamarciaController@create_produto_famarcia')->middleware(['auth'])->name('create_produto_famarcia');
	Route::get('/edit/{COD_BARRA}', 'ProdutoFamarciaController@edit_produto_famarcia')->middleware(['auth'])->name('edit_produto_famarcia');
	Route::delete('/delete/{id}', 'ProdutoFamarciaController@delete_produto_famarcia')->middleware(['auth'])->name('delete_produto_famarcia');
	Route::post('/save', 'ProdutoFamarciaController@store_produto_famarcia')->middleware(['auth'])->name('store_produto_famarcia');
	Route::put('/update/{id}', 'ProdutoFamarciaController@update_produto_famarcia')->middleware(['auth'])->name('update_produto_famarcia');
	Route::post('/darBaixa/{id}','ProdutoFamarciaController@darBaixa')->middleware(['auth'])->name('dar_Baixa');
});

Route::group(['prefix' => 'gasto'], function () {

	Route::get('/', 'GastoController@index_gasto')->middleware(['auth'])->name('gasto_index');
	Route::get('formulario-produto-famarcia', 'GastoController@create_gasto')->middleware(['auth'])->name('gasto_famarcia');
	Route::get('/edit/{COD_BARRA}', 'GastoController@edit_gasto')->middleware(['auth'])->name('edit_gasto');
	Route::delete('/delete/{id}', 'GastoController@delete_gasto')->middleware(['auth'])->name('delete_gasto');
	Route::post('/save', 'GastoController@store_gasto')->middleware(['auth'])->name('store_gasto');
	Route::put('/update/{id}', 'GastoController@update_gasto')->middleware(['auth'])->name('update_gasto');
});

Route::group(['prefix'=>'Fiado'], function(){
	Route::get('notas/existente','FiadoController@nota_existente_fiado')->middleware(['auth'])->name('nota_existente_fiado');
	Route::get('/index_fiado','FiadoController@index_fiado')->middleware(['auth'])->name('index_fiado');
	Route::get('/edit/{id}', 'FiadoController@edit_fiado')->middleware(['auth'])->name('edit_fiado');
	Route::delete('/delete_fiado/{id}','FiadoController@delete_fiado')->middleware(['auth'])->name('delete_fiado');
	Route::put('/update/{id}', 'FiadoController@update_fiado')->middleware(['auth'])->name('update_fiado');
	Route::put('/update_nota_existente/{id}', 'FiadoController@update_fiado_existente')->middleware(['auth'])->name('update_fiado_existente');
	Route::get('/notaexistente/{id}','FiadoController@edit_fiado_existente')->middleware(['auth'])->name('edit_fiado_existente');
	// Route::post('/notaexistente/{id}','FiadoController@edit_fiado_existente')->middleware(['auth'])->name('edit_fiado_existente');
	
	Route::get('/descontarnota/{id}','FiadoController@descontarnota')->middleware(['auth'])->name('descontar_nota');
	// Route::post('/descontarnota/{id}','FiadoController@descontarnota')->middleware(['auth'])->name('descontar_nota');
	Route::post('/save/nota','FiadoController@save')->middleware(['auth'])->name('save_post');
	// Route::get('/save/nota','FiadoController@save')->middleware(['auth'])->name('save_post');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// para email
// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
//  })->middleware('auth')->name('verification.notice');

//  Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
 
//    return redirect('/home');
//  })->middleware(['auth', 'signed'])->name('verification.verify');

//  Route::post('/email/verification-notification', function (Request $request) {
//      $request->user()->sendEmailVerificationNotification();
 
//    return back()->with('message', 'Verification link sent!');
//  })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// fim para email 

// cliente asaas
 Route::group(['prefix' => 'clienteasaas'], function(){
Route::get('/CadastroClienteAsaas', 'ClienteAsaasController@create')->name('cadastroclienteasaas');
	
 });

 Route::any("pesquisarCaixaCliente",[VendaController::class,'pesquisarCaixaCliente']);
 Route::any("pesquisarCaixaSemCliente",[VendaController::class,'pesquisarCaixaSemCliente']);
 Route::any("pesquisarUnidadeCliente",[VendaController::class,'pesquisarUnidadeCliente']);
 Route::any("pesquisarUnidadeSemCliente",[VendaController::class,'pesquisarUnidadeSemCliente']);
 Route::any("pesquisarCartelaCliente",[VendaController::class,'pesquisarCartelaCliente']);
 Route::any("pesquisarCartelaSemCliente",[VendaController::class,'pesquisarCartelaSemCliente']);
 Route::get('/gerar-pdf-conta', [VendaController::class, 'gerarPdf'])->name('vendas.gerar-pdf');
 Route::get('/venda-pdf-show/cliente/Caixa/{id}', [VendaController::class,'showpdf'])->name('vendas_show_caixa_pdf');
 Route::get('/search', 'VendaController@index')->name('pesquisar_Cartela');
 Route::get('/venda-pdf-show/cliente/Cartela/{id}', [VendaController::class,'showpdf_cartela'])->name('vendas_show_cartela_cliente_pdf');
 Route::get('/venda-pdf-show/cliente/Unidade/{id}', [VendaController::class,'showpdf_unidade'])->name('vendas_show_unidade_pdf');

 



Route::get('/apimedicamentoshow/{registro}/json/', 'apiprodutoController@show');

Route::get('/api_medicamento_com_codigo_barra_show/{CODIGO_DE_BARRAS}/json/', 'ApiMedicamentoCodigoBarras@show');



Route::resource('clienteAsaas',ClienteAsaasController::class);
Route::resource('cobrancaAsaas',CobrancaAsaasController::class);

// Excel 
Route::get('/import-excel', 'ExcelImportController@index')->middleware(['auth'])->name('import.excel');
Route::post('/import-excel', 'ExcelImportController@import');

// Auth::routes(['verify' => true]);

/*****************************************************Manutenção***************************************************************************************/

Route::group(['prefix' => 'TesteVenda'], function () {
	Route::get('/Testevenda', 'TestevendaController@index')->middleware(['auth'])->name('index_teste');

});

Route::group(['prefix' => 'Testeproduto-famarcia'], function () {

	Route::get('/', 'TesteProdutoFamarciaController@index_produto_famarcia')->middleware(['auth'])->name('Testeproduto_famarcia_index');
	Route::get('Testeformulario-produto-famarcia', 'TesteProdutoFamarciaController@create_produto_famarcia')->middleware(['auth'])->name('Testecreate_produto_famarcia');
	Route::get('/Testeedit/{COD_BARRA}', 'TesteProdutoFamarciaController@edit_produto_famarcia')->middleware(['auth'])->name('Testeedit_produto_famarcia');
	Route::delete('/Testedelete/{id}', 'TesteProdutoFamarciaController@delete_produto_famarcia')->middleware(['auth'])->name('Testedelete_produto_famarcia');
	Route::post('/Testesave', 'TesteProdutoFamarciaController@store_produto_famarcia')->middleware(['auth'])->name('Testestore_produto_famarcia');
	Route::put('/Testeupdate/{id}', 'TesteProdutoFamarciaController@update_produto_famarcia')->middleware(['auth'])->name('Testeupdate_produto_famarcia');
});

Route::group(['prefix'=> 'Caixa'], function(){

	Route::get('/','EntradaSaidaController@index')->middleware(['auth'])->name('entradasaida_index');
});

Route::group(['prefix'=> 'Deposito'], function () {
	Route::get('/index','DepositoController@index')->middleware(['auth'])->name('deposito_index');
	Route::get('novo','DepositoController@create')->middleware(['auth'])->name('deposito_novo');
	Route::get('editar','DepositoController@Editar')->middleware(['auth'])->name('deposito_editar');
	Route::post('/update','DepositoController@Update')->middleware(['auth'])->name('deposito_update');
	Route::post('store','DepositoController@store')->middleware(['auth'])->name('deposito_store');
});

Route::group(['prefix' => 'Saque'], function () {
	Route::get('/index', 'SaqueController@index')->middleware(['auth'])->name('saque_index');
	Route::get('novo', 'SaqueController@create')->middleware(['auth'])->name('saque_novo');
	Route::get('editar', 'SaqueController@Editar')->middleware(['auth'])->name('saque_editar');
	Route::post('/update', 'SaqueController@Update')->middleware(['auth'])->name('saque_update');
	Route::post('store', 'SaqueController@store')->middleware(['auth'])->name('saque_store');
});




/*****************************************************fim da Manutenção*********************************************************************************/ 

 require __DIR__.'/auth.php'; //aqui para cadastro de novos usuarios não pode retirar 

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
