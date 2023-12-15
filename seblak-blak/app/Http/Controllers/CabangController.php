<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    //
    public function goToCabang() {
        $Cabang = Cabang::get();
        return view('cabang.cabang', [
            "title" => "Cabang",
            "cabangs" => $Cabang
        ]);
    }

    public function deleteCabang(Request $req) {
        $Cabang = Cabang::where('id', $req->id_cabang)->delete();
        return redirect('/cabang');
    }

    public function goToAddCabang() {
        return view('cabang.addCabang', [
            "title" => "Tambahkan Cabang"
        ]);
    }

    public function addCabang(Request $req) {
        Cabang::create([
            'nama' => $req->input('addNamaCabang'),
            'lokasi' => $req->input('addLokasiCabang'),
            'owner' => $req->input('addOwnerCabang'),
            'manager' => $req->input('addManagerCabang'),
        ]);
        return redirect('/cabang');
    }
}
