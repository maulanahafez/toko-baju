<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBaju extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bajus()
    {
        return $this->hasMany(Baju::class);
    }
}
