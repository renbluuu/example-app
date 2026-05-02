<?php

namespace App\Http\Controllers;

use App\Models\Falkutas;
use Illuminate\Http\Request;

class FalkutasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $falkutas = Falkutas::all();
        return view('falkutas.list-falkutas',compact('falkutas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('falkutas.add-falkutas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Falkutas $falkutas)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Falkutas $falkutas)
    {
      return view('falkutas.edit-falkutas');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Falkutas $falkutas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Falkutas $falkutas)
    {
        //
    }
}
