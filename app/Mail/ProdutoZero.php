<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\ItemvendasCartela;
use App\Models\ItemvendasUnidade;
use App\Models\ProdutoFamarcia;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Cliente;
use App\Models\Venda;
use App\Models\ItemVenda;
use App\Models\FaturaVenda;
use App\Models\User;

class ProdutoZero extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($produtoCaixaZero)
    {
        //
        $this->produtoCaixaZero = $produtoCaixaZero;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Produtos com Caixa - que necessita repor estoque ')
        ->markdown('mail.produtozero')
        ->with(['produtoCaixaZero'=>$this->produtoCaixaZero]);
              
        
    }
}
