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
        
}
