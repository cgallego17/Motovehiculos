<?php

namespace App\Http\Controllers;


use App\Models\Publicacion;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function index()
    {
        //

        $user = auth()->user()->id;
        $data['acara'] = Publicacion::where('user_id','=',$user)->get();
        return view('publicacion.index')->withAcara($data['acara']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('publicacion.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $datosPublicacion = request()->all();
        
        $publicacion = new Publicacion;
        
        $publicacion->user_id =request('usi');
        $publicacion->Titulo = request('Titulo');
        $publicacion->Marca = request('Marca');
        $publicacion->Modelo = request('Modelo');
        $publicacion->Tipo = request('Tipo');
        $publicacion->Color = request('Color');
        $publicacion->Placa = request('Placa');
        $publicacion->Cilindraje = request('Cilindraje');
        $publicacion->Kilometraje = request('Kilometraje');
        $publicacion->Transmision = request('Transmision');
        $publicacion->Año = request('Año');
        $publicacion->Precio = request('Precio');
        $publicacion->Telefono = request('Telefono');
        $publicacion->Foto = request()->file('Foto')->store('uploads', 'public');
        $publicacion->save();;

        $request->session()->flash('alert-success', 'Tu publicacion ha sido publicada !');

        return redirect('/publicar#crearpublicacion');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacion $publicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicacion $publicacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicacion $publicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Publicacion::destroy($id);
        return redirect('/publicar#publicaciones');
        

    }
}
