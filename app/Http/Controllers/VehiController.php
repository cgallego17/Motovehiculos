<?php

namespace App\Http\Controllers;
use App\Models\Publicacion;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function vehiculos()
    {   
        
        $data['vehi'] = Publicacion::all();
        return view('vehiculos')->withVehi($data['vehi']);

    }

    public function welcome()
    {   
        
        $datos['vehihome'] = Publicacion::latest()->take(6)->get();
        return view('welcome')->withVehihome($datos['vehihome']);

    }

}
