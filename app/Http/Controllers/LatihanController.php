<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index(Request $request){

        $nilai1 = $request->nilai1;
        $nilai2 = $request->nilai2;
        $tinggi = $request->tinggi;
        
        $hasil = ($nilai1 + $nilai2) / 2 * $tinggi;
        

        return view('latihan', compact('hasil'));
    }
}
