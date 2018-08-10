@extends('layouts.site')
@section('title')
<title>Bemis Empaques México | 	Inicio </title>
@endsection
@section('content')
<section class="hero">
	@foreach($banners as $banner)
		<img src="../{{$banner->banner_img}}" alt="Empaques flexibles México">
	@endforeach
</section>
<section class="somos">
	<div class="container-fluid">
		<div class="half-space"></div>
		<div class="row">
			<div class="title-square">
				<h1 class="center">
					<span> ¿Quiénes Somos?</span>
				</h1>
			</div>
		</div>
	</div>
	<div class="half-space"></div>
	<div class="container">
		<p class="description justify"> Bemis es un proveedor de empaques global que ha desempeñado un papel influyente en la industria a lo largo de los años desde su fundación. </p>
		<p class="description justify">Con sede en Neenah, Wisconsin, la compañía presta servicios a clientes de todo el mundo y produce empaques para los productos que se encuentran en casi todos los pasillos del supermercado.</p>
		<p class="description justify">Para la fabricación de los empaques, utilizamos nuestra fuerte base técnica en química de polímeros, extrusión de películas, recubrimiento y laminación, impresión y conversión; para diseñar empaques, desarrollar  y fabricar soluciones innovadoras de empaques capaces de extender la vida útil del producto, entregando conveniencia, proporcionando esterilidad y agregando valor a los productos y las marcas de nuestros clientes.</p>
		<p class="description justify">En México, la compañía opera en el segmento de empaques flexibles para los mercados de alimentos, empaques para bebidas y alimentos líquidos, empaques para cosméticos, empaques de productos farmaceuticos, empaques para productos de cuidado personal, limpieza del hogar, médico-hospitalario y alimentos para mascotas. </p>
		<p class="description justify">Más de 800 profesionales son parte del equipo que conforma Bemis México.<br>El crecimiento de Bemis es el resultado del alto nivel de servicio prestado a nuestros clientes, oferta de productos con calidad diferenciada, inversiones continuas en nuevos equipos y principalmente la innovación. Mucho más allá ser una simple convertidora de empaques, somos una empresa dedicada al desarrollo estratégico de materiales para la creación de empaques sustentables en todos los sentidos.</p>
	</div>
	<div class="half-space"></div>
	<div class="container">
		<h2 class="center title-blue">¿Por qué elegir bemis?</h2>
		<div class="half-space"></div>
		<div class="por-que-bemis">
			<div class="element">
				<div class="icon">
					<img src="{{asset('img/icons/experiencia.png')}}" alt="">
				</div>
				<p>
					<span class="rwd-line">Experiencia y calidad</span>
				</p>
			</div>
			<div class="element">
				<div class="icon">
					<img src="{{asset('img/icons/tierra.png')}}" alt="">
				</div>
				<p>Los metros que fabricamos en un año equivale a darle 10.33 vueltas a la superficie de la Tierra
				</p>
			</div>
			<div class="element">
				<div class="icon">
					<img src="{{asset('img/icons/empaques.png')}}" alt="">
				</div>
				<p>
					<span class="rwd-line">Desarrollo de soluciones </span>
					<span class="rwd-line">sustentables e innovadoras</span>
				</p>
			</div>
		</div>
	</div>
	<div class="space"></div>
</section>
<section class="nuestros-productos">
	<div class="container">
		<div class="half-space"></div>
		<h2 class="title-white left">Mercados</h2>
		<div class="half-space"></div>
		<div class="productos-soluciones">
			@foreach($markets as $market)
				<div class="producto">
					<img src="{{$market->avatar}}" alt="{{$market->name}}">
					<a href="mercado/{{$market->slug}}">
						<h3>{{$market->name}}</h3>
					</a>
				</div>
			@endforeach
		</div>
		<div class="half-space"></div>
	</div>
</section>
<section class="certificaciones" id="certificaciones">
	<div class="container-fluid">
		<div class="half-space"></div>
		<div class="title-left-line">
			<h2 class="center">
				<span>Certificaciones</span>
			</h2>
		</div>
	</div>
	<div class="half-space"></div>
	<div class="container certificaciones">
		<div class="certificacion">
			<div class="imgCenter">
				<img src="{{asset('img/icons/iso9001.svg')}}" class="iso">
			</div>
			<p class="center"> 
				<span class="rwd-line">Certificada Tultitlán desde el 2016, </span>
				<span class="rwd-line"> en proceso de certificación Zacatecas y Tlaquepaque</span>
			</p>
		</div>
		<div class="certificacion">
			<div class="imgCenter">
				<img src="{{asset('img/icons/fssc-22000-logo.png')}}" class="fs">
			</div>
			<p class="center">
				<span class="rwd-line">Certificada Tultitlán desde 2008, </span>
				<span class="rwd-line">en transición a versión 2015 de ISO-9001</span>
			</p>
		</div>
	</div>
	<div class="half-space"></div>
</section>
<section class="contactanos">
	<div class="container">
		<h4 class="title-blue">¿Buscas una solución de empaque?</h4>
		<a href="/contacto">¡Contáctanos!</a>
	</div>
</section>

@endsection