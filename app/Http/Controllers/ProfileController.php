<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function visualizarPerfil(){
        $id = Auth::id(); 
        $Profile = Profile::where('user_id', $id)->first()->toArray();
        return view('layouts.visualizarPerfil', ['Perfil' => $Profile]);
    }

    public function criarPerfil(){
        return view('layouts.criarPerfil');
    }

    public function editarPerfil(){
        $id = Auth::id(); 
        $Profile = Profile::where('user_id', $id)->first()->toArray();
        return view('layouts.editarPerfil', ['Perfil' => $Profile]);
    }

    public function salvarPerfil(Request $request){
        $id = Auth::id(); 
        
        $Profile = new Profile();
        $Profile->user_id = $id;
        $Profile->nome = $request->input('nome');
        $Profile->cidade = $request->input('cidade');
        $Profile->data_nascimento = $request->input('dataNascimento');
        $Profile->sexo = $request->input('sexo');
        $Profile->sobre = $request->input('sobre');

        //upload de imagem

        if($request->hasFile('image') AND $request->file('image')->isValid()){
            $converted = Str::kebab($Profile->nome);

            $name = $id . $converted ;

            $extension = $request->image->extension();

            $imageName = "{$name}.{$extension}";

            $Profile->image = $imageName;

            $upload = $request->image->storeAs('public/profile_pics', $imageName);

            if(!$upload){
                return redirect()
                            ->back()
                            ->with('error', 'Falha ao fazer upload da imagem');
            }
        }

        $Profile->save();

        return redirect('/home');
    }

    public function salvarEdicaoPerfil(Request $request){
        $id = Auth::id(); 
        
        $Profile = Profile::where('user_id', $id)->first();
        $Profile->nome = $request->input('nome');
        $Profile->cidade = $request->input('cidade');
        $Profile->data_nascimento = $request->input('dataNascimento');
        $Profile->sexo = $request->input('sexo');
        $Profile->sobre = $request->input('sobre');

        if($request->hasFile('image') AND $request->file('image')->isValid()){
            $converted = Str::kebab($Profile->nome);

            $name = $id . $converted ;

            $extension = $request->image->extension();

            $imageName = "{$name}.{$extension}";

            $Profile->image = $imageName;

            $upload = $request->image->storeAs('public/profile_pics', $imageName);

            if(!$upload){
                return redirect()
                            ->back()
                            ->with('error', 'Falha ao fazer upload da imagem');
            }
        }
        

        $Profile->save();

        return redirect('/home');
    }

    public function pesquisaPerfil(Request $request){
        $Profiles = Profile::where('nome', 'LIKE', "%{$request->pesquisa}%")->get();

        return view('layouts.pesquisa', ['Perfil' => $Profiles]);

    }
}
