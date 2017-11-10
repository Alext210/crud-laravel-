<?php

namespace Prueba\Http\Controllers;

use Illuminate\Http\Request;
use Prueba\Conductor;
use Prueba\Http\Requests\ConductorRequest;

class ConductorController extends Controller
{
	//Metodo para organizar los conductores
    public function index()
    {
    	$conductores = Conductor::orderBy('id', 'DESC')->paginate();
    	return view('conductores.index', compact('conductores'));
    }

    // Redireccionar a la vista create
    public function create()
    {
        return view('conductores.create');
    }


    //Salvar o guardar el conductor
    public function store(ConductorRequest $request)
    {
        $conductor = new Conductor;

        $conductor->nombres  = $request->nombres;
        $conductor->apellidos = $request->apellidos;
        $conductor->tipodedocumento  = $request->tipodedocumento;
        $conductor->documento  = $request->documento;
        $conductor->fechadenacimiento  = $request->fechadenacimiento;
        $conductor->genero  = $request->genero;

        $conductor->save();

        return redirect()->route('conductores.index')
                         ->with('info', 'El conductor fue guardado correctamente');
    }

    // busca y coloca los datos del conductor en el edit
    public function edit($id)
    {
        $conductor = \Prueba\Conductor::find($id);
        return view('conductores.edit', compact('conductor'));
    }

    //Edita el conductor
    public function update(ConductorRequest $request, $id)
    {
        $conductor = \Prueba\Conductor::find($id);

        $conductor->nombres  = $request->nombres;
        $conductor->apellidos = $request->apellidos;
        $conductor->tipodedocumento  = $request->tipodedocumento;
        $conductor->documento  = $request->documento;
        $conductor->fechadenacimiento  = $request->fechadenacimiento;
        $conductor->genero  = $request->genero;

        $conductor->save();

        return redirect()->route('conductores.index')
                         ->with('info', 'El conductor fue actualizado correctamente');
    }

    //Mostrar conductor
    public function show($id)
    {
        $conductor = \Prueba\Conductor::find($id);
        return view('conductores.show', compact('conductor'));
    }

    //Eliminar conductor
    public function destroy($id)
    {
        $conductor = \Prueba\Conductor::find($id);
        $conductor->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }

}
