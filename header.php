<!doctype html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>CEUHZ</title>
	
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" media="all">
	
	<link href='http://fonts.googleapis.com/css?family=Merriweather:700,300,400,900' rel='stylesheet' type='text/css'>
	
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/cycle.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/validate.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/messages_es.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>

	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicon.ico">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

</head>

<body>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div id="container">
		
		<div id="header_100">
		<div id="header">
			<div id="logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php bloginfo('template_url'); ?>/images/logo_ceuhz.png" alt="ceuhz" >
				</a>
				<h1>CEUHZ</h1>
			</div><!-- logo -->
			
			<ul id="nav">
				<li>
					<a href="#">Licenciatura</a>
					<ul>
						<li>Ciencias Sociales
							<ul>
								<li><a href="<?php echo home_url('/licenciatura-en-derecho'); ?>"> Derecho </a></li>
								<li><a href="<?php echo home_url('/licenciatura-en-administracion-publica'); ?>">Administración Pública</a></li>
							</ul>
						</li>
						<li>Ciencias Administrativas
							<ul>
								<li><a href="<?php echo home_url('/licenciatura-en-contaduria'); ?>">Contaduría</a></li>
								<li><a href="<?php echo home_url('/licenciatura-en-administracion'); ?>">Administración</a></li>
								<li><a href="<?php echo home_url('/licenciatura-en-negocios-y-comercio-internacionales/'); ?>">Negocios y Comercio Internacional</a></li>
							</ul>
						</li>
						<li>Tecnología
							<ul>
								<li><a href="<?php echo home_url('/licenciatura-ingenieria-industrial'); ?>">Ingeniería Industrial</a></li>
								<li><a href="<?php echo home_url('/licenciatura-en-informatica-administrativa'); ?>">Licenciatura en Informática Administrativa</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Preparatoria</a>
					<ul>
						<li><a href="<?php echo home_url('/preparatoria-uaemex'); ?>">Preparatoria Universitaria U.A.E.Mex</a></li>
						<li><a href="<?php echo home_url('/preparatoria-s-e-g-e-m'); ?>">Preparatoria Profesional SEGEM</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Alumnos</a>
					<ul>
						<li> <a href="http://logiweb.gsl.com.mx:8395/CEUHZ13" target="_blank"> Biblioteca Digital</a></li>
						<li> <a href="<?php echo home_url('/difusion-cultural'); ?>"> Difusión Cultural</a></li>
						<li> <a href="<?php echo home_url('/deportes'); ?>"> Deportes</a></li>
						<li> <a href="<?php echo home_url('/servicio-social'); ?>"> Servicio Social</a></li>
						<li> <a href="<?php echo home_url('/practicas-profesionales'); ?>"> Prácticas profesionales</a></li>
						<li> <a href="<?php echo home_url('/servicios-escolares'); ?>"> Servicios Escolares</a></li>
						<li> <a href="<?php echo home_url('/servicios-administrativos'); ?>"> Servicios Administrativos</a></li>
					</ul>
				</li>
				<li>
					<a href="#">C.E.Le.</a>
					<ul>
						<li> <a href="<?php echo home_url('/c-e-l-e-ingles'); ?>"> Inglés </a></li>
						<li> <a href="<?php echo home_url('/c-e-l-e-frances'); ?>"> Francés </a></li>
					</ul>
				</li>
				<li>
					<a href="#">Egresados</a>
					<ul>
						<li> <a href="<?php echo home_url('/titulacion'); ?>"> Titulación </a> </li>
						<li> <a href="<?php echo home_url('/bolsa-de-trabajo'); ?>"> Bolsa de Trabajo </a> </li>
						<li> <a href="<?php echo home_url('/seguimiento-de-egresados'); ?>"> Seguimiento de Egresados </a> </li>
					</ul>
				</li>
				<li>
					<a href="#">Maestros</a>
					<ul>
						<li><a href="<?php echo home_url('/modelo-educativo'); ?>">Modelo Educativo</a></li>
						<li><a href="<?php echo home_url('/tutoria-academica'); ?>">Tutoría Académica</a></li>
						<li><a href="<?php echo home_url('/reglamento'); ?>">Reglamento</a></li>
						<li><a href="<?php echo home_url('/avisos'); ?>">Avisos</a></li>
					</ul>
				</li>
				<li>
					<a href="#">CEUHZ</a>
					<ul>
						<li><a href="<?php echo home_url('/quienes-somos'); ?>">Quienes somos</a></li>
						<li><a href="<?php echo home_url('/ubicacion'); ?>">Ubicación</a></li>
						<li><a href="<?php echo home_url('/transporte-gratuito'); ?>">Transporte Gratuito</a></li>
						<li><a href="<?php echo home_url('/directorio'); ?>">Directorio</a></li>
					</ul>
				</li>
			</ul><!-- nav -->
			
			<ul id="social">
				<li>
					<a target="_blank" href="https://twitter.com/ceuhz">
						<img src="<?php bloginfo('template_url'); ?>/images/tw.png" alt="twitter" width="26" height="21">
					</a>
				</li>
				<li>
					<a target="_blank" href="https://www.facebook.com/CEUHZCampusUniversitario ">
						<img src="<?php bloginfo('template_url'); ?>/images/fb.png" alt="fb" width="21" height="21">
					</a>
				</li>
			</ul><!-- social -->
			
		</div><!-- header -->
		</div><!-- header_100 -->
		
		<div id="wrap_slider">
			<div id="slider"
				class="cycle-slideshow"
				data-cycle-speed="800"
				data-cycle-fx="scrollHorz"
				data-cycle-next=".next"
				data-cycle-prev=".prev"
			>
				
				<img src="<?php bloginfo('template_url'); ?>/images/header_3.jpg" >
				<!-- <img src="<?php bloginfo('template_url'); ?>/images/header_1.jpg" > -->
				<img src="<?php bloginfo('template_url'); ?>/images/header_2.jpg" >
				<img src="<?php bloginfo('template_url'); ?>/images/header_4.jpg" >
				<img src="<?php bloginfo('template_url'); ?>/images/header_5.jpg" >
			
			</div><!-- slider -->
			
			<div id="nav_slider">
				<a href="#" class="prev">
					<img src="<?php bloginfo('template_url'); ?>/images/prev.png" alt="prev">
				</a>
				<a href="#" class="next">
					<img src="<?php bloginfo('template_url'); ?>/images/next.png" alt="next">
				</a>
			</div><!-- nav_slider -->
		
		
		</div><!-- wrap_slider -->
		
		<div id="main_100">
		<div id="main">
