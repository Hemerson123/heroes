@extends('layouts.app')

@section('content')


<div class="container">

	<h1>VILLANO NUEVO</h1>
	<form method="POST" action="{{route('heroes.store')}}" enctype="multipart/form-data">

		@csrf

		<div class="form-row">
		<label>Nombre</label>
		<input type="text" name="nombre" class="form-control" required>
		</div>

		<div class="form-row">
		<label>Titulo</label>
		<input type="text" name="titulo" class="form-control" required>
		</div>

		<div class="form-row ">
		<label>Descripcion</label>
		<textarea name="descripcion" class="form-control" rows="4" required>
		</textarea>
		

		<div class="form-row">
		<label class="mt-4 mr-4">Imagen   </label>
		<input type="file" name="imagen" class="form-control-fle mt-4 mr-4">

		</div>

		<div>
			<button type="submit" class="myButton mt-2 ml-4" >
				<i class="fas fa-share icono1"></i>
			</button>
		
	</form>
	</div>
</div>
@endsection