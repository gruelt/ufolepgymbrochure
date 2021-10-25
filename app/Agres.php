<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agres extends Model
{
    /** REturns all elements in Agrès
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function elements()
    {
        return $this->hasMany(Element::class);
    }

    /** Return all Famillies in Agrès
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function familles()
    {
        return $this->hasMany(Famille::class);
    }

}
