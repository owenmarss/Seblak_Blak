<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CabangController extends Controller
{
    //
    public function goToCabang() {
        return view('cabang', [
            "title" => "Cabang"
        ]);
    }
}
