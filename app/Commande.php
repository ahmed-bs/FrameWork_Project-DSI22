<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function Panier()
    {
        return $this->belongsTo('App\Panier');
    }
    public function Livraison()
    {
        return $this->hasMany('App\Livraison');
    }
    public function Paiement()
    {
        return $this->hasOne('App\Paiement');
    }
}
