<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SopController extends Controller
{
    //
    public function goToSopDirectory() {
        return view('sop.sopDirectory', [
            "title" => "SOP Directory"
        ]);
    }

    public function goToSopPagePerId() {
        return view('sop.sopPage', [
            "title" => "Judul SOP"
        ]);
    }
}
