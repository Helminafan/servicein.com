<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\TarikDana;
use App\Models\TokoTeknisi;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeknisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user()->id;
        $data = TokoTeknisi::with('teknisi')->where('teknisi_id', $user)->get();
        return view('teknisi.home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function Dashboard()
    {
        $user = Auth::user()->id;
        $data = TarikDana::where('user_id', $user)->get();
        return view('teknisi.dashboard', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function tarikdana()
    {

        return view('teknisi.tarikdana');
    }
    public function tarikdanastore(Request $request)
    {
        $user = Auth::user()->id;
        $data = new TarikDana();
        $data->nama_pengguna = $request->nama_pengguna;
        $data->jumlah = $request->jumlah;
        $data->bank = $request->bank;
        $data->rekening = $request->rekening;
        $data->user_id = $user;
        $data->save();
        return redirect()->route('dashboard.teknisi')->with('success', 'Data Terkirim!');
    }

    /**
     * Display the specified resource.
     */
    public function terima(string $id)
    {
        $data = Service::find($id);
        $data->status_teknisi = 2;
        $data->update();

        $user = new Transaksi();
        $user->status = false;
        $user->service_id = $id;
        $user->save();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editPembayaran(string $id)
    {
        $data = Transaksi::find($id);
        return view('teknisi.pembayaran', compact('data'));
    }
    public function riwayatpesanan()
    {
        $user = Auth::user()->id;
        $data = TokoTeknisi::where('teknisi_id', $user)->get();
        return view('teknisi.riwayatpesanan', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function tambahPembayaran(Request $request, string $id)
    {
        $data = Transaksi::find($id);
        $data->status = 2;
        $data->harga = $request->harga;
        $data->detail_transaksi = $request->detail_transaksi;
        $data->status_pembayaran = false;
        $data->update();
        return redirect()->route('home_teknisi')->with('success', 'Tambah Pembayaran Behasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
