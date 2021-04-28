<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    public function Commande()
    {
        return $this->hasMany('App\Commande');
    }
}
