<?php

namespace App\Http\Controllers;

use App\Models\poli;
use App\Http\Requests\UpdatepoliRequest;
use Illuminate\Http\Request;


class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['poli']=\App\Models\poli::latest()->paginate(10);
        return view('poli_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('poli_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request-> validate([
            'nama' => 'required|min:3',
            'biaya'=>'required|numeric',
            'keterangan'=> 'nullable',//alamat boleh kosong
        ]);
        $poli = new \App\Models\poli();
        $poli->fill($requestData);
        $poli->save();
        flash('Data sudah di simpan')->success();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(poli $poli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(poli $poli)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request, poli $poli)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $poli =\App\Models\poli::findOrFail($id);
        if($poli->daftar->count()>=1){
            flash('data tidak bisa dihapus karena sudah terkait dengan data pendaftaran')->error();
            return back();
        }

        $poli->delete();
        flash('Data sudah dihapus')->success();
        return back();
    }
}
