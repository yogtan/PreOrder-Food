<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembuatan extends Model
{
    use HasFactory;

    public function produk()
    {
        return $this->belongsTo(Order::class, 'produk_id');
    }
}
