<?php

namespace App\Http\Controllers;

use App\Models\Amigo;
use App\Models\Profile;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AmigoController extends Controller
{
    public function adicionarAmigo(Request $request){
        $solicitante = Auth::id();
        $solicitado = $request->id;
        $Amigo = new Amigo();
        $Amigo->id_solicitante = $solicitante;
        $Amigo->id_solicitado = $solicitado;
        $Amigo->situacao = 'Ativo';
        $Amigo->save();
    }

}
