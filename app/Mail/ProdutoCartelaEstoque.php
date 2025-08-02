<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProdutoCartelaEstoque extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($produtoCartela)
    {
        //
        $this->produtoCartela = $produtoCartela;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Produtos com Cartela - que necessita repor estoque')
        ->markdown('mail.produtoCartela')
        ->with(['produtoCartela'=>$this->produtoCartela]);
    }
}
