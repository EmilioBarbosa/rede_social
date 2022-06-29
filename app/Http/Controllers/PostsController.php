<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function enviarPost(Request $request){
        $id = Auth::id();
        $User = Profile::where('user_id', $id)->first()->toArray();

        $Post = new Post();
        $Post->user_id = $id;
        $Post->conteudo = $request->conteudo;
        $Post->user_name = $User['nome'];
        $Post->save();
        return redirect('/home');
    }
}
