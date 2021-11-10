<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class pariwisata extends Model
{
    use HasFactory;
    public function author()
    {
        return $this->belongsTo(admin::class);
    }
}
