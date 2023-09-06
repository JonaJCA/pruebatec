<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('prueba.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prueba.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = Producto::create($request->all());

        return redirect()->route('prueba.show', $producto->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $prueba)
    {
        
        return view('prueba.show',compact('prueba'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $prueba)
    {
        return view('prueba.edit',compact('prueba'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $prueba)
    {
        $prueba->update($request->all());

        return redirect()->route('prueba.show', $prueba->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $prueba)
    {
        $prueba->delete();

        return redirect()->route('prueba.index');
    }
}
