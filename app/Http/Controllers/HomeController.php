<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDO;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::id();

        //$Posts= Post::orderBy('id', 'DESC')->get();
        
        $Posts= DB::select("SELECT * FROM posts as p 
        LEFT JOIN amigos as a ON a.id_solicitante = {$id} 
        INNER JOIN users as us ON us.id = p.user_id 
        WHERE a.id_solicitado = p.user_id OR a.id_solicitante = p.user_id
        ORDER BY p.id DESC
        ");   
            
        $Profiles = Profile::all();

        return view('home', ['posts'=>$Posts, 'profiles'=>$Profiles]);
    }
}
