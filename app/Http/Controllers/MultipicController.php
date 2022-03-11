<?php

namespace App\Http\Controllers;

use App\Models\Multipic;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;
use Session;
class MultipicController extends Controller
{
    public function Multipic()
    {
        $images = Multipic::all();
        return view('multipic.index', compact('images'));
    }

    public function StoreImg(Request $request)
    {
        $image = $request->file('image');
// if (is_array($image) || is_object($image)){
        foreach ($image as $multi_img) {

            $name_gen = hexdec(uniqid()) . '.' . $multi_img->getClientOriginalExtension();
            Image::make($multi_img)->resize(300, 300)->save('image/multi/' . $name_gen);

            $last_img = 'image/multi/' . $name_gen;

            Multipic::insert([
                'image' => $last_img,
                'created_at' => Carbon::now(),
            ]);
        }
Session::flash('sukses', 'Ini notifikasi SUKSES');

        return Redirect()->back()->with('Sukses', 'Berhasil ditambahkan');
    }
}
