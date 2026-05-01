<?php

namespace App\Http\Controllers;

use App\Models\Eje;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Models\Eje;
use Illuminate\Http\Request;

class EjeController extends Controller
{
    // 📋 LISTAR
    public function index()
    {
        $ejes = Eje::all();
        return view('ejes.index', compact('ejes'));
    }

   public function create()
{
    return view('ejes.create');
}

    // 💾 GUARDAR
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable'
        ]);

        Eje::create($request->all());

        return redirect()->route('ejes.index');
    }

    // 👁️ VER UNO (opcional)
    public function show($id)
    {
        $eje = Eje::findOrFail($id);
        return view('ejes.show', compact('eje'));
    }

    // ✏️ FORMULARIO EDITAR
    public function edit($id)
    {
        $eje = Eje::findOrFail($id);
        return view('ejes.edit', compact('eje'));
    }

    // 🔄 ACTUALIZAR
    public function update(Request $request, $id)
    {
        $eje = Eje::findOrFail($id);

        $eje->update($request->all());

        return redirect()->route('ejes.index');
    }

    // 🗑️ ELIMINAR
    public function destroy($id)
    {
        $eje = Eje::findOrFail($id);
        $eje->delete();

        return redirect()->route('ejes.index');
    }
}