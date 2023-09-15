<?php

namespace App\Http\Controllers;

use App\Models\Pruebasmedicas;
use Illuminate\Http\Request;

class PruebasmedicasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Pruebasmedicas::all();
        return view('pruebasmed', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregar_laboratorio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pruebasmedicas = new Pruebasmedicas();
        $pruebasmedicas->nombre = $request->post('nombre');
        $pruebasmedicas->tipo = $request->post('tipo');
        $pruebasmedicas->costo = $request->post('costo');
        $pruebasmedicas->tiempo_resultado = $request->post('tiempo_resultado');
        $pruebasmedicas->save();

        return redirect()->route('pruebasm.index')->with('success', "Agregado con exito!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pruebasmedicas  $pruebasmedicas
     * @return \Illuminate\Http\Response
     */
    public function show($id_prueba)
    {
        $pruebasmedicas = Pruebasmedicas::find($id_prueba);
        return view('eliminar_laboratorio', compact('pruebasmedicas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pruebasmedicas  $pruebasmedicas
     * @return \Illuminate\Http\Response
     */
    public function edit($id_prueba)
    {
        $pruebasmedicas = Pruebasmedicas::find($id_prueba);
        return view('actualizar_laboratorio', compact('pruebasmedicas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pruebasmedicas  $pruebasmedicas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_prueba)
    {
        $pruebasmedicas = Pruebasmedicas::find($id_prueba);
        $pruebasmedicas = new Pruebasmedicas();
        $pruebasmedicas->nombre = $request->post('nombre');
        $pruebasmedicas->tipo = $request->post('tipo');
        $pruebasmedicas->costo = $request->post('costo');
        $pruebasmedicas->tiempo_resultado = $request->post('tiempo_resultado');
        $pruebasmedicas->save();

        return redirect()->route('pruebasm.index')->with('success', "Actualizado con exito!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pruebasmedicas  $pruebasmedicas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_prueba)
    {
        $pruebasmedicas = Pruebasmedicas::find($id_prueba);
        $pruebasmedicas->delete();
        return redirect()->route('pruebasm.index')->with('success', "Eliminado con exito!");
    }
}
