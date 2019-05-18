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
   
<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
	<div class="container">
		<div class="form-group">
			<label for="exampleFormControlInput1">Nombre Producto</label>
    			<input type="text" class="form-control" name="nombre">
  		</div>
		<div class="form-group">
                        <label for="exampleFormControlInput1">Precio unitario</label>
                        <input type="number" class="form-control" name="coste">
                </div>
		<div class="form-group">
                        <label for="exampleFormControlInput1">Stock</label>
                        <input type="number" class="form-control" name="stock">
                </div>
		<div class="form-group">
                        <label for="exampleFormControlInput1">Descripcion producto</label>
                        <input type="text" class="form-control" name="descripcion">
                </div>
		<div class="form-group">
                        <label for="exampleFormControlInput1">Empresa</label>
                        <input type="text" class="form-control" name="empresa">
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
