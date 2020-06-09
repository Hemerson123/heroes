@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="text-center">LISTA DE VILLANOS</h1>

	<a href= "{{route('heroes.create')}}" class="myButton m-3">Crear</a>


	<div class="table-responsive shadow">
		<table class="table-striped border">
			<thead class="thead-light">
				<tr>
				<th class=" d-none text-center d-md-table-cell">ID</th>
				<th class="  text-center">Nombre</th>
				<th class=" d-none text-center d-md-table-cell">Titulo</th>
				<th class=" d-none text-center d-md-table-cell">Descripcion</th>
				<th class=" d-none text-center d-md-table-cell">Imagen</th>
				<th class=" d-none text-center d-md-table-cell">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($heroes as $heroe)
<tr>
	<td class="d-none d-md-table-cell">{{$heroe ->id}}</td>
	<td>{{$heroe ->nombre}}</td>
	<td class="d-none d-md-table-cell">{{$heroe ->titulo}}</td>
	<td class="d-none d-md-table-cell">{{$heroe ->descripcion}}</td>
	<td class="d-none d-md-table-cell">{{$heroe ->imagen}}</td>
	<td>
		<a href="{{route('heroes.edit',['heroe'=> $heroe->id])}}" class="myButton d-block text-center mb-2">
			<i class="fas fa-edit icono2"></i>
		</a>
		<form method="POST" class="d-inline" action="{{route('heroes.destroy',['heroe'=>$heroe->id])}}">
			@csrf
			@method('DELETE')
			<button type="submit" class="myButton d-block text-center mb-2"onclick="return confirm('¿Seguro que quieres elimarlo? text-dark')">

			<i class="fas fa-trash-alt icono"></i>

		</button>

		</form>
	</td>
</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection