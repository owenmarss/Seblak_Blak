<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SopController extends Controller
{
    //
    public function goToSopDirectory() {
        return view('sopDirectory', [
            "title" => "SOP Directory"
        ]);
    }
}
