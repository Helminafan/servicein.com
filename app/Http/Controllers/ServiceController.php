<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Promise;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Service();
        $data->resi = Str::random(8);
        $data->merk = $request->merk;
        $data->keluhan = $request->keluhan;
        $data->masalah = $request->masalah;
        $data->jam = $request->jam;
        $data->tanggal = $request->tanggal;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->user_id = $request->user_id;
        $data->menu_id = $request->menu_id;
        if ($request->hasFile('foto')) {
            $photo_Profil = $request->file('foto')->store('foto');
            $data->foto = $photo_Profil;
        }
        $data->save();
        return redirect()->route('tabelresi.index')->with('success', 'Tambah data Behasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Menu::find($id);
        return view('user.promise', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
