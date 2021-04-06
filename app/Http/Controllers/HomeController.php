<?php

namespace App\Http\Controllers;
use App\Models\Publicacion;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $user = auth()->user()->id;
        $data['acara'] = Publicacion::where('user_id','=',$user)->get();
        return view('home')->withAcara($data['acara']);

        $datos['vehi'] = Publicacion::all();
        return view('vehiculos')->withVehi($datos['vehi']);
    }

  

}
