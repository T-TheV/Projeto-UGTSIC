<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\curriculoMail;
use App\Mail\curriculoMailRemetente;
use App\Models\curriculo;


class curriculoController extends Controller
{
    public function index(){
        return view('formulario');
    }
    public function store(Request $request){
        $request-> validate(rules:[
        'nome'=> 'required|string|max:255',
        'email'=> 'required|email',
        'telefone'=>'required|string',
        'cargo_desejado'=> 'required|string',
        'escolaridade'=> 'required|string',
        'arquivo'=>'required|mimes:pdf, doc, docx|max:1024' // 1mb
        ]);
    $fileName = time() . '_' . $request->file('arquivo')->getClientOriginalName();
    $filePath = $request->file('arquivo')->storeAs('curriculo',$fileName,'public');
    
    $curriculo = curriculo::create
    ([
        'nome'=> $request->nome,
        'email'=> $request->email,
        'telefone'=> $request->telefone,
        'cargo_desejado'=> $request->cargo_desejado,
        'escolaridade'=> $request->escolaridade,
        'arquivo'=> $filePath,
        'ip'=> $request->ip(),
    ]);

    $data = 
    [
        'nome'=> $request->nome,
        'email'=> $request->email,
        'telefone'=> $request->telefone,
        'cargo_desejado'=> $request->cargo_desejado,
        'escolaridade'=> $request->escolaridade,    
    ];
    mail::to('djardim322@gmail.com')->send(new curriculoMail($data, $filePath));
    mail::to($request->email)->send(new curriculoMailRemetente($data, $filePath));

    return redirect('/')->with('sucesso','Curriculo enviado com sucesso! Enviando uma cópia para o e-mail informado!');
    


    }
    
}
