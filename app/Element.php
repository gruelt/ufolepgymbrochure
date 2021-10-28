<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{

    public function agres()
    {
        return $this->belongsTo(Agres::class);
    }

    public function famille()
    {
        return $this->belongsTo(Famille::class);
    }

}
