<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\TarikDana;
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

    public function konfirmasiPembayaran(string $id)
    {
        $data = Transaksi::find($id);
        $data->status_pembayaran = 2;

        $service = $data->service_id;

        $harga = $data->harga;

        $toko_teknisi = TokoTeknisi::where('service_id', $service)->first();
        $id_teknisi = $toko_teknisi->teknisi_id;
        $pembayaran = User::find($id_teknisi);
        $pembayaran->saldo += $harga;

        $data->update();
        $pembayaran->update();
        return redirect()->route('admin.service');
    }
    public function buktiPembayaran(string $id)
    {
        $data = Transaksi::find($id);
        return view('admin.cekpembayaran', compact('data'));
    }
    public function penarikan()
    {
        $data = TarikDana::all();
        return view('admin.penarikan', compact('data'));
    }
    public function buktipenarikan(string $id)
    {
        $data = TarikDana::find($id);
        return view('admin.bukti', compact('data'));
    }
    public function buktipenarikanstore(Request $request, string $id)
    {
        $data = TarikDana::find($id);
        if ($request->hasFile('fotobukti')) {
            $foto_bukti = $request->file('fotobukti')->store('fotobukti');
            $data->fotobukti = $foto_bukti;
        }
        $data->status = true;

        $iduser = $data->user_id;
        $user = User::find($iduser);
        $user->saldo -= $data->jumlah;
        $user->save();
        $data->update();
        return redirect()->route('admin.penarikan')->with('success', 'Bukti Terkirim!');
    }
}
