<?php

namespace App\Http\Controllers;

use App\Models\Barang;

class FrontController extends Controller
{
    public function tampil()
    {
        $barangs = Barang::all();
        return view('tampilan', compact('barangs'));
    }
}
