<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class CurriculoAprovado extends Mailable
{
    public $curriculo;

    public function __construct($curriculo)
    {
        $this->curriculo = $curriculo;
    }

    public function build()
    {
        return $this->view('emails.aprovado')
            ->subject('Seu currículo foi aprovado!');
    }
}
