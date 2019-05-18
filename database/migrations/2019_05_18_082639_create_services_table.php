<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       	Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
	    $table->string('path');
	    $table->string('nombre_produccto');
	    $table->string('descripcion');
	    $table->boolean('domicilio');
	    $table->string('categoria');
	    $table->integer('coste');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
