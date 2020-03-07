<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raiz extends Model
{

    protected $table = 'raices';

    protected $fillable = ['id','carpetaRaiz','tipocliente_id'];

    public function tipoclientes()
    {
        return $this->hasMany('App\Tipocliente');
    }



}
