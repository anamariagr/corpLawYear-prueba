<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset("css/app.css")}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<header class="navbar navcorp">
<a href="/index" class="icon_corplaw"></a>
<div class="navbar-nav-scroll">
	<ul class="nav justify-content-center">
		<li class="nav-item"><a class="nav-link" href="{{route('lineContact')}}">Consulta en línea</a></li>
		<li class="nav-item"><a class="nav-link" href="{{route('services')}}">Servicios</a></li>
		<li class="nav-item"><a class="nav-link" href="{{route('lawyears')}}">lawyears</a></li>
		<li class="nav-item"><a class="nav-link" href="{{route('customers')}}">customers</a></li>
		<li class="nav-item"><a class="nav-link" href="{{route('contact')}}">contacto</a></li>
	</ul>
</div>
<div>
	<button class="btn_8-4 btn_white">Ingresar</button>
			<button class="btn_8-4 btn_red">Registrarme</button>
</div>
</header>
<nav class="red">

</nav>

@yield("content")
<footer>
<div class="container">
	<div class="row">
		<div class="col-3">
			<ul class="text_info_footer">
                <li><a href="/index"><div  class="icon_corplaw"></div></a></li>
                <li><a href="">Bogotá: Cll 94 # 00 - 00 Oficina 401</a></li>
                <li><a href="">000 000 0000.   </a><span><a href="">0    000 000</a></span></li>
                <li><a href="">gerencia@corplawyers.co</a></li>
            </ul>
		</div>
			<div class="col-9">
				<div class="row">
					<div class="col-5">
						<div class="row">
							<div class="col-6">
								<ul class="item_one_straight">
					                <li><a href="#">Derecho informático</a></li>
					                <li><a href="#">Derecho laboral</a></li>
					                <li><a href="#">Derecho comercial</a></li>
					                <li><a href="#">Derecho corporativo</a></li>
					            </ul>
							</div>
							<div class="col-6">
								  <ul class="ul_propied">
					                <li><a href="#">Propiedad intelectual</a></li>
					                <li><a href="#">Protección al consumidor</a></li>
					                <li><a href="#">Protección de datos personales</a></li>
					                <li><a href="#">Protección a la competencia empresarial</a></li>
					            </ul>
							</div>
						</div>
					</div>
					<div class="col-7">
						<div class="row">
							<div class="col-4">
								 <ul class="ul_prosess">
					                <li><a href="#">Procesos de insolvencia</a></li>
					                <li><a href="#">Derecho constitucional</a></li>
					                <li><a href="#">Derecho administrativo</a></li>
					                <li><a href="#">Derecho disciplinario</a></li>
					            </ul>
							</div>
							<div class="col-4">
								 <ul class="ul_straight">
						             <li><a href="#">Derecho tributario</a></li>
					                <li><a href="#">Derecho penal</a></li>
					                <li><a href="#">Derecho civil</a></li>
					                <li><a href="#">Derecho inmobiliario</a></li>
						            </ul>
							</div>
							<div class="col-4">
								<ul class="ul_procedure">
					                <li><a href="#">Trámites notariales</a></li>
					                <li><a href="#">Resolución de conflictos</a></li>
					                <li><a href="#">Compliance</a></li>
					                <li><a href="#">Responsabilidad social (probono)</a></li>
					            </ul>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row justify-content-center social">
		<div><p class="text-center">Síguenos en nuestras redes</p></div>
		<div><img src="/img/face.png"></div>
		<div><img src="/img/TwitterLogo.png"></div>
		<div><img src="/img/Link.png"></div>
	</div>
</div>
<div class="container-fluid">
	<div class="row justify-content-center color_footer_year">
		<div class="col-4"><p class="text-center">
			2020 © Copyright Corplawyers
		</p></div>
	</div>
</div>
</footer>

<script src="js/slick.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>