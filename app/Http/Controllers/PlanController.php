<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $plans = Plan::where('user_id', auth()->id())->get();
        return view('plans.index', compact('plans'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nombre' => 'required',
        'id_plan' => 'required',
        'fecha_inicio' => 'required'
    ]);

    Plan::create([
        'nombre' => $request->nombre,
        'id_plan' => $request->id_plan,
        'fecha_inicio' => $request->fecha_inicio,
        'fecha_fin' => $request->fecha_fin,
        'estado' => 'BORRADOR',
        'user_id' => auth()->id()
    ]);
    

    return redirect()->route('plans.index');

    }
    public function edit($id)
    {
        $plan = Plan::findOrFail($id);
        return view('plans.edit', compact('plan'));
    }
    public function update(Request $request, $id)
{
    $plan = Plan::findOrFail($id);

    $plan->update([
        'nombre' => $request->nombre,
        'id_plan' => $request->id_plan,
        'estado' => $request->estado,
        'fecha_inicio' => $request->fecha_inicio,
        'fecha_fin' => $request->fecha_fin,
    ]);

    return redirect()->route('plans.index');
}
public function destroy($id)
{
    $plan = Plan::findOrFail($id);
    $plan->delete();

    return redirect()->route('plans.index');
}

 }


