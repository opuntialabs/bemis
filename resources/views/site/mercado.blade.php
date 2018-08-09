@extends('layouts.site')
@section('title')
<title>Bemis Empaques México | 	Mercados </title>
@endsection
@section('content')
<section class="hero soluciones">
	<div class="imgCenter">
		<img src="../{{$market->cover}}" alt="Soluciones de empaque ideal para {{$market->name}}">
	</div>
	<div class="title">
		<h1 class="left title-blue">Soluciones de empaque ideal para {{$market->name}}.</h1>
	</div>
	
</section>
<section class="empaques">
	<div class="container-fluid">
		<div class="half-space"></div>

		<h2 class="title-blue left subtitle">
			<span>Características de empaque: </span>
		</h2>
		<div class="half-space"></div>
		<div class="description-market">
			{!! $market->description !!}
		</div>
		<div class="half-space"></div>
		<h2 class="title-blue left subtitle">
			<span>Aplicaciones </span>
		</h2>
		<ul>
			@foreach($market->applications as $application)
			<li>{{$application->name}}</li>
			@endforeach
		</ul>
		<div class="half-space"></div>
		<h2 class="title-blue left subtitle">
			<span>Soluciones de empaque: </span>
		</h2>
		<ul>
		    @foreach($market->solutions as $solution)
			<li>{{$solution->name}}</li>
			@endforeach
		</ul>
		<div class="space"></div>
	</div>
</section>
<section class="contactanos">
	<div class="container">
		<h4 class="title-blue">¿Buscas una solución de empaque?</h4>
		<a href="/contacto">¡Contáctanos!</a>
	</div>
</section>
@endsection