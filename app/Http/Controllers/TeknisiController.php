<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\TokoTeknisi;
use App\Models\Transaksi;
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
        $data = TokoTeknisi::with('teknisi')->where('teknisi_id',$user)->get();
        return view('teknisi.home',compact('data'));
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
    public function store(Request $request)
    {
        //
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
        return view('teknisi.pembayaran',compact('data'));
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
