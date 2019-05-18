@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Datos Empresa</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
	<div class="container">
		<div class="form-group">
			<label for="exampleFormControlInput1">Nombre</label>
    			<input type="text" class="form-control" name="nombre">
  		</div>
		<div class="form-group">
                        <label for="exampleFormControlInput1">Categoria</label>
                        <input type="text" class="form-control" name="categoria">
                </div>
		<div class="form-group">
                        <label for="exampleFormControlInput1">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion">
                </div>
		<div class="form-group">
                        <label for="exampleFormControlInput1">A domicilio</label>
                        <div class="input-group mb-3">
  				<select class="custom-select" name="domicilio" id="inputGroupSelect01">
    					<option value="0">si</option>
    					<option value="1">no</option>
  				</select>
			</div>
                </div>
		<div class="form-group">
                        <label for="exampleFormControlInput1">Coste</label>
                        <input type="number" class="form-control" name="coste">
                </div>
	        <div class="form-group">
                	<strong>Imagen referencial servicio:</strong>
                	<input type="file" id="path-per" name="img_serv">
        	</div>
        </div>
	<div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
@endsection
