<?php

namespace App\Http\Controllers;

use App\Models\Curriculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CurriculoAprovado;
use App\Mail\CurriculoRecusado;

class AdminController extends Controller
{

    public function index()
    {

        $curriculo = Curriculo::all();


        return view('adminindex', compact('curriculo'));
    }

    public function aprovar($id)
    {
        $curriculo = Curriculo::findOrFail($id);
        $curriculo->status = 'aprovado';
        $curriculo->save();


        Mail::to($curriculo->email)->send(new CurriculoAprovado($curriculo));

        return redirect()->route('admin.curriculo')->with('successo', 'Currículo aprovado com sucesso!');
    }


    public function recusar($id)
    {
        $curriculo = Curriculo::findOrFail($id);
        $curriculo->status = 'recusado';
        $curriculo->save();


        Mail::to($curriculo->email)->send(new CurriculoRecusado($curriculo));

        return redirect()->route('admin.curriculo')->with('successo', 'Currículo recusado com sucesso!');
    }
}
