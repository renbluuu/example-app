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
        return view('prodi.detail-prodi',compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        return view('prodi.edit-prodi',[
        'prodi'=> $prodi
      ])->with('success',"Data Berhasil Di Edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdiRequest $request, Prodi $prodi)
    {
    $request->validate([
        'nama_prodi' => ['required', 'min:3'],
        'nama_kaprodi' => ['required', 'min:3'],
        'photo_kaprodi' => ['nullable', 'image']
    ]);

    $filePath = $prodi->photo_kaprodi;

    // Hapus foto jika checkbox dicentang
    if ($request->hapus_foto == 1) {

        if ($prodi->photo_kaprodi) {

            Storage::disk('public')
                ->delete($prodi->photo_kaprodi);

            $filePath = null;
        }
    }

    // Upload foto baru
    if ($request->hasFile('photo_kaprodi')) {

        // Hapus foto lama
        if ($prodi->photo_kaprodi) {

            Storage::disk('public')
                ->delete($prodi->photo_kaprodi);
        }

        // Upload baru
        $filePath = Storage::disk('public')
            ->putFile(
                'profile_kaprodi',
                $request->file('photo_kaprodi')
            );
    }

    // Update data
    $prodi->update([
        'nama_prodi' => $request->nama_prodi,
        'nama_kaprodi' => $request->nama_kaprodi,
        'photo_kaprodi' => $filePath
    ]);

    return redirect('/prodi')
        ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
         $prodi->delete();

        return redirect()->back()->with('success',"Data Berhasil Di Hapus");
    }
}
