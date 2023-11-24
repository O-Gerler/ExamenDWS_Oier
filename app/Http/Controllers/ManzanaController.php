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
        $manzanas = Manzana::all();

        return view('manzana.index', ['manzanas' => $manzanas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manzana.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $manzana = new Manzana();

        $manzana->tipoManzana = request('tipoManzana');
        $manzana->precioKilo = request('precioKilo');

        $manzana->save();

        return redirect(route('manzana.index'));
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
        return view('manzana.edit', ['manzana' => $manzana]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manzana $manzana)
    {
        $manzana->tipoManzana = request('tipoManzana');
        $manzana->precioKilo = request('precioKilo');

        $manzana->save();

        return redirect(route('manzana.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Manzana $manzana)
    // {
    //     //
    // }

    public function eliminar(Manzana $manzana) {
        $manzana->delete();
        return redirect(route('manzana.index'));
    }
}
