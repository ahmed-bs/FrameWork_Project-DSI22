<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    public function products()
    {
        return $this->hasMany('App\Produit');
    }
}
