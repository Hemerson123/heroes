@extends('layouts.plantilla')

@section('content')


<div class="container">

	<h1>VILLANO NUEVO</h1>
	<form method="POST" action="{{route('heroes.update',['heroe'=> $heroe-> id])}}" enctype="multipart/form-data">

		@csrf
		@method('PUT')

		<div class="form-row">
		<label>Nombre</label>
		<input type="text" name="nombre" class="form-control" value="{{$heroe->nombre}}" required>
		</div>

		<div class="form-row">
		<label>Titulo</label>
		<input type="text" name="titulo" class="form-control" value="{{$heroe->titulo}}" required>
		</div>

		<div class="form-row">
		<label>Descripcion</label>
		<input type="text" name="descripcion" class="form-control" value="{{$heroe->descripcion}}" required>

		<div class="form-row">
		<label>Imagen   </label>
		<input type="file" name="imagen" class="form-control-fle" value="{{$heroe->imagen}}" required>

		</div>

		<div>
			<button type="submit" class="btn btn primary mt-3 ">Enviar</button>
		
	</form>
	</div>
</div>
@endsection