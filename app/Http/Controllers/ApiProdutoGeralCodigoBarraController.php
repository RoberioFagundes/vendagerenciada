<?php

namespace App\Http\Controllers;
use App\Models\ApiPRODUTOSGERAL;
use App\Http\Resources\apiProdutoGeralResource;

use Illuminate\Http\Request;

class ApiProdutoGeralCodigoBarraController extends Controller
{
    //

    public function show($ApiProdutoGeralCodigoBarra) {
        // return ResponseClass::sendResponse(new ProductResource($product),'',200);
        $registromedicamento = ApiPRODUTOSGERAL::find($ApiProdutoGeralCodigoBarra);
        return new apiProdutoGeralResource($registromedicamento);

        // $registromedicamento = $this ->productRepositoryInterface-> getById ( $ApiProdutoGeralCodigoBarra ); 

        // return  ApiPRODUTOSGERAL :: sendResponse ( new  ApiPRODUTOSGERAL (  $registromedicamento ), '' , 200 ); 
    }

}
