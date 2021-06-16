<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'about_cafe', 'about_barista', 'Playlist', 'latitude', 'longitude'];
}
