<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agres extends Model
{
    public function elements()
    {
        return $this->hasMany(Element::class);
    }
}
