<?php

namespace App\Http\Controllers;

use App\Models\Manzana;
use Illuminate\Http\Request;

class ManzanaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todasLasManzanas = Manzana::all();
        return view('todasLasManzanas',compact('todasLasManzanas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formularioAgregarManzana');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request ->validate([
            'tipoManzana' => 'required|string',
            'precioKilo'=> 'required|integer',        
        ]);
        $manzana= new Manzana();
        $manzana->tipoManzana = $request -> input('tipoManzana');
        $manzana->precioKilo = $request -> input('precioKilo');
        $manzana-> save();
        return redirect()->back()->with('success', 'Manzana guardada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Manzana $manzana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manzana $manzana)
    {
        return view('editarManzana');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manzana $manzana)
    {
        $nuevaManzana =Manzana::find($manzana->id);
        $nuevaManzana->tipoManzana= $request->tipoManzana;
        $nuevaManzana->precioKilo= $request->precioKilo;
        $nuevaManzana->save();
        return redirect()->back()->with('success', 'eliminada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manzana $manzana)
    {
        $manzana->delete();
        return redirect()->back()->with('success', 'editada');
    }
}
