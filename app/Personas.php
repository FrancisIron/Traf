<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    protected $fillable = [
        'user_name','run','direccion','telefono'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
