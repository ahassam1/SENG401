<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function writtenby() {
        return $this->hasMany(WrittenBy::class);
    }
}
