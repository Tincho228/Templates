<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.plans.index')->only('index');
        $this->middleware('can:admin.plans.create')->only('create','store');
        $this->middleware('can:admin.plans.edit')->only('edit','update');
        $this->middleware('can:admin.plans.destroy')->only('destroy');
    }
    public function index()
    {
        $plans = Plan::all();
        return view('admin.plans.index', compact('plans'));
    }


    public function create()
    {
        return view('admin.plans.create');
    }

   
    public function store(Request $request)
    {
        $request ->validate([
            'name' => 'required',
            'slug' => 'required|unique:categorias',
            'price' => 'required',
            'description'=>'required'
        ]);

        $plan= Plan::create($request->all());
        return redirect()->route('admin.plans.edit', $plan)->with('info', 'La categoria se ha creado con exito');
    }

    public function edit(Plan $plan)
    {
        return view('admin.plans.edit', compact('plan'));
    }

    
    public function update(Request $request, PLan $plan)
    {
        //
    }

    
    public function destroy(Plan $plan)
    {
        
    }
}
