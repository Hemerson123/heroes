@extends('layouts.app')

@section('content')


<div class="container">

	<h1 class="text-center text-strong text-white">VILLANO NUEVO</h1>
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
		<textarea name="descripcion" class="form-control" rows="4" required >{{$heroe->descripcion}}
		</textarea>
		

		<div class="form-row">
		<label class="m-3">Imagen   </label>
		<input type="file" name="imagen" class="form-control-fle m-3" value="{{$heroe->imagen}}" required>

		</div>

		<div>
			<button type="submit" class="btn btn primary mt-2 ml-4">
				<i class="fas fa-share icono1 mb-2 mr-2"></i>
			</button>

			<button type="reset" class="btn btn primary mt-2 ml-4">
				<i class="fab fa-leanpub"></i>
			</button>
		<a href="{{route('heroes.index')}}" class="btn btn-danger btn-lg text-light">
			<i class="fas fa-undo-alt"></i>
		</a>

			
		
	</form>
	</div>
</div>
@endsection