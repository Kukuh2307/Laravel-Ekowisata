<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdukSection extends Model
{
    protected $fillable = ['image', 'title', 'description', 'price'];

    // accessor for image to return full url
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/produk_sections/' . $this->image) : null;
    }
}
