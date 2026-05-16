<?php

namespace App\Http\Controllers;

use App\Models\Falkutas;
use App\Models\Prodi;
use App\Http\Requests\StoreProdiRequest;
use App\Http\Requests\UpdateProdiRequest;
use Illuminate\Support\Facades\Storage;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $prodi = Prodi::all();

    return view('prodi.list-prodi', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $falkutas = Falkutas::all();
        return view("prodi.add-prodi",compact('falkutas'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProdiRequest $request)
    {
        $validate = $request->safe();
       
        Storage::disk("public")->
       putFile("profile_kaprodi", $validate->file('photo_kaprodi'));

       $filePath = Storage::disk("public")->
       putFile("profile_kaprodi", $validate->file('photo_kaprodi'));

       Prodi::create([
        'falkutas_id'=> $validate->falkutas_id,
        'nama_prodi'=> $validate->nama_prodi,
        'nama_kaprodi'=> $validate->nama_kaprodi,
        'photo_kaprodi'=> $filePath
       ]);

       return redirect('/prodi')->with('success','Data Prodi Berhasil Di Tambah');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdiRequest $request, Prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        //
    }
}
