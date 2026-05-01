<?php

namespace App\Http\Controllers;

use App\Models\Institucion;
use Illuminate\Http\Request;

class InstitucionController extends Controller
{
    // 📋 LISTAR
    public function index()
    {
        $instituciones = Institucion::all();
        return view('institucions.index', compact('instituciones'));
    }

    // 📝 FORMULARIO CREAR
    public function create()
    {
        return view('institucions.create');
    }

    // 💾 GUARDAR
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required',
            'subsector' => 'required',
            'nivel_gobierno' => 'required',
            'estado' => 'required'
        ]);

        Institucion::create($request->all());

        return redirect()->route('institucions.index');
    }

    // ✏️ FORMULARIO EDITAR
    public function edit($id)
    {
        $institucion = Institucion::findOrFail($id);
        return view('institucions.edit', compact('institucion'));
    }

    // 🔄 ACTUALIZAR
    public function update(Request $request, $id)
    {
        $institucion = Institucion::findOrFail($id);

        $institucion->update($request->all());

        return redirect()->route('institucions.index');
    }

    // 🗑️ ELIMINAR
    public function destroy($id)
    {
        $institucion = Institucion::findOrFail($id);
        $institucion->delete();

        return redirect()->route('institucions.index');
    }
}