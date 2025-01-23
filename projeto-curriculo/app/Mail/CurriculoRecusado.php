<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class CurriculoRecusado extends Mailable
{
    public $curriculo;

    public function __construct($curriculo)
    {
        $this->curriculo = $curriculo;
    }

    public function build()
    {
        return $this->view('emails.recusado')
            ->subject('Seu currículo foi recusado.');
    }
}
