<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class incidente extends Model
{
    public function tipoincidente(){
        return $this->belongsTo('\App\tipoincidente','tipo_incidente');
    }
}
