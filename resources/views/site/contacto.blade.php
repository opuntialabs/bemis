@extends('layouts.site')
@section('title')
<title>Bemis Empaques México | 	Contacto </title>
@endsection
@section('content')
<section class="contacto">
	<div class="container">
		<div class="space"></div>

		<h1 class="title-blue left"> Contacto</h1>
		<div class="half-space"></div>
		<form>
			<div class="row">
				<div class="col-md-6">
					<input type="text" class="form-control" placeholder="Nombre">
				</div>
				<div class="col-md-6">
					<input type="email" class="form-control" placeholder="Email">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<input type="text" class="form-control" placeholder="Nombre Empresa">
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" placeholder="Teléfono">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<textarea class="form-control" rows="3" placeholder="Comentarios"></textarea>
				</div>
			</div>
			<input type="submit" value="Enviar">
		</form>
		<div class="space"></div>
		<div class="space"></div>
	</div>
</section>
@endsection