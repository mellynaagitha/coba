<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class admin extends Model
{
    use HasFactory;
    public function pariwisata()
    {
        return $this->hasMany(pariwisata::class);
    }
}
