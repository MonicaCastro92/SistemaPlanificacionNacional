<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'apellido' => 'required',
            'cedula' => 'nullable',
            'direccion' => 'nullable',
            'role_id' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'apellido' => $request->apellido,
            'cedula' => $request->cedula,
            'direccion' => $request->direccion,
            'role_id' => $request->role_id,

            // Breeze requiere estos
            'email' => uniqid().'@test.com',
            'password' => bcrypt('123456')
        ]);

        return redirect()->route('users.index');
    }
    public function index()
    {
        $users = User::with('role')->get(); // trae usuarios con su rol
        return view('users.index', compact('users'));
    }
    public function edit($id)
{
    $user = User::findOrFail($id);
    $roles = Role::all();

    return view('users.edit', compact('user', 'roles'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'apellido' => 'required',
        'role_id' => 'required'
    ]);

    $user = User::findOrFail($id);

    $user->update([
        'name' => $request->name,
        'apellido' => $request->apellido,
        'cedula' => $request->cedula,
        'direccion' => $request->direccion,
        'role_id' => $request->role_id
    ]);

    return redirect()->route('users.index');
}
public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('users.index');
}
}