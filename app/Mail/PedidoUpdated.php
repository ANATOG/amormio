<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PedidoUpdated extends Mailable
{
    use Queueable, SerializesModels;

    public $pedido;
    public $customid;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pedido)
    {
        $this->pedido = $pedido;
        $this->customid= $pedido->shoppingCartID(); 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    { 
        return $this->from("consientemeamormio@gmail.com")
                    ->view('mailers.pedido_update');
    }
}
