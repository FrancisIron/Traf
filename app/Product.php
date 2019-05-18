<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nombre','empresa','categoria','descripcion','coste', 'stock'
    ];

    public function empresa()
    {
        return $this->belongsTo('App\Empresa');
    }

}
