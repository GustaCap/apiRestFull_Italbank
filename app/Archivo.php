<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{

    protected $table = 'archivos';

    protected $fillable = ['id','files','cliente_id'];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }


}
