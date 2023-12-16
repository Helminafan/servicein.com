<?php

namespace App\Http\Controllers;

use App\Models\DaftarTeknisi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function registerTeknisi(){
        
        $q = DB::table('users')->select(DB::raw('MAX(RIGHT(id,6)) as kode'));
        $kd = "";
        if ($q->count() > 0) {
            foreach ($q->get() as $k) {
                $tmp = ((int)$k->kode) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        return view('auth.register_teknisi',compact('kd'));
    }
    public function storeTeknisi(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telp = $request->telp;
        $user->role ='teknisi';
        $user->password = bcrypt($request->password);
        if ($request->hasFile('sertifikat')) {
            $request->validate([
                'sertifikat' => 'required|mimes:pdf|max:2048',
            ]);

            $pdfFile = $request->file('sertifikat');
            $sertif = $pdfFile->store('sertifikat', 'public');
            $user->sertifikat = $sertif;
        }
        if ($request->hasFile('ijazah')) {
            $request->validate([
                'ijazah' => 'required|mimes:pdf|max:2048',
            ]);

            $filepdf = $request->file('ijazah');
            $path = $filepdf->store('ijazah', 'public');
            $user->ijazah = $path;
        }
        $user->assignRole('teknisi');
        $user->save();
        return redirect()->route('login');
    }
    public function redirectUser()
    {
        if (auth()->user()->hasRole('admin')) {
            return redirect()->route('menu.view');
        }

        if (auth()->user()->hasRole('user')) {
            return redirect()->route('user.home');
        }

        if (auth()->user()->hasRole('teknisi')) {
            return redirect()->route('home_teknisi');
        }
    }
    public function logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }
}
