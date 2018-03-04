<!DOCTYPE html>
<html  lang="es-PE">
<head id="Head">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Recuerdos 473</title>
<meta id="MetaDescription" name="DESCRIPTION" content="" />
<!-- FAVICONS
===============================================-->
<link rel="shortcut icon" href="{{ url('img/favicon.png') }}"/>
<link rel="apple-touch-icon" href="{{ url('img/favicon.png') }}"/>

<meta property="og:url" content="" />
<meta property="og:type" content="article" />
<meta property="og:title" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="" />
<link rel='SHORTCUT ICON' href='' type='image/x-icon' />
<meta name="viewport" content="width=device-width,initial-scale=1" />

<!-- STYLESHEETS
===============================================-->
<link href="{{ url('css/foundation.min.css') }}" type="text/css" rel="stylesheet"/>
<link href="{{ url('css/animate.css') }}" type="text/css" rel="stylesheet"/>
<link href="{{ url('css/owl.carousel.css') }}" type="text/css" rel="stylesheet"/>
<link href="{{ url('css/owl.theme.css') }}" type="text/css" rel="stylesheet"/>
<link href="{{ url('css/swiper.min.css') }}" type="text/css" rel="stylesheet"/>
<link href="{{ url('css/font-awesome.min.css') }}" type="text/css" rel="stylesheet"/>
<link href="{{ url('css/easyzoom.css') }}" type="text/css" rel="stylesheet"/>
<link media="all" href="{{ url('css/estilos.css') }}" type="text/css" rel="stylesheet"/>

<?php
if(isset($web_css)){
	foreach($web_css as $css)
{?>
<link rel="<?php echo isset($css['rel']) ? $css['rel'] : 'stylesheet'?>" type="text/css" href="<?php echo $css['href']?>"  title="<?php echo isset($css['title']) ? $css['title']:''?>"  media="<?php echo isset($css['media']) ? $css['media'] : 'screen'?>" />
<?php echo "\n"; }} ?>
<!-- SCRIPTS
===============================================-->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.js"></script>
<script>window.jQuery || document.write('<script src="web/frontend/js/jquery-1.11.2.js"><\/script>')</script>
<!-- IE FILES
===============================================-->
<!--[if lt IE 9]>
  <script src="ie/html5shiv.js"></script>
  <script src="ie/respond.min.js"></script>
<![endif]-->
</head>

<body id="Body">

  <div id="wrapper">
  	<div class="sidebar">
    	<ul class="list-unstyled main-menu">
      	<li class="text-right"><a href="#" id="nav-close"><i class="fa fa-times" aria-hidden="true"></i></a></li>
      	<li><a href="#proyectos">EL PROYECTO</a></li>
      	<li><a href="#ficha">FICHA TÉCNICA</a></li>
      	<li><a href="#ubicacion">UBICACIÓN</a></li>
      	<li><a href="#planos">PLANOS</a></li>
    	</ul>
  	</div>
  	<div class="navbar sn_pad">
    	<div class="navbar-header">
      	<a id="nav-expander" class="nav-expander fixed"><i class="fa fa-bars fa-lg white"></i></a>
    	</div>
  	</div>
  	<header>
  		<div class="row">
  			<div class="medium-2 columns">
  				<h1> <a href="#slide"><img class="img_mobil" src="{{ 'img/central_inmobiliaria.png' }}" alt="Central Inmobiliaria" class="animated flipInX"></a></h1>
  			</div>
  			<div class="medium-10 columns text-right">
  				<nav class="menu_principal">
  					<ul>
  						<li><a href="#proyectos">EL PROYECTO</a><span style="color: #fff">/</span></li>
  						<li><a href="#ficha">FICHA TÉCNICA</a><span style="color: #fff">/</span></li>
  						<li><a href="#ubicacion">UBICACIÓN</a><span style="color: #fff">/</span></li>
  						<li><a href="#planos">PLANOS</a></li>
  					</ul>
  				</nav>
  				<!--<span class="telef animated fadeInDown"><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:(51)959257456">959257456</a> / <a href="tel:(51)948529103">948529103</a></span>
  				<span href="mailto:ventas@centralinmobiliaria.pe" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:ventas@centralinmobiliaria.pe" style="color:#ffff;">ventas@centralinmobiliaria.pe</a></span>-->
  			</div>
  		</div>
  	</header>
  	<div id="centerlizer">
      @yield('content')
    </div>
    <footer>
    	<div class="row">
    		<div class="medium-6 columns text-center telefonos">
    			<a href="tel:959257456"><i class="fa fa-phone" aria-hidden="true"></i> 959 257 456</a> / <a href="tel:948529103">948 529 103</a>
    		</div>
    		<div class="medium-4 columns text-center hide">
    			<div style="font-size:12px;">Todos los derechos reservados <a data-open="acceso_admin">@</a>2017 por <a href="https://webtilia.com" target="_blank">WEBTILIA</a></div>
    		</div>
    		<div class="medium-6 columns text-center"><a href="mailto:ventas@centralinmobiliaria.pe">ventas@centralinmobiliaria.pe</a></div>
    	</div>
    </footer>
</div>

@yield('script')

<?php if(isset($web_js)){foreach($web_js as $js){?><script type="text/javascript"<?php if(isset($js['src'])) echo ' src="'.$js['src'].'"' ?>><?php if(isset($js['text'])) echo $js['text'] ?></script> <?php echo "\n"; }} ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
<script src="{{ url('js/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/swiper.jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/vendor/what-input.js') }}" type="text/javascript"></script>
<script src="{{ url('js/vendor/foundation.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/wow.js') }}" type="text/javascript"></script>
<script src="{{ url('js/global.js') }}" type="text/javascript"></script>
<script src="{{ url('js/easyzoom.js') }}" type="text/javascript"></script>
<script src="{{ url('js/jquery.validate.js') }}" type="text/javascript"></script>

</body>
</html>
