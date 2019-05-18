<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'rut','giro','telefono','direccion','email', 'categoria'
    ];
    
   public function Service(){
	return $this->hasMany('App\','patente');
   }

}
