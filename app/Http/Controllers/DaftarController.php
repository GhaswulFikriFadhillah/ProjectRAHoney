<?php

namespace App\Http\Controllers;

use App\Models\daftar;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatedaftarRequest;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data ['daftar'] = \App\Models\daftar::latest()->paginate(10);
        return view('daftar_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['listPasien'] = \App\Models\Pasien::all();
        $data['listPoli'] = \App\Models\Poli::all();
        return view("daftar_create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate(rules: [
            'tanggal_daftar' => 'required|date',
            'pasien_id' => 'required|exists:pasiens,id',
            'poli_id' => 'required|exists:polis,id',
            'keluhan' => 'required|string|max:255'
       ]);

        $daftar = new \App\Models\Daftar();
        $daftar->fill(attributes: $requestData);
        $daftar->save();
        flash('Data sudah disimpan')->success();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(daftar $daftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(daftar $daftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedaftarRequest $request, daftar $daftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $daftar =\App\Models\daftar::findOrFail($id);
        if($daftar->poli->count()>=1 ){
            flash('data tidak bisa dihapus karena sudah terkait dengan data poli')->error();
            return back();
        }

        $daftar->delete();
        flash('Data sudah dihapus')->success();
        return back();
    }
}
