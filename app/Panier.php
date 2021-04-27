<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    public function client()
    {
        return $this->belongsTo('App\Client');
    }
    public function commande()
    {
        return $this->belongsTo('App\Commande');
    }
    public function produit()
    {
        return $this->hasMany('App\Produit');
    }
}
