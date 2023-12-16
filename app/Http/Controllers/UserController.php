<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\TokoTeknisi;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Menu::all();
        return view('user.dashboard',compact('data'));
    }
    public function view_ijazah(string $id)
    {
        $data = User::findOrFail($id); // Sesuaikan dengan model dan kolom yang sesuai
        $pdfPath = public_path('storage/' . $data->ijazah);
        return response()->file($pdfPath);
    }
    public function view_sertifikat(string $id)
    {
        $data = User::findOrFail($id); // Sesuaikan dengan model dan kolom yang sesuai
        $pdfPath = public_path('storage/' . $data->sertifikat);
        return response()->file($pdfPath);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePembayaran(Request $request,string $id)
    {
        $data = Transaksi::find($id);
        $data->status_pembayaran = true;
        if ($request->hasFile('foto_pembayaran')) {
            $foto_bayar = $request->file('foto_pembayaran')->store('foto_pembayaran');
            $data->foto_pembayaran = $foto_bayar;
        }
        $data->update();
        return redirect()->route('tabelresi.index')->with('success', 'pembayaran Behasil!');
    }

    /**
     * Display the specified resource.
     */
    public function konfirmasiPenjemputan(string $id)
    {
        $data = Transaksi::find($id);
        $data->status = true;
        $data->update();
        return redirect()->route('tabelresi.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function pembayaran(string $id)
    {
        $data = Transaksi::find($id);
        return view('user.transaksi',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateKonfirmasi(string $id)
    {
        $data = User::Find($id);
        $data->konfirmasi = true;
        $data->update();
        return redirect()->route('admin.teknisi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
