@extends('layouts.plantilla')

@section('content')
<div class="container">
	<h1>Lista de Villanos</h1>

	<a href= "{{route("heroes.create")}}" class="myButton">Crear</a>


	<div class="table-responsive shadow">
		<table class="table-striped border">
			<thead class="thead-light">
				<tr>
				<th class="text-center">ID</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Titulo</th>
				<th class="text-center">Descripcion</th>
				<th class="text-center">Imagen</th>
				<th class="text-center">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($heroes as $heroe)
<tr>
	<td>{{$heroe ->id}}</td>
	<td>{{$heroe ->nombre}}</td>
	<td>{{$heroe ->titulo}}</td>
	<td>{{$heroe ->descripcion}}</td>
	<td>{{$heroe ->imagen}}</td>
	<td>
		<a href="{{route('heroes.edit',['heroe'=> $heroe->id])}}" class="myButton d-block text-center mb-2">
			Editar
		</a>
		<form method="POST" class="d-inline" action="{{route('heroes.destroy',['heroe'=>$heroe->id])}}">
			@csrf
			@method('DELETE')
			<button type="submit" class="myButton d-block text-center mb-2">Eliminar</button>
		</form>
	</td>
</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection