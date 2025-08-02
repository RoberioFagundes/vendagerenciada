<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CodePhix\Asaas\Asaas;

class ClienteAsaasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cliente_asaas.create_cliente_asaas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // try {
        //     //code...
        // } catch (\Throwable $th) {
        //     //throw $th;
        // }
        $asaas = new Asaas('$aact_YTU5YTE0M2M2N2I4MTliNzk0YTI5N2U5MzdjNWZmNDQ6OjAwMDAwMDAwMDAwMDA0Nzk3MDI6OiRhYWNoX2Q4MzJkOTY4LTJlMTQtNDRlNS04NDU1LTQ3YjQ1YTFmYWZlMg==');

        $dadosCliente = array(
            "name" => $request->name,
            'cpfCnpj' => $request->cpfCnpj,
            'email' => $request->email,
            'mobilephone' =>$request->mobilephone
        );
   
        // $cliente_id=$dadosCliente
        // dd($dadosCliente);
        $cliente=$asaas->Cliente()->create($dadosCliente);
        $cliente_id=$cliente->id;
        $cliente_name =$cliente->name;
        $cliente_email = $cliente->email;


        return view('auth/register',compact('cliente_id','cliente_name', 'cliente_email'));
        // return response()->json($cliente);
  
        
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
