<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CodePhix\Asaas\Asaas;

class AsaasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $asaas = new Asaas('$aact_YTU5YTE0M2M2N2I4MTliNzk0YTI5N2U5MzdjNWZmNDQ6OjAwMDAwMDAwMDAwMDA0Nzk3MDI6OiRhYWNoX2Q4MzJkOTY4LTJlMTQtNDRlNS04NDU1LTQ3YjQ1YTFmYWZlMg==');
        $assinaturas = $asaas->Assinatura()->getAll();

        return view('administrador_sistema.index_administrador_sistema',compact('assinaturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAssinatura(Request $request)
    {
        //
        $asaas = new Asaas('$aact_YTU5YTE0M2M2N2I4MTliNzk0YTI5N2U5MzdjNWZmNDQ6OjAwMDAwMDAwMDAwMDA0Nzk3MDI6OiRhYWNoX2Q4MzJkOTY4LTJlMTQtNDRlNS04NDU1LTQ3YjQ1YTFmYWZlMg==');
        $dadosAssinatura = array(
            "billingType" =>$request->all('CREDIT_CARD'),
            "nextDueDate" =>$request->all('vencimento_boleto'),
            "value"=>$request->all('valor_boleto'),
            "cycle"=>$request->all('ciclo'),//mensal, anual,
            "dueDateLimitDays"=>30
        );
        $asaas->Assinatura()->create($dadosAssinatura);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
