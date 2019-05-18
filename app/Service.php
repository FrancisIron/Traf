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
		'company','name_service','description_service','name_client','hour','date','reserve','value','ubication','type','in_home'
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
