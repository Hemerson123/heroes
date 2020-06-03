@extends('layouts.plantilla')

@section('content')

<h2 class="text-center mt-3"> LISTA DE VILLANOS </h2>

<div class="row">

	@foreach($heroes as $heroe)
	<div class="col-12 col-sm-6 col-md-4 col-lg-3nm d-flex align-items stretch">

	<div class="card my-3 p-2  shadow-sm color-fondo">

		<img src="{{asset($heroe->imagen)}}"alt="imagen de {{$heroe ->nombre}}" class ="card-img-top rounded rounded-circle">

		<div class="card-body ">

			<h4 class="card-title">{{$heroe -> nombre}}</h4>
			<p class="card-text">{{ $heroe -> titulo}}</p>
			</div>
			<div class="card-footer text-center">


			<a href="{{ route('heroe',['heroe'=> $heroe-> id ]) }}" class="myButton"> Ver Mas
			</a>
		</div>
	</div>
	</div>
	@endforeach
</div>
@endsection

