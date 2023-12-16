<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Menu::all();
        return view('admin.menu.view_menu', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu.add_menu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Menu();
        $data->judul = $request->judul;
        if ($request->hasFile('gambar')) {
            $foto_menu = $request->file('gambar')->store('gambar');
            $data->gambar = $foto_menu;
        }
        $data->save();
        return redirect()->route('menu.view')->with('success', 'Tambah data Behasil!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editData = Menu::Find($id);
        return view('admin.menu.edit_menu', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data =  Menu::Find($id);
        $data->judul = $request->judul;
        if ($request->hasFile('gambar')) {
            Storage::delete($data->fotobarang);
            $foto_menu = $request->file('gambar')->store('gambar');
            $data->gambar = $foto_menu;
        }
        $data->update();
        return redirect()->route('menu.view')->with('success', 'Update data Behasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Menu::find($id);
        if ($data->gambar != null || $data->gambar ='' ){
            Storage::delete($data->gambar);
        }
        $data->delete();
        return redirect()->route('barang.view');
    }
}
