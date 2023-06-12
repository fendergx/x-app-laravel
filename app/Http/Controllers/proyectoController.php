<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class proyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::latest()->paginate(10);
        return view('proyectos.index',compact('proyectos'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_proyecto' => 'required',
            'fuente_fondos' => 'required',
            'monto_planificado' => 'required',
            'monto_patrocinado' => 'required',
            'monto_fondos_propios' => 'required',
        ]);
 
        Proyecto::create($request->all());
 
        return redirect()
            ->route('proyectos.index')
            ->with('success', 'Proyecto creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto $proyecto)
    {
        return null;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'nombre_proyecto' => 'required',
            'fuente_fondos' => 'required',
            'monto_planificado' => 'required',
            'monto_patrocinado' => 'required',
            'monto_fondos_propios' => 'required',
        ]);
 
        $proyecto->update($request->all());
 
        return redirect()
            ->route('proyectos.index')
            ->with('success', 'Proyecto editado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
 
        return redirect()
            ->route('proyectos.index')
            ->with('success', 'Proyecto eliminado.');
    }
}
