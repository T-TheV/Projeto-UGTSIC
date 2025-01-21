<?php

namespace App\Mail;

use Carbon\Traits\Serialization;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class curriculoMail extends Mailable
{
    use Queueable,
    SerializesModels;
    public $data;
    public $filepath;
    public function __construct($data, $filepath){
        $this->data=$data;
        $this->filepath=$filepath;
    }
    public function build(): curriculoMail{
        return $this->view('emails.curriculo')->subject('Novo Curriculo Enviado')->
        attach(public_path('storage/'.$this->filepath))->with('data', $this->data);
    }
}
