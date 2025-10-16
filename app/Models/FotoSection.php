<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FotoSection extends Model
{
    protected $fillable = ['image', 'title'];

    // accessor for image to return full url
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/foto_sections/' . $this->image) : null;
    }
}
