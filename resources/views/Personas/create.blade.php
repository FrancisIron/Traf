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
   
<form action="{{ route('empresa.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
	<div class="container">
		<div class="form-group">
			<label for="exampleFormControlInput1">R.U.T de la Empresa</label>
    			<input type="text" class="form-control" name="rut">
  		</div>
	
		<div class="form-group">
                        <label for="exampleFormControlInput1">Giro de la Empresa</label>
                	<input type="text" class="form-control" name="giro">
		</div>
		<div class="form-group">
                        <label for="exampleFormControlInput1">Telefono</label>
                        <input type="number" class="form-control" name="telefono">
                </div>
		<div class="form-group">
                        <label for="exampleFormControlInput1">Direccion</label>
                        <input type="text" class="form-control" name="direccion">
                </div>
		<div class="form-group">
                        <label for="exampleFormControlInput1">Email contacto</label>
                        <input type="email" class="form-control" name="email">
                </div>
		<div class="form-group">
                        <label for="exampleFormControlInput1">Categoria</label>
                        <input type="text" class="form-control" name="categoria">
                </div>
        </div>
	<div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
@endsection
