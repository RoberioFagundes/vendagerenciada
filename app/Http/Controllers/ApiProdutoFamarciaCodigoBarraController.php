<?php

namespace App\Http\Controllers;
use App\Models\ApiMedicamentoCodigoBarra;
use Illuminate\Http\Request;

class ApiProdutoFamarciaCodigoBarraController extends Controller
{
    //
    public function index()
    {

        $produtofamarciacodigobarra = ApiMedicamentoCodigoBarra::all();
        return response()->json([
            'status' => true,
            'produto' => $produtofamarciacodigobarra
        ]);
    }
}
