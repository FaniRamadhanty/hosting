<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    use HasFactory;

      public function barang()
    {
        return $this->belongsTo('App\Models\Barang', 'barang_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'pesanan_id','id');
    }

    
}
