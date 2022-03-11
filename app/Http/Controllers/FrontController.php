<?php

namespace App\Http\Controllers;

use App\models\Barang;

class FrontController extends Controller
{
    public function tampil()
    {
        $barangs = Barang::all();
        return view('tampilan', compact('barangs'));
    }
}
