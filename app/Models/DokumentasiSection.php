<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DokumentasiSection extends Model
{
    protected $fillable = ['image', 'title', 'description'];

    public function getImageUrlAttribute()
    {
        return $this->image
            ? asset('storage/' . $this->image)
            : null;
    }
}
