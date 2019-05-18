<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	/**
	* Los atributos que son asignable en masa.
	*
	*
	*/
	protected $fillable = [
		'nombre_produccto','descripcion','domicilio','domicilio','coste'
	];

	/**
	* Los atributos que deberían ser invisibles para los arrays.
	*
	*
	*/
	/* protected $hidden = [
		'',
	];*/

	/**
	* Los atributos que se deben asignar a los tipos nativos.
	*
	*
	*/ 
	/*protected $casts = [
	];
	*/
}
