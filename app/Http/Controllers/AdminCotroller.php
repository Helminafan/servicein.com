<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\TokoTeknisi;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class AdminCotroller extends Controller
{
    public function service()
    {
        $data = Service::all();
        return view('admin/service', compact('data'));
    }
    public function aturTeknisi(string $id)
    {
        $teknisiList = User::where('role', 'teknisi')
            ->where('konfirmasi', true)
            ->get();
        $data = Service::find($id);
        return view('admin/atur_teknisi', compact('data', 'teknisiList'));
    }
    public function aturTeknisiStore(Request $request)
    {
        $data = new TokoTeknisi();
        $data->service_id = $request->service_id;
        $data->teknisi_id = $request->teknisi_id;
        $data->save();
        $service = Service::find($request->service_id);
        $service->status_teknisi = true;
        $service->update();
        return redirect()->route('admin.service')->with('success', 'Atur Behasil!');
    }
    public function teknisi()
    {
        $data = User::where('role', 'teknisi')->get();
        return view('admin.teknisi', compact('data'));
    }
    public function customer()
    {
        $data = User::where('role', 'user')->get();
        return view('admin.customer', compact('data'));
    }
    
    public function konfirmasiPembayaran( string $id)
    {
        $data = Transaksi::find($id);
        $data->status_pembayaran = 2;
        $data->update();
        return redirect()->route('admin.service');
    }
    public function buktiPembayaran( string $id)
    {
        $data = Transaksi::find($id);
        return view('admin.cekpembayaran',compact('data'));
    }
}
