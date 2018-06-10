<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Contacto;

class ConcactoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $Contacto;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contacto $Contacto)
    {
        $this->Contacto = $Contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.Contacto')
                    ->with('name','Arturo')
                    ->from('info@innovacentervg.com','Innova')
                    ->subject('Contacto');
    }
}
