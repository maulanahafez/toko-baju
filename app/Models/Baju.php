<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baju extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jenis_baju()
    {
        return $this->belongsTo(JenisBaju::class);
    }

    public function penjualan()
    {
        return $this->hasOne(Penjualan::class);
    }
}
