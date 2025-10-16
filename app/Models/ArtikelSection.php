<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtikelSection extends Model
{
    protected $fillable = ['image', 'title', 'description'];

    public function getImageUrlAttribute()
    {
        return $this->image
            ? asset('storage/' . $this->image)
            : null;
    }
}
