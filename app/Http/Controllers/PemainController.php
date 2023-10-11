<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PemainModel;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_pemain = PemainModel::all();
        $no = 0;

        return view('tampilan_revisi', compact('data_pemain', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_pemain');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PemainModel::create([
            'nama_pemain' => $request->nama,
            'no_punggung' => $request->punggung,
            'posisi' => $request->posisi
        ]);
        return redirect('/website_pemain');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cariPemain = PemainModel::find($id);
        return view('edit_pemain', compact('cariPemain'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cariPemain = PemainModel::find($id);
        $cariPemain->update([
            'id' => $request->id,
            'nama_pemain' => $request->nama,
            'no_punggung' => $request->punggung,
            'posisi' => $request->posisi
        ]);
        return redirect('/website_pemain');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cariPemain = PemainModel::find($id);
        $cariPemain->delete();
        return redirect('/website_pemain');
    }

}
