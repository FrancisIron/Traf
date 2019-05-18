<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nombre','empresa','categoria','descripcion','coste', 'stock'
    ];
}
