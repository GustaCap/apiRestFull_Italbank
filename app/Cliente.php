<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $table = 'clientes';

    protected $fillable = ['id','tokenCliente','nombre','apellido','tipocliente_id'];

    public function tipocliente()
    {
        return $this->belongsTo('App\Tipocliente');
    }

    public function archivos()
    {
        return $this->hasMany('App\Archivo');
    }

    // protected $primaryKey = 'id';
    // protected $connection = 'pgsql';



}
