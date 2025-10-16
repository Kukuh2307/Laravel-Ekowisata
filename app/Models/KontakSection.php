<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KontakSection extends Model
{
    protected $fillable = ['email', 'phone', 'address', 'facebook', 'instagram', 'twitter', 'youtube'];
}
