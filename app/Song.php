<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    //
    protected $fillable = [
        'name', 'about_song', 'about_artist', 'cover_image'
    ];
}