<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mascotas = Mascota::all();
      return view('mascotas.index', ['mascotas' => $mascotas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('mascotas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Mascota::create([
          'nombre' => $request->input('nombre'),
          'descripcion' => $request->input('descripcion')
      ]);

      return redirect('/mascotas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $mascota = Mascota::find($id);
      return view('mascotas.edit', ['mascota' => $mascota]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $mascota = Mascota::find($id);
      $mascota->nombre = $request->input('nombre');
      $mascota->descripcion = $request->input('descripcion');
      $mascota->save();
      return redirect('/mascotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $mascota = Mascota::find($id);
      $mascota->delete();
      return redirect('/mascotas');
    }
}
