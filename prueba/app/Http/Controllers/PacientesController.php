<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Pacientes::all();
        return view('pacientes', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregar_paciente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pacientes = new Pacientes();
        $pacientes->nombre = $request->post('nombre');
        $pacientes->edad = $request->post('edad');
        $pacientes->genero = $request->post('genero');
        $pacientes->fecha_ingreso = $request->post('fecha_ingreso');
        $pacientes->save();

        return redirect()->route('pacientes.index')->with('success', "Agregado con exito!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function show($id_paciente)
    {
        $pacientes = Pacientes::find($id_paciente);
        return view('eliminar_paciente', compact('pacientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id_paciente)
    {
        $pacientes = Pacientes::find($id_paciente);
        return view('actualizar_paciente', compact('pacientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_paciente)
    {
        $pacientes = Pacientes::find($id_paciente);
        $pacientes->nombre = $request->post('nombre');
        $pacientes->edad = $request->post('edad');
        $pacientes->genero = $request->post('genero');
        $pacientes->fecha_ingreso = $request->post('fecha_ingreso');
        $pacientes->save();

        return redirect()->route('pacientes.index')->with('success', "Actualizado con exito!");              
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_paciente)
    {
        $pacientes = Pacientes::find($id_paciente);
        $pacientes->delete();
        return redirect()->route('pacientes.index')->with('success', "Eliminado con exito!");
    }
}
