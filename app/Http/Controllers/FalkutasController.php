<?php

namespace App\Http\Controllers;

use App\Models\Falkutas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FalkutasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $falkutas = Falkutas::orderBy('created_at','desc')->get();
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
        $request->validate([
            'name_falkutas'=> ['required','min:3'],
            'name_dekan'=>['required','min:3']
        ]);

        Falkutas::create([
            'name' => $request->name_falkutas,
            'dekan' => $request->name_dekan
        ]);

            return redirect('/falkutas')>with('success',"Data Berhasil Di Tambah");
    }

    /**
     * Display the specified resource.
     */
    public function show(Falkutas $falkuta)
    {
       return view('falkutas.detail-falkutas',compact('falkuta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Falkutas $falkuta)
    {
      return view('falkutas.edit-falkutas',[
        'falkutas'=> $falkuta
      ])->with('success',"Data Berhasil Di Edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Falkutas $falkuta)
    {
         $request->validate([
            'name_falkutas'=> ['required','min:3'],
            'name_dekan'=>['required','min:3']
        ]);

        $falkuta->update([
            'name'=> $request->name_falkutas,
            'dekan'=> $request->name_dekan
        ]);
        return redirect('/falkutas')->with('success',"Data Berhasil Di Update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Falkutas $falkuta)
    {
        $falkuta->delete();

        return redirect()->back()->with('success',"Data Berhasil Di Hapus");
    }
}
