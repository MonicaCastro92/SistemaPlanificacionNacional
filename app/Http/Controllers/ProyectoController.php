<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProyectoController extends Controller
{
    // 🔹 Mostrar lista de proyectos
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
    }

    // 🔹 Mostrar formulario de creación
    public function create()
    {
        return view('proyectos.create');
    }

    // 🔹 Guardar nuevo proyecto
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'estado' => 'required|in:registrado,en_proceso,finalizado'
        ]);

        Proyecto::create($request->all());

        return redirect()->route('proyectos.index')
                         ->with('success', 'Proyecto creado correctamente');
    }

    // 🔹 Mostrar formulario de edición
    public function edit($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('proyectos.edit', compact('proyecto'));
    }

    // 🔹 Actualizar proyecto
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'estado' => 'required|in:registrado,en_proceso,finalizado'
        ]);

        $proyecto = Proyecto::findOrFail($id);
        $proyecto->update($request->all());

        return redirect()->route('proyectos.index')
                         ->with('success', 'Proyecto actualizado correctamente');
    }

    // 🔹 Eliminar proyecto
    public function destroy($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->delete();

        return redirect()->route('proyectos.index')
                         ->with('success', 'Proyecto eliminado correctamente');
    }
}