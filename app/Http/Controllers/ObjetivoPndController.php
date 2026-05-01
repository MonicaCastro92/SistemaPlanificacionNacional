<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ObjetivoPnd;
use App\Models\Eje;
use App\Models\Ods;

class ObjetivoPndController extends Controller
{
    /**
     * Mostrar listado
     */
    public function index()
    {
        $objetivos = ObjetivoPnd::with('eje')->get();
        return view('objetivo_pnds.index', compact('objetivos'));
    }

    /**
     * Mostrar formulario de creación
     */
        public function create()
    {
        $ejes = Eje::all();
        $ods = Ods::all(); // 👈 AÑADIR ESTO

        return view('objetivo_pnds.create', compact('ejes', 'ods'));
    }

    /**
     * Guardar en base de datos
     */
    public function store(Request $request)
{
    $request->validate([
        'codigo' => 'required',
        'nombre' => 'required',
        'descripcion' => 'required',
        'eje_id' => 'required'
    ]);

    // 1. Crear objetivo
    $objetivo = ObjetivoPnd::create([
        'codigo' => $request->codigo,
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'eje_id' => $request->eje_id
    ]);

    // 2. Relacionar con ODS (si vienen seleccionados)
    if ($request->has('ods')) {
        $objetivo->ods()->sync($request->ods);
    }

    return redirect()->route('objetivo_pnds.index')
                     ->with('success', 'Objetivo creado correctamente');
}

    /**
     * Mostrar formulario de edición
     */
    public function edit($id)
{
    $objetivo = ObjetivoPnd::findOrFail($id);
    $ejes = Eje::all();
    $ods = Ods::all();

    return view('objetivo_pnds.edit', compact('objetivo', 'ejes', 'ods'));
}

    /**
     * Actualizar registro
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'eje_id' => 'required'
        ]);

        $objetivo = ObjetivoPnd::findOrFail($id);

        $objetivo->update([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'eje_id' => $request->eje_id
        ]);

        return redirect()->route('objetivo_pnds.index')
                         ->with('success', 'Objetivo actualizado correctamente');
    }

    /**
     * Eliminar registro
     */
    public function destroy($id)
    {
        $objetivo = ObjetivoPnd::findOrFail($id);
        $objetivo->delete();

        return redirect()->route('objetivo_pnds.index')
                         ->with('success', 'Objetivo eliminado correctamente');
    }
}