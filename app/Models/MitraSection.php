<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MitraSection extends Model
{
    protected $fillable = ['icon', 'title', 'description'];

    public function getIconUrlAttribute()
    {
        return $this->icon
            ? asset('storage/' . $this->icon)
            : null;
    }
}
