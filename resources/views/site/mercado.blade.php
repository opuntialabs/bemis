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
		<div class="row-flex">
			<div class="col-md-8">
				<h2 class="title-blue left subtitle">
					<span>Características de empaque </span>
				</h2>
				<div class="half-space"></div>
				<div class="description-market">
					{!! $market->description !!}
				</div>
			</div>
			<div class="col-md-4">
				<div class="imgCenter">
					<img src="../{{$market->description_img}}" alt="{{$market->name}}">
				</div>
			</div>
		</div>
		<div class="half-space"></div>
		<div class="row-flex">
			<div class="col-md-6">
				<div class="imgCenter">
					<img src="../{{$market->application_img}}" alt="{{$market->name}}">
				</div>
			</div>
			<div class="col-md-6">
				<h2 class="title-blue right subtitle">
					<span>Aplicaciones del empaque</span>
				</h2>
				<ul class="aplicaciones-list">
					@foreach($market->applications as $application)
					<li>{{$application->name}}</li>
					@endforeach
				</ul>
			</div>
		</div>
		
		
		<div class="half-space"></div>
		<div class="soluciones-empaque">
				<h2 class="title-blue center subtitle">
					<span>Soluciones de empaque </span>
				</h2>
				<ul class="soluciones-list">
				    @foreach($market->solutions as $solution)
					<li>{{$solution->name}}</li>
					@endforeach
				</ul>
				<div class="imgCenter">
					<img src="../{{$market->solution_img}}" alt="{{$market->name}}">
				</div>
			<div class="space"></div>
		</div>
	</div>
</section>
<section class="contactanos">
	<div class="container">
		<h4 class="title-blue">¿Buscas un empaque personalizado? <span>¡Recuerda que somos fabricantes!</span></h4>
		<a href="/contacto">¡Contáctanos!</a>
	</div>
</section>
@endsection