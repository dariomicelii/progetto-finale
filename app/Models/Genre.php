<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function records() {
        return $this->hasMany(Record::class);
    }
}
