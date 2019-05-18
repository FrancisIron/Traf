<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'rut','giro','telefono','direccion','email', 'categoria'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function productos()
    {
        return $this->hasMany('App\Product');
    }


   public function service(){
	return $this->hasMany('App\Service');
   }

}
