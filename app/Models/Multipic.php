<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multipic extends Model
{
    use HasFactory;
    
 protected $fillable = [
        'image',
    ];
      public function barang()
    {
        return $this->belongsTo('App\Models\Barang', 'image_id','id');
    }
    
}


