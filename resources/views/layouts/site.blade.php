<!DOCTYPE html>
<html>
<head>
	@yield('title')
		<title>Empaques Flexibles y al Alto Vacío | Bemis Empaques de México</title>
	<meta charset=utf-8>
	<meta name=description content="Fabricación de empaques personalizados para la industria, etiqueta bopp, bolsa pouch por extrusión, empaques de polipropileno ¡Descubre soluciones de empaques!">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="icon" href="{{asset('img/favicon.png')}}">
</head>
<body>
	<div class="wrap-content">
		<header>
			<nav class="main">
				<a href="/" class="brand nav-block">
					<img src="{{asset('img/bemis-soluciones_de_empaques_mexico.png')}}" alt="Bemis México">
				</a>
				<ul class="main-nav">
				    <li>
				    	<a href="/">
				    		<span>Inicio</span>
				    	</a>
				    </li>
				    <li class="has-submenu">
				    	<a href="#"><span>Mercados</span></a>
				    	<ul class="submenu">
				    		@foreach(App\Market::all() as $market)
				    		<li>
				    			<a href="../mercado/{{$market->slug}}">{{$market->name}}</a>
				    		</li>
				    		@endforeach
				    	</ul>
				    </li>
				    <li>
				    	<a href="http://bridge164.qodeinteractive.com/" target="_blank"><span>Blog</span></a>
				    </li>
				    <li>
				    	<a href="/contacto"><span>Contacto</span></a>
				    </li>
				</ul>
			</nav>
			
		</header>
		<div class="main-content">
			@yield('content')
		</div>
	</div>
</body>
<footer>
	<div class="container">
		<div class="row ">
			<div class="col-md-6">
				<img class="brand-footer" src="{{asset('img/bemis-empaques_flexibles-logo.png')}}">
				<p class="left">
					<span class="rwd-line">Copyright © 2018 Bemis Company,Inc. </span>
					<span class="rwd-line">Todos los derechos reservados.</span>
				</p>
				<p class="left"><a href="{{asset('aviso-privacidad.pdf')}}" target="_blank">Política de Privacidad</a></p>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<p>
							<span class="rwd-line">Contacto</span>
							<span class="rwd-line">Teléfono: 52 33 3669-1400</span>
							<span class="rwd-line">comunicacion-mx@bemis.com</span>
						</p>
					</div>
					<div class="col-md-6">
						<ul class="social-links">
							<li>
								<a href="https://www.facebook.com/Bemis-Packaging-M%C3%A9xico-1609464345813217/" target="_blank">
									<img src="{{asset('img/icons/facebook.png')}}" alt="Bemis México">
									/Bemis-Packaging-México
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/bemis-m%C3%A9xico/" target="_blank">
									<img src="{{asset('img/icons/linkedin.png')}}" alt="Bemis México">
									/bemis-méxico
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</html>