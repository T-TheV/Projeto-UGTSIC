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
    public function index(Request $request)
    {
        $curriculo = Curriculo::where('email', $request->user()->email)->first();

        if ($curriculo) {

            if (in_array($curriculo->status, ['aprovado', 'recusado'])) {
                return view('formulario_visualizar', compact('curriculo'));
            }


            return view('formulario_editar', compact('curriculo'));
        }


        return view('formulario');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email',
            'telefone' => 'required|string',
            'cargo_desejado' => 'required|string',
            'escolaridade' => 'required|string',
            //'observacoes' => 'required|string',
            'arquivo' => 'required|mimes:pdf,doc,docx|max:1024', // 1mb
        ]);

        $fileName = time() . '_' . $request->file('arquivo')->getClientOriginalName();
        $filePath = $request->file('arquivo')->storeAs('curriculo', $fileName, 'public');

        $curriculo = curriculo::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'cargo_desejado' => $request->cargo_desejado,
            'escolaridade' => $request->escolaridade,
            'observacoes' => $request->observacoes,
            'arquivo' => $filePath,
            'ip' => $request->ip(),
        ]);

        $data = [
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'cargo_desejado' => $request->cargo_desejado,
            'escolaridade' => $request->escolaridade,
            'observacoes' => $request->observacoes,
            'ip' => $request->ip(),
        ];

        Mail::to('djardim322@gmail.com')->send(new curriculoMail($data, $filePath));
        Mail::to($request->email)->send(new curriculoMailRemetente($data, $filePath));

        return redirect('/')
            ->with('sucesso', value: 'Currículo enviado com sucesso! Enviando uma cópia para o e-mail informado!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string',
            'cargo_desejado' => 'required|string',
            'escolaridade' => 'required|string',
            'arquivo' => 'nullable|mimes:pdf,doc,docx|max:1024',
        ]);

        $curriculo = Curriculo::findOrFail($id);

        $curriculo->nome = $request->nome;
        $curriculo->telefone = $request->telefone;
        $curriculo->cargo_desejado = $request->cargo_desejado;
        $curriculo->escolaridade = $request->escolaridade;
        $curriculo->observacoes = $request->observacoes;

        if ($request->hasFile('arquivo')) {

            Storage::disk('public')->delete($curriculo->arquivo);

            $fileName = time() . '_' . $request->file('arquivo')->getClientOriginalName();
            $filePath = $request->file('arquivo')->storeAs('curriculo', $fileName, 'public');
            $curriculo->arquivo = $filePath;
        }

        $curriculo->save();

        return redirect('/')->with('successo', 'Currículo atualizado com sucesso!');
    }


}

