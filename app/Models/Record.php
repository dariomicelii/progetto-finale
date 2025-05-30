<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Record extends Model
{
    public function genre() {
        return $this->belongsTo(Genre::class);
    }
    protected $fillable = ['title', 'artist', 'year', 'genre_id', 'cover_image']; 
}
