<?php

namespace App\Http\Controllers;

use App\Models\Resultados;
use Illuminate\Http\Request;

class ResultadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Resultados::all();
        return view('resultados', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregar_resultado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resultados = new Resultados();
        $resultados->id_paciente = $request->post('id_paciente');
        $resultados->id_prueba = $request->post('id_prueba');
        $resultados->fecha_resultado = $request->post('fecha_resultado');
        $resultados->resultado = $request->post('resultado');
        $resultados->save();

        return redirect()->route('resultados.index')->with('success', "Agregado con exito!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resultados  $resultados
     * @return \Illuminate\Http\Response
     */
    public function show($id_resultado)
    {
        $resultados = Resultados::find($id_resultado);
        return view('eliminar_resultado', compact('resultados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resultados  $resultados
     * @return \Illuminate\Http\Response
     */
    public function edit($id_resultado)
    {
        $resultados = Resultados::find($id_resultado);
        return view('actualizar_resultado', compact('resultados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resultados  $resultados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_resultado)
    {
        $resultados = Resultados::find($id_resultado);
        $resultados = new Resultados();
        $resultados->id_paciente = $request->post('id_paciente');
        $resultados->id_prueba = $request->post('id_prueba');
        $resultados->fecha_resultado = $request->post('fecha_resultado');
        $resultados->resultado = $request->post('resultado');
        $resultados->save();

        return redirect()->route('resultados.index')->with('success', "Actualizado con exito!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resultados  $resultados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_resultado)
    {
        $resultados = Resultados::find($id_resultado);
        $resultados->delete();
        return redirect()->route('resultados.index')->with('success', "Eliminado con exito!");
    }
}
