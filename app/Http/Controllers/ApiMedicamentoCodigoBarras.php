<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApiMedicamentoCodigoBarraResources;
use App\Models\APIMedicamentoCodigoBarra;
use Illuminate\Http\Request;

class ApiMedicamentoCodigoBarras extends Controller
{
  
    public function show($CODIGO_DE_BARRAS){
        
        // return ResponseClass::sendResponse(new ProductResource($product),'',200);
        $ApiProdutoComBarra = APIMedicamentoCodigoBarra::find($CODIGO_DE_BARRAS);
        return new ApiMedicamentoCodigoBarraResources($ApiProdutoComBarra);
       
    }

    

}

