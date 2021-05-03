<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    public function Commande()
    {
        return $this->belongsTo('App\Commande');
    }
}
