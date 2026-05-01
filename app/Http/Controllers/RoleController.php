<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
     public function index(Request $request)
    {
       $roles = Role::all();
       $query = Role::query();

    if ($request->filled('buscar')) {
        $query->where('nombre', 'like', '%' . $request->buscar . '%')
              ->orWhere('descripcion', 'like', '%' . $request->buscar . '%');
    }

    $roles = $query->get();

    return view('roles.index', compact('roles'));



    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)//almacenar en la base de datos
    {
         $request->validate([
        'nombre' => 'required',
        'descripcion' => 'nullable',
        'permiso' => 'nullable',
    ]);  
    Role::create([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'permiso' => $request->permiso,
    ]);

    return redirect()->route('roles.index');
    }

    public function destroy($id)
    {
    $role = Role::findOrFail($id);
    $role->delete();

    return redirect()->route('roles.index');
    }

    public function edit($id)
{
    $role = Role::findOrFail($id);
    return view('roles.edit', compact('role'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required',
        'descripcion' => 'nullable'
    ]);

    $role = Role::findOrFail($id);

    $role->update([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'permiso' => $request->permiso
    ]);

    return redirect()->route('roles.index');
}
}
