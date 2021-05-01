<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public function catalogue()
    {
        return $this->belongsTo('App\Catalogue');
    }
    public function panier()
    {
        return $this->hasMany('App\Panier');
    }
}
