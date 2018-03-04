@extends('layouts.layout')
@section('content')

    <div class="container-slide" id="slide">
    	<div class="swiper-container">
    	    <div class="swiper-wrapper">
    	        <div class="swiper-slide" style="background-image:url({{ 'img/slide01.jpg' }})">
    				<div class="content_frase hide">
    					<!-- fadeInDownBig -->
    					<h2 data-animation="animated"><div class="top-txt">PROYECTO LUJO</div><div class="down-txt">GALEON 370</div>EN CHACARILLA</h2>
    				</div>
    			</div>
    	    </div>
    	    <div class="down hide"><a href="javascript:;"><i class="fa fa-angle-down" aria-hidden="true"></i></a></div>
    		<div class="swiper-button-next"></div>
    		<div class="swiper-button-prev"></div>
    	</div>
    	<div class="position_dat">
    		<span><i class="fa fa-phone" aria-hidden="true"></i> 959 257 456 / 948 529 103</span><br>
    		Ventas@centralinmobiliaria.pe
    	</div>

    	<div class="position_img">
    		<img src="{{ 'img/a1.png' }}" alt="Proyecto orden y libertad 133 San Isidro" class="p1 animated flipInX">
    		<img src="{{ 'img/a2.png' }}" alt="Proyecto orden y libertad 133 San Isidro" class="p2 animated flipInX">
    	</div>
    	<div class="mouseover">
      	<div class="mouse"><div class="wheel"></div></div>
      	<div><span class="unu"></span> <span class="doi"></span></div>
    	</div>
    </div>
    <section class="content">
	     <div class="container proyecto_bx" id="proyectos">
    		<div class="text-center tit">
    		    <h2>EL PROYECTO</h2>
    		</div>
    		<div class="medium-9 medium-centered large-12 columns">
    			<div class="medium-12 large-6 columns imagen_ wow animated fadeInUp"><img src="{{ 'img/img_proyecto.jpg' }}" alt=""></div>
    			<div class="medium-12 large-6 columns">
    				<div class="box_">
    					<h2>RECUERDOS 473,</h2>
    				propone una unión entre la elegancia
    				y el minimalismo, logrando un diseño
    				innovador que se distinga en la zona.
    				</div>
    			</div>
    		</div>
    		<hr>
    		<div class="medium-9 medium-centered  large-12 columns">
    			<div class="medium-12 large-7 large-push-5 columns imagen_ wow animated fadeInUp"><img src="{{ 'img/img_proyecto2.jpg' }}" alt=""></div>
    			<div class="medium-12 large-5 large-pull-7 columns">
    				<div class="box_2">
    					Tomando la ventaja de estar en una ubicación privilegiada como una esquina,  hemos obtenido una gran distribución e iluminación para todos los departamentos.
    				</div>
    			</div>
    		</div>
    		<div class="medium-9 medium-centered  large-12 columns">
    			<div class="large-6 columns imagen_ wow animated fadeInUp"><img src="{{ 'img/img_proyecto3.jpg' }}" alt=""></div>
    			<div class="large-6 columns">
    				<div class="box_3">
    					A pocos pasos del pentagonito en donde podrás disfrutar de correr por la mañana o dar un paseo con la familia un domingo.
    				</div>
    			</div>
    		</div>
    		<div class="medium-9 medium-centered  large-12 columns">
    			<div class="medium-12 large-7 large-push-5 columns imagen_ wow animated fadeInUp"><img src="{{ 'img/img_proyecto4.jpg' }}" alt=""></div>
    			<div class="medium-12 large-5 large-pull-7 columns">
    				<div class="box_4">
    					Cerca de todo, pero a la vez, una calle
    					tranquila, alejada de ruidos. De donde podrás camninar a los restaurantes, cafés,
    					supermercados, centros comerciales
    					y cines de tu preferencia.
    				</div>
    			</div>
    		</div>
	     </div>
    	<div class="borde_d"></div>
    	<hr>
	    <div class="row" id="ficha">
    		<div class="text-center tit">
    		    <h2>FICHA TÉCNICA</h2>
    		</div>
		      <hr>
    		<div class="iconos_ft text-center">
    			<div class="ft">
    				<div class="img_ft wow animated zoomIn">
    					<img src="{{ 'img/ubicacion.jpg' }}">
    				</div>
    				<h3>UBICACIÓN</h3>
    				Recuerdos 473 Chacarilla <br>San Borja
    			</div>
    			<div class="ft">
    				<div class="img_ft wow animated zoomIn">
    					<img src="{{ 'img/pisos.jpg' }}">
    				</div>
    				<h3>PISOS / UNIDADES</h3>
    				4 pisos <br> 19 departamentos
    			</div>
    			<div class="ft">
    				<div class="img_ft wow animated zoomIn">
    					<img src="{{ 'img/areas.jpg' }}">
    				</div>
    				<h3>ÁREAS / DORMITORIOS</h3>
    				Flats - Duplex <br> 120 - 140, mts <br> 3 y 4 dormitorios
    			</div>
    			<div class="ft">
    				<div class="img_ft wow animated zoomIn">
    					<img src="{{ 'img/entrega.jpg' }}">
    				</div>
    				<h3>ENTREGA</h3>
    				Mayo 2019
    			</div>
    			<div class="ft">
    				<div class="img_ft wow animated zoomIn">
    					<img src="{{ 'img/banco.jpg' }}">
    				</div>
    				<h3>BANCO</h3>
    				Financia Scotiabank
    			</div>
    		</div>
	     </div>
	     <div class="borde_d"></div>
    	<hr>
    	<div class="row" id="ubicacion">
    		<div class="text-center tit">
    		<h2>UBICACIÓN</h2>
    		</div>
    	</div>
    	<div class="row top-bx">
    		<div class="large-12 columns">
    			<div class="mini_slide owl-carousel owl-theme">
    				<div class="item">
    					<img src="{{ 'img/croquis_ubicacion.jpg' }}" alt="">
    				</div>
    				<div class="item">
    					<img src="{{ 'img/croquis_ubicacion.jpg' }}" alt="">
    				</div>
    			</div>
    		</div>
    		<hr>
    		<hr>
    	</div>
	     <div class="full_plan" id="planos">
    		<div class="text-center tit">
    		<h2>PLANOS</h2>
    		</div>
    		<div class="full_borde">
    			<h3 class="tit_pers">“ PERSONALIZA TUS ESPACIOS ”</h3>
    		</div>
    		<hr>
    		<hr><hr>
		    <div class="container">

  		    <div class="acordeon" id="acordeon">

  			     <ul id="list-dep" class="accordion" data-accordion data-allow-all-closed="true">
      				<!-- is-active-->
        				<li class="accordion-item" data-accordion-item>
        					<a href="#" class="accordion-title">
        						<div class="imagen_thumb"><img src="{{ 'img/flat.jpg' }}" alt=""></div>
        						<div class="columnas"><h3>FLAT SS01</h3></div>
        						<!--<div class="columnas hab">2 hab.</div>
        						<div class="columnas ban">2 baños</div>-->
        						<div class="columnas prec">$ 335,305.50 USD</div>
        						<div class="columnas dis">Disponible</div>
        						<span>MÁS INFORMACIÓN</span>
        					</a>
        					<div class="accordion-content" data-tab-content>
        						<div class="row">
        							<div class="line-bottom" style="overflow: hidden;">
        								<div class="medium-4 columns"><h4>FLAT SS01</h4></div>
        								<div class="medium-4 columns text-center"><div class="dis">Disponbile</div></div>
        								<div class="medium-4 columns text-right"><h4>$ 335,305.50 USD</h4></div>
        							</div>
        							<div class="main-info small-12 large-7 columns" data-type="Departamentos Flat" data-num="Dpto SS01" data-enabled="true">
        								<div class="content-galery">
        									<div class="box-galery">
        										<div class="item">
        											<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/flat.jpg' }}" alt="" ></a>
        										</div>
        										</div>
        										<div class="item">
        											<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/flat.jpg' }}" alt="" ></a>
        										</div>
        										</div>
        									</div>
        								</div>
        							</div>
        							<div class="small-12 large-5 columns info_depa">
        								<div class="fila_e">
        									<div class="are">Área techada:<b>124.08</b></div>
                          <div class="are">Área libre:<b>43.41</b></div>
        									<div class="are">Área ocupada:<b>167.49</b></div>
        								</div>
                        <!--
        								<div class="box-listC ico2">
        									<b>Área de servicio</b>
        									Lavandería y closet de lavado.
        								</div>
        								<div class="box-listC ico3">
        									<b>Área íntima</b>
        									Sala de estar, Dormitorio principal con walking closet y baño incorporado, Dormitorio 02 con baño.
        								</div>-->
        							</div>
        							<div class="small-12 columns adicionales"></div>
        						</div>
        					</div>
        				</li>

        				<li class="accordion-item" data-accordion-item>
        					<a href="#" class="accordion-title">
        						<div class="imagen_thumb"><img src="{{ 'img/flat.jpg' }}" alt=""></div>
        						<div class="columnas"><h3>FLAT SS02</h3></div>
        						<!--<div class="columnas hab">2 hab.</div>
        						<div class="columnas ban">2 baños</div>-->
        						<div class="columnas prec">$ 378,407.50 USD</div>
        						<div class="columnas dis">Disponible</div>
        						<span>MÁS INFORMACIÓN</span>
        					</a>
        					<div class="accordion-content" data-tab-content>
        						<div class="row">
        							<div class="line-bottom" style="overflow: hidden;">
        								<div class="medium-4 columns"><h4>FLAT SS02</h4></div>
        								<div class="medium-4 columns text-center"><div class="dis">Disponbile</div></div>
        								<div class="medium-4 columns text-right"><h4>$ 378,407.50 USD</h4></div>
        							</div>
        							<div class="main-info small-12 large-7 columns" data-type="Departamentos Flat" data-num="Dpto SS02" data-enabled="true">
        								<div class="content-galery">
        									<div class="box-galery">
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/big/flat.jpg' }}" alt="" ></a>
        										</div>
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/big/flat.jpg' }}" alt="" ></a>
        										</div>
        									</div>
        								</div>
        							</div>
        							<div class="small-12 large-5 columns info_depa">
        								<div class="fila_e">
        									<div class="are">Área techada:<b> 139.11</b></div>
        									<div class="are">Área libre:<b> 50.83</b></div>
        									<div class="are">Área ocupada:<b>189.94</b></div>
        								</div>
        								<!--<div class="box-listC ico1">
        									<b>Área social</b>
        									Cocina, sala, comedor con terraza primer piso, balcón en segundo piso.
        								</div>
        								<div class="box-listC ico2">
        									<b>Área de servicio</b>
        									Lavandería y closet de lavado.
        								</div>
        								<div class="box-listC ico3">
        									<b>Área íntima</b>
        									Sala de estar, Dormitorio principal con walking closet y baño incorporado, Dormitorio 02 con baño.
        								</div>-->
        							</div>
        							<div class="small-12 columns adicionales"></div>
        						</div>
        					</div>
        				</li>

                <li class="accordion-item" data-accordion-item>
        					<a href="#" class="accordion-title">
        						<div class="imagen_thumb"><img src="{{ 'img/flat.jpg' }}" alt=""></div>
        						<div class="columnas"><h3>FLAT SS03</h3></div>
        						<!--<div class="columnas hab">2 hab.</div>
        						<div class="columnas ban">2 baños</div>-->
        						<div class="columnas prec">$ 327,347.50 USD</div>
        						<div class="columnas dis">Disponible</div>
        						<span>MÁS INFORMACIÓN</span>
        					</a>
        					<div class="accordion-content" data-tab-content>
        						<div class="row">
        							<div class="line-bottom" style="overflow: hidden;">
        								<div class="medium-4 columns"><h4>FLAT SS03</h4></div>
        								<div class="medium-4 columns text-center"><div class="dis">Vendido</div></div>
        								<div class="medium-4 columns text-right"><h4>$ 327,347.50 USD</h4></div>
        							</div>
        							<div class="main-info small-12 large-7 columns" data-type="Departamentos Flat" data-num="Dpto SS03" data-enabled="true">
        								<div class="content-galery">
        									<div class="box-galery">
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/big/flat.jpg' }}" alt="" ></a>
        										</div>
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/big/flat.jpg' }}" alt="" ></a>
        										</div>
        									</div>
        								</div>
        							</div>
        							<div class="small-12 large-5 columns info_depa">
        								<div class="fila_e">
        									<div class="are">Área techada:<b> 126.19m2</b></div>
        									<div class="are">Área libre:<b> 32.27m2</b></div>
        									<div class="are">Área ocupada:<b>158.46m2</b></div>
        								</div>
        								<!--<div class="box-listC ico1">
        									<b>Área social</b>
        									Cocina, sala, comedor con terraza primer piso, balcón en segundo piso.
        								</div>
        								<div class="box-listC ico2">
        									<b>Área de servicio</b>
        									Lavandería y closet de lavado.
        								</div>
        								<div class="box-listC ico3">
        									<b>Área íntima</b>
        									Sala de estar, Dormitorio principal con walking closet y baño incorporado, Dormitorio 02 con baño.
        								</div>-->
        							</div>
        							<div class="small-12 columns adicionales"></div>
        						</div>
        					</div>
        				</li>

                <li class="accordion-item" data-accordion-item>
        					<a href="#" class="accordion-title">
        						<div class="imagen_thumb"><img src="{{ 'img/small/FLAT-101-201.jpg' }}" alt=""></div>
        						<div class="columnas"><h3>FLAT 101</h3></div>
        						<!--<div class="columnas hab">2 hab.</div>
        						<div class="columnas ban">2 baños</div>-->
        						<div class="columnas prec">$ 284,648.00 USD</div>
        						<div class="columnas dis">Disponible</div>
        						<span>MÁS INFORMACIÓN</span>
        					</a>
        					<div class="accordion-content" data-tab-content>
        						<div class="row">
        							<div class="line-bottom" style="overflow: hidden;">
        								<div class="medium-4 columns"><h4>FLAT 101</h4></div>
        								<div class="medium-4 columns text-center"><div class="dis">Vendido</div></div>
        								<div class="medium-4 columns text-right"><h4>$ 284,648.00 USD</h4></div>
        							</div>
        							<div class="main-info small-12 large-7 columns" data-type="Departamentos Flat" data-num="Dpto 101" data-enabled="true">
        								<div class="content-galery">
        									<div class="box-galery">
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/FLAT-101-201.jpg' }}" style="display:block;"><img src="{{ 'img/small/FLAT-101-201.jpg' }}" alt="" ></a>
        										</div>
        									</div>
        								</div>
        							</div>
        							<div class="small-12 large-5 columns info_depa">
        								<div class="fila_e">
        									<div class="are">Área techada:<b>123.76 m2</b></div>
        									<div class="are">Área libre:<b>0 m2</b></div>
        									<div class="are">Área ocupada:<b>123.76 m2</b></div>
        								</div>
        								<!--<div class="box-listC ico1">
        									<b>Área social</b>
        									Cocina, sala, comedor con terraza primer piso, balcón en segundo piso.
        								</div>
        								<div class="box-listC ico2">
        									<b>Área de servicio</b>
        									Lavandería y closet de lavado.
        								</div>
        								<div class="box-listC ico3">
        									<b>Área íntima</b>
        									Sala de estar, Dormitorio principal con walking closet y baño incorporado, Dormitorio 02 con baño.
        								</div>-->
        							</div>
        							<div class="small-12 columns adicionales"></div>
        						</div>
        					</div>
        				</li>

                <li class="accordion-item" data-accordion-item>
        					<a href="#" class="accordion-title">
        						<div class="imagen_thumb"><img src="{{ 'small/FLAT-102-202.jpg' }}" alt=""></div>
        						<div class="columnas"><h3>FLAT 102</h3></div>
        						<!--<div class="columnas hab">2 hab.</div>
        						<div class="columnas ban">2 baños</div>-->
        						<div class="columnas prec">$ 321,149.00 USD</div>
        						<div class="columnas dis">Disponible</div>
        						<span>MÁS INFORMACIÓN</span>
        					</a>
        					<div class="accordion-content" data-tab-content>
        						<div class="row">
        							<div class="line-bottom" style="overflow: hidden;">
        								<div class="medium-4 columns"><h4>FLAT 102</h4></div>
        								<div class="medium-4 columns text-center"><div class="dis">Vendido</div></div>
        								<div class="medium-4 columns text-right"><h4>$ 321,149.00 USD</h4></div>
        							</div>
        							<div class="main-info small-12 large-7 columns" data-type="Departamentos Flat" data-num="Dpto 102" data-enabled="true">
        								<div class="content-galery">
        									<div class="box-galery">
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/FLAT-102-202.jpg' }}" style="display:block;"><img src="{{ 'img/small/FLAT-102-202.jpg' }}" alt="" ></a>
        										</div>
        									</div>
        								</div>
        							</div>
        							<div class="small-12 large-5 columns info_depa">
        								<div class="fila_e">
        									<div class="are">Área techada:<b>139.63m2</b></div>
        									<div class="are">Área libre:<b>0 m2</b></div>
        									<div class="are">Área ocupada:<b>139.63m2</b></div>
        								</div>
                        <div class="box-listC ico3">
        									<b>Cochera</b>
        									11
        								</div>
                        <div class="box-listC ico3">
        									<b>Deposito</b>
                          3
        								</div>
        								<!--<div class="box-listC ico1">
        									<b>Área social</b>
        									Cocina, sala, comedor con terraza primer piso, balcón en segundo piso.
        								</div>
        								<div class="box-listC ico2">
        									<b>Área de servicio</b>
        									Lavandería y closet de lavado.
        								</div>
        								<div class="box-listC ico3">
        									<b>Área íntima</b>
        									Sala de estar, Dormitorio principal con walking closet y baño incorporado, Dormitorio 02 con baño.
        								</div>-->
        							</div>
        							<div class="small-12 columns adicionales"></div>
        						</div>
        					</div>
        				</li>

                <li class="accordion-item" data-accordion-item>
        					<a href="#" class="accordion-title">
        						<div class="imagen_thumb"><img src="{{ 'img/small/FLAT-103-203.jpg' }}" alt=""></div>
        						<div class="columnas"><h3>FLAT 103</h3></div>
        						<!--<div class="columnas hab">2 hab.</div>
        						<div class="columnas ban">2 baños</div>-->
        						<div class="columnas prec">$ 282,877.00 USD</div>
        						<div class="columnas no_dis">No Disponible</div>
        						<span>MÁS INFORMACIÓN</span>
        					</a>
        					<div class="accordion-content" data-tab-content>
        						<div class="row">
        							<div class="line-bottom" style="overflow: hidden;">
        								<div class="medium-4 columns"><h4>FLAT 103</h4></div>
        								<div class="medium-4 columns text-center"><div class="vendido">Vendido</div></div>
        								<div class="medium-4 columns text-right"><h4>$ 282,877.00 USD</h4></div>
        							</div>
        							<div class="main-info small-12 large-7 columns" data-type="Departamentos Flat" data-num="Dpto 103" data-enabled="false">
        								<div class="content-galery">
        									<div class="box-galery">
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/FLAT-103-203.jpg' }}" style="display:block;"><img src="{{ 'img/small/FLAT-103-203.jpg' }}" alt="" ></a>
        										</div>
        									</div>
        								</div>
        							</div>
        							<div class="small-12 large-5 columns info_depa">
        								<div class="fila_e">
        									<div class="are">Área techada:<b>122.99m2</b></div>
        									<div class="are">Área libre:<b>0 m2</b></div>
        									<div class="are">Área ocupada:<b>122.99m2</b></div>
        								</div>
                        <div class="box-listC ico3">
        									<b>Cochera</b>
        									10
        								</div>
                        <div class="box-listC ico3">
        									<b>Deposito</b>
                          ANEXO ESTAC. 10
        								</div>
        								<!--<div class="box-listC ico1">
        									<b>Área social</b>
        									Cocina, sala, comedor con terraza primer piso, balcón en segundo piso.
        								</div>
        								<div class="box-listC ico2">
        									<b>Área de servicio</b>
        									Lavandería y closet de lavado.
        								</div>
        								<div class="box-listC ico3">
        									<b>Área íntima</b>
        									Sala de estar, Dormitorio principal con walking closet y baño incorporado, Dormitorio 02 con baño.
        								</div>-->
        							</div>
        							<div class="small-12 columns adicionales"></div>
        						</div>
        					</div>
        				</li>

                <li class="accordion-item" data-accordion-item>
        					<a href="#" class="accordion-title">
        						<div class="imagen_thumb"><img src="{{ 'img/small/FLAT-104-204.jpg' }}" alt=""></div>
        						<div class="columnas"><h3>FLAT 104</h3></div>
        						<!--<div class="columnas hab">2 hab.</div>
        						<div class="columnas ban">2 baños</div>-->
        						<div class="columnas prec">$ 289,639.00 USD</div>
        						<div class="columnas dis">Disponible</div>
        						<span>MÁS INFORMACIÓN</span>
        					</a>
        					<div class="accordion-content" data-tab-content>
        						<div class="row">
        							<div class="line-bottom" style="overflow: hidden;">
        								<div class="medium-4 columns"><h4>FLAT 104</h4></div>
        								<div class="medium-4 columns text-center"><div class="dis">Disponible</div></div>
        								<div class="medium-4 columns text-right"><h4>$ 289,639.00 USD</h4></div>
        							</div>
        							<div class="main-info small-12 large-7 columns" data-type="Departamentos Flat" data-num="Dpto 104" data-enabled="true">
        								<div class="content-galery">
        									<div class="box-galery">
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/FLAT-104-204.jpg' }}" style="display:block;"><img src="{{ 'img/small/FLAT-104-204.jpg' }}" alt="" ></a>
        										</div>
        									</div>
        								</div>
        							</div>
        							<div class="small-12 large-5 columns info_depa">
        								<div class="fila_e">
        									<div class="are">Área techada:<b>125.93m2</b></div>
        									<div class="are">Área libre:<b>0 m2</b></div>
        									<div class="are">Área ocupada:<b>125.93m2</b></div>
        								</div>
        								<!--<div class="box-listC ico1">
        									<b>Área social</b>
        									Cocina, sala, comedor con terraza primer piso, balcón en segundo piso.
        								</div>
        								<div class="box-listC ico2">
        									<b>Área de servicio</b>
        									Lavandería y closet de lavado.
        								</div>-->
        							</div>
        							<div class="small-12 columns adicionales"></div>
        						</div>
        					</div>
        				</li>

                <li class="accordion-item" data-accordion-item>
        					<a href="#" class="accordion-title">
        						<div class="imagen_thumb"><img src="{{ 'img/flat.jpg' }}" alt=""></div>
        						<div class="columnas"><h3>FLAT 201</h3></div>
        						<!--<div class="columnas hab">2 hab.</div>
        						<div class="columnas ban">2 baños</div>-->
        						<div class="columnas prec">$ 285,660.00 USD</div>
        						<div class="columnas dis">Disponible</div>
        						<span>MÁS INFORMACIÓN</span>
        					</a>
        					<div class="accordion-content" data-tab-content>
        						<div class="row">
        							<div class="line-bottom" style="overflow: hidden;">
        								<div class="medium-4 columns"><h4>FLAT 201</h4></div>
        								<div class="medium-4 columns text-center"><div class="dis">Disponible</div></div>
        								<div class="medium-4 columns text-right"><h4>$ 285,660.00 USD</h4></div>
        							</div>
        							<div class="main-info small-12 large-7 columns" data-type="Departamentos Flat" data-num="Dpto 201" data-enabled="true">
        								<div class="content-galery">
        									<div class="box-galery">
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/big/flat.jpg' }}" alt="" ></a>
        										</div>
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/big/flat.jpg' }}" alt="" ></a>
        										</div>
        									</div>
        								</div>
        							</div>
        							<div class="small-12 large-5 columns info_depa">
        								<div class="fila_e">
        									<div class="are">Área techada:<b>124.2 m2</b></div>
        									<div class="are">Área libre:<b>0 m2</b></div>
        									<div class="are">Área ocupada:<b>124.2 m2</b></div>
        								</div>
                        <div class="box-listC ico3">
        									<b>Cochera</b>
        									8
        								</div>
                        <div class="box-listC ico3">
        									<b>Deposito</b>
                          4
        								</div>
        								<!--<div class="box-listC ico1">
        									<b>Área social</b>
        									Cocina, sala, comedor con terraza primer piso, balcón en segundo piso.
        								</div>
        								<div class="box-listC ico2">
        									<b>Área de servicio</b>
        									Lavandería y closet de lavado.
        								</div>
        								<div class="box-listC ico3">
        									<b>Área íntima</b>
        									Sala de estar, Dormitorio principal con walking closet y baño incorporado, Dormitorio 02 con baño.
        								</div>-->
        							</div>
        							<div class="small-12 columns adicionales"></div>
        						</div>
        					</div>
        				</li>

                <li class="accordion-item" data-accordion-item>
        					<a href="#" class="accordion-title">
        						<div class="imagen_thumb"><img src="{{ 'img/flat.jpg' }}" alt=""></div>
        						<div class="columnas"><h3>FLAT 202</h3></div>
        						<!--<div class="columnas hab">2 hab.</div>
        						<div class="columnas ban">2 baños</div>-->
        						<div class="columnas prec">$ 328,739.00 USD</div>
        						<div class="columnas no_dis">No Disponible</div>
        						<span>MÁS INFORMACIÓN</span>
        					</a>
        					<div class="accordion-content" data-tab-content>
        						<div class="row">
        							<div class="line-bottom" style="overflow: hidden;">
        								<div class="medium-4 columns"><h4>FLAT 202</h4></div>
        								<div class="medium-4 columns text-center"><div class="vendido">Disponible</div></div>
        								<div class="medium-4 columns text-right"><h4>$ 328,739.00 USD</h4></div>
        							</div>
        							<div class="main-info small-12 large-7 columns" data-type="Departamentos Flat" data-num="Dpto 202" data-enabled="false">
        								<div class="content-galery">
        									<div class="box-galery">
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/big/flat.jpg' }}" alt="" ></a>
        										</div>
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/big/flat.jpg' }}" alt="" ></a>
        										</div>
        									</div>
        								</div>
        							</div>
        							<div class="small-12 large-5 columns info_depa">
        								<div class="fila_e">
        									<div class="are">Área techada:<b>142.93 m2</b></div>
        									<div class="are">Área libre:<b>0 m2</b></div>
        									<div class="are">Área ocupada:<b>142.93 m2</b></div>
        								</div>
                        <div class="box-listC ico3">
        									<b>Cochera</b>
        									12
        								</div>
                        <div class="box-listC ico3">
        									<b>Deposito</b>
                          ANEXO ESTAC. 12
        								</div>
        								<!--<div class="box-listC ico1">
        									<b>Área social</b>
        									Cocina, sala, comedor con terraza primer piso, balcón en segundo piso.
        								</div>
        								<div class="box-listC ico2">
        									<b>Área de servicio</b>
        									Lavandería y closet de lavado.
        								</div>
        								<div class="box-listC ico3">
        									<b>Área íntima</b>
        									Sala de estar, Dormitorio principal con walking closet y baño incorporado, Dormitorio 02 con baño.
        								</div>-->
        							</div>
        							<div class="small-12 columns adicionales"></div>
        						</div>
        					</div>
        				</li>

                <li class="accordion-item" data-accordion-item>
        					<a href="#" class="accordion-title">
        						<div class="imagen_thumb"><img src="{{ 'img/flat.jpg' }}" alt=""></div>
        						<div class="columnas"><h3>FLAT 203</h3></div>
        						<!--<div class="columnas hab">2 hab.</div>
        						<div class="columnas ban">2 baños</div>-->
        						<div class="columnas prec">$ 278,553.00 USD</div>
        						<div class="columnas no_dis">No Disponible</div>
        						<span>MÁS INFORMACIÓN</span>
        					</a>
        					<div class="accordion-content" data-tab-content>
        						<div class="row">
        							<div class="line-bottom" style="overflow: hidden;">
        								<div class="medium-4 columns"><h4>FLAT 203</h4></div>
        								<div class="medium-4 columns text-center"><div class="vendido">No Disponible</div></div>
        								<div class="medium-4 columns text-right"><h4>$ 278,553.00 USD</h4></div>
        							</div>
        							<div class="main-info small-12 large-7 columns" data-type="Departamentos Flat" data-num="Dpto 203" data-enabled="false">
        								<div class="content-galery">
        									<div class="box-galery">
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/big/flat.jpg' }}" alt="" ></a>
        										</div>
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/big/flat.jpg' }}" alt="" ></a>
        										</div>
        									</div>
        								</div>
        							</div>
        							<div class="small-12 large-5 columns info_depa">
        								<div class="fila_e">
        									<div class="are">Área techada:<b>121.11 m2</b></div>
        									<div class="are">Área libre:<b>0 m2</b></div>
        									<div class="are">Área ocupada:<b>121.11 m2</b></div>
        								</div>
                        <div class="box-listC ico3">
        									<b>Cochera</b>
        									9
        								</div>
                        <div class="box-listC ico3">
        									<b>Deposito</b>
                          ANEXO ESTAC. 9
        								</div>
        								<!--<div class="box-listC ico1">
        									<b>Área social</b>
        									Cocina, sala, comedor con terraza primer piso, balcón en segundo piso.
        								</div>
        								<div class="box-listC ico2">
        									<b>Área de servicio</b>
        									Lavandería y closet de lavado.
        								</div>
        								<div class="box-listC ico3">
        									<b>Área íntima</b>
        									Sala de estar, Dormitorio principal con walking closet y baño incorporado, Dormitorio 02 con baño.
        								</div>-->
        							</div>
        							<div class="small-12 columns adicionales"></div>
        						</div>
        					</div>
        				</li>

                <li class="accordion-item" data-accordion-item>
        					<a href="#" class="accordion-title">
        						<div class="imagen_thumb"><img src="{{ 'img/flat.jpg' }}" alt=""></div>
        						<div class="columnas"><h3>FLAT 204</h3></div>
        						<!--<div class="columnas hab">2 hab.</div>
        						<div class="columnas ban">2 baños</div>-->
        						<div class="columnas prec">$ 290,007.00 USD</div>
        						<div class="columnas dis">Disponible</div>
        						<span>MÁS INFORMACIÓN</span>
        					</a>
        					<div class="accordion-content" data-tab-content>
        						<div class="row">
        							<div class="line-bottom" style="overflow: hidden;">
        								<div class="medium-4 columns"><h4>FLAT 204</h4></div>
        								<div class="medium-4 columns text-center"><div class="dis">Disponible</div></div>
        								<div class="medium-4 columns text-right"><h4>$ 290,007.00 USD</h4></div>
        							</div>
        							<div class="main-info small-12 large-7 columns" data-type="Departamentos Flat" data-num="Dpto 204" data-enabled="true">
        								<div class="content-galery">
        									<div class="box-galery">
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/big/flat.jpg' }}" alt="" ></a>
        										</div>
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/big/flat.jpg' }}" alt="" ></a>
        										</div>
        									</div>
        								</div>
        							</div>
        							<div class="small-12 large-5 columns info_depa">
        								<div class="fila_e">
        									<div class="are">Área techada:<b>126.09 m2</b></div>
        									<div class="are">Área libre:<b>0 m2</b></div>
        									<div class="are">Área ocupada:<b>126.09 m2</b></div>
        								</div>
        								<!--<div class="box-listC ico1">
        									<b>Área social</b>
        									Cocina, sala, comedor con terraza primer piso, balcón en segundo piso.
        								</div>
        								<div class="box-listC ico2">
        									<b>Área de servicio</b>
        									Lavandería y closet de lavado.
        								</div>
        								<div class="box-listC ico3">
        									<b>Área íntima</b>
        									Sala de estar, Dormitorio principal con walking closet y baño incorporado, Dormitorio 02 con baño.
        								</div>-->
        							</div>
        							<div class="small-12 columns adicionales"></div>
        						</div>
        					</div>
        				</li>

                <li class="accordion-item" data-accordion-item>
        					<a href="#" class="accordion-title">
        						<div class="imagen_thumb"><img src="{{ 'img/flat.jpg' }}" alt=""></div>
        						<div class="columnas"><h3>Duplex 301</h3></div>
        						<!--<div class="columnas hab">2 hab.</div>
        						<div class="columnas ban">2 baños</div>-->
        						<div class="columnas prec">$ 531,346.00 USD</div>
        						<div class="columnas dis">Disponible</div>
        						<span>MÁS INFORMACIÓN</span>
        					</a>
        					<div class="accordion-content" data-tab-content>
        						<div class="row">
        							<div class="line-bottom" style="overflow: hidden;">
        								<div class="medium-4 columns"><h4>Duplex 301</h4></div>
        								<div class="medium-4 columns text-center"><div class="dis">Disponible</div></div>
        								<div class="medium-4 columns text-right"><h4>$ 531,346.00 USD</h4></div>
        							</div>
        							<div class="main-info small-12 large-7 columns" data-type="Departamentos Duplex" data-num="Dpto 301" data-enabled="true">
        								<div class="content-galery">
        									<div class="box-galery">
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/big/flat.jpg' }}" alt="" ></a>
        										</div>
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/big/flat.jpg' }}" alt="" ></a>
        										</div>
        									</div>
        								</div>
        							</div>
        							<div class="small-12 large-5 columns info_depa">
        								<div class="fila_e">
        									<div class="are">Área techada:<b>214.73 m2</b></div>
        									<div class="are">Área libre:<b>32.58 m2</b></div>
        									<div class="are">Área ocupada:<b>247.31 m2</b></div>
        								</div>
                        <div class="box-listC ico3">
        									<b>Cochera</b>
                          16-17
        								</div>
                        <div class="box-listC ico3">
        									<b>Deposito</b>
                          ANEXO ESTAC. 16
        								</div>
        								<!--<div class="box-listC ico1">
        									<b>Área social</b>
        									Cocina, sala, comedor con terraza primer piso, balcón en segundo piso.
        								</div>
        								<div class="box-listC ico2">
        									<b>Área de servicio</b>
        									Lavandería y closet de lavado.
        								</div>
        								<div class="box-listC ico3">
        									<b>Área íntima</b>
        									Sala de estar, Dormitorio principal con walking closet y baño incorporado, Dormitorio 02 con baño.
        								</div>-->
        							</div>
        							<div class="small-12 columns adicionales"></div>
        						</div>
        					</div>
        				</li>

                <li class="accordion-item" data-accordion-item>
        					<a href="#" class="accordion-title">
        						<div class="imagen_thumb"><img src="{{ 'img/flat.jpg' }}" alt=""></div>
        						<div class="columnas"><h3>Duplex 302</h3></div>
        						<!--<div class="columnas hab">2 hab.</div>
        						<div class="columnas ban">2 baños</div>-->
        						<div class="columnas prec">$ 572,102.00 USD</div>
        						<div class="columnas no_dis">No Disponible</div>
        						<span>MÁS INFORMACIÓN</span>
        					</a>
        					<div class="accordion-content" data-tab-content>
        						<div class="row">
        							<div class="line-bottom" style="overflow: hidden;">
        								<div class="medium-4 columns"><h4>Duplex 302</h4></div>
        								<div class="medium-4 columns text-center"><div class="vendido">No Disponible</div></div>
        								<div class="medium-4 columns text-right"><h4>$ 572,102.00 USD</h4></div>
        							</div>
        							<div class="main-info small-12 large-7 columns" data-type="Departamentos Duplex" data-num="Dpto 302" data-enabled="false">
        								<div class="content-galery">
        									<div class="box-galery">
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/big/flat.jpg' }}" alt="" ></a>
        										</div>
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/flat.jpg' }}" style="display:block;"><img src="{{ 'img/big/flat.jpg' }}" alt="" ></a>
        										</div>
        									</div>
        								</div>
        							</div>
        							<div class="small-12 large-5 columns info_depa">
        								<div class="fila_e">
        									<div class="are">Área techada:<b>219.01 m2</b></div>
        									<div class="are">Área libre:<b>59.46 m2</b></div>
        									<div class="are">Área ocupada:<b>278.47 m2</b></div>
        								</div>
                        <div class="box-listC ico3">
        									<b>Cochera</b>
                          14
        								</div>
                        <div class="box-listC ico3">
        									<b>Deposito</b>
                          ANEXO ESTAC. 14
        								</div>
        								<!--<div class="box-listC ico1">
        									<b>Área social</b>
        									Cocina, sala, comedor con terraza primer piso, balcón en segundo piso.
        								</div>
        								<div class="box-listC ico2">
        									<b>Área de servicio</b>
        									Lavandería y closet de lavado.
        								</div>
        								<div class="box-listC ico3">
        									<b>Área íntima</b>
        									Sala de estar, Dormitorio principal con walking closet y baño incorporado, Dormitorio 02 con baño.
        								</div>-->
        							</div>
        							<div class="small-12 columns adicionales"></div>
        						</div>
        					</div>
        				</li>

                <li class="accordion-item" data-accordion-item>
        					<a href="#" class="accordion-title">
        						<div class="imagen_thumb"><img src="{{ 'img/medium/DUPLEX-303--1.jpg' }}" alt=""></div>
        						<div class="columnas"><h3>Duplex 303</h3></div>
        						<!--<div class="columnas hab">2 hab.</div>
        						<div class="columnas ban">2 baños</div>-->
        						<div class="columnas prec">$ 502,711.00 USD</div>
        						<div class="columnas dis">Disponible</div>
        						<span>MÁS INFORMACIÓN</span>
        					</a>
        					<div class="accordion-content" data-tab-content>
        						<div class="row">
        							<div class="line-bottom" style="overflow: hidden;">
        								<div class="medium-4 columns"><h4>Duplex 303</h4></div>
        								<div class="medium-4 columns text-center"><div class="dis">Disponible</div></div>
        								<div class="medium-4 columns text-right"><h4>$ 502,711.00 USD</h4></div>
        							</div>
        							<div class="main-info small-12 large-7 columns" data-type="Departamentos Duplex" data-num="Dpto 303" data-enabled="true">
        								<div class="content-galery">
        									<div class="box-galery">
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/DUPLEX-303--1.jpg' }}" style="display:block;"><img src="{{ 'img/medium/DUPLEX-303--1.jpg' }}" alt="" ></a>
        										</div>
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/DUPLEX-303--2.jpg' }}" style="display:block;"><img src="{{ 'img/medium/DUPLEX-303--2.jpg' }}" alt="" ></a>
        										</div>
        									</div>
        								</div>
        							</div>
        							<div class="small-12 large-5 columns info_depa">
        								<div class="fila_e">
        									<div class="are">Área techada:<b>191.26 m2</b></div>
        									<div class="are">Área libre:<b>54.62 m2</b></div>
        									<div class="are">Área ocupada:<b>245.88 m2</b></div>
        								</div>
                        <div class="box-listC ico3">
        									<b>Cochera</b>
                          15-18
        								</div>
                        <div class="box-listC ico3">
        									<b>Deposito</b>
                          ANEXO ESTAC. 15
        								</div>
        								<!--<div class="box-listC ico1">
        									<b>Área social</b>
        									Cocina, sala, comedor con terraza primer piso, balcón en segundo piso.
        								</div>
        								<div class="box-listC ico2">
        									<b>Área de servicio</b>
        									Lavandería y closet de lavado.
        								</div>
        								<div class="box-listC ico3">
        									<b>Área íntima</b>
        									Sala de estar, Dormitorio principal con walking closet y baño incorporado, Dormitorio 02 con baño.
        								</div>-->
        							</div>
        							<div class="small-12 columns adicionales"></div>
        						</div>
        					</div>
        				</li>
                <li class="accordion-item" data-accordion-item>
        					<a href="#" class="accordion-title">
        						<div class="imagen_thumb"><img src="{{ 'img/small/DUPLEX-304--1.jpg' }}" alt=""></div>
        						<div class="columnas"><h3>Duplex 304</h3></div>
        						<!--<div class="columnas hab">2 hab.</div>
        						<div class="columnas ban">2 baños</div>-->
        						<div class="columnas prec">$ 525,906.50 USD</div>
        						<div class="columnas dis">Disponible</div>
        						<span>MÁS INFORMACIÓN</span>
        					</a>
        					<div class="accordion-content" data-tab-content>
        						<div class="row">
        							<div class="line-bottom" style="overflow: hidden;">
        								<div class="medium-4 columns"><h4>Duplex 304</h4></div>
        								<div class="medium-4 columns text-center"><div class="dis">Disponible</div></div>
        								<div class="medium-4 columns text-right"><h4>$ 525,906.50 USD</h4></div>
        							</div>
        							<div class="main-info small-12 large-7 columns" data-type="Departamentos Duplex" data-num="Dpto 304" data-enabled="true">
        								<div class="content-galery">
        									<div class="box-galery">
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/DUPLEX-304--1.jpg' }}" style="display:block;"><img src="{{ 'img/small/DUPLEX-304--1.jpg' }}" alt="" ></a>
        										</div>
        										<div class="Galery easyzoom easyzoom--overlay show">
        											<a href="{{ 'img/big/DUPLEX-304--2.jpg' }}" style="display:block;"><img src="{{ 'img/small/DUPLEX-304--2.jpg' }}" alt="" ></a>
        										</div>
        									</div>
        								</div>
        							</div>
        							<div class="small-12 large-5 columns info_depa">
        								<div class="fila_e">
        									<div class="are">Área techada:<b>208.15 m2</b></div>
        									<div class="are">Área libre:<b>41.01 m2</b></div>
        									<div class="are">Área ocupada:<b>249.16 m2</b></div>
        								</div>
                        <div class="box-listC ico3">
        									<b>Cochera</b>
                          19-20
        								</div>
                        <div class="box-listC ico3">
        									<b>Deposito</b>
                          DEPOSITO 5
        								</div>
        								<!--<div class="box-listC ico1">
        									<b>Área social</b>
        									Cocina, sala, comedor con terraza primer piso, balcón en segundo piso.
        								</div>
        								<div class="box-listC ico2">
        									<b>Área de servicio</b>
        									Lavandería y closet de lavado.
        								</div>
        								<div class="box-listC ico3">
        									<b>Área íntima</b>
        									Sala de estar, Dormitorio principal con walking closet y baño incorporado, Dormitorio 02 con baño.
        								</div>-->
        							</div>
        							<div class="small-12 columns adicionales"></div>
        						</div>
        					</div>
        				</li>

      			</ul>

  		   </div>

		   </div>

	</div>
  </section>

@include('layouts.footer')
@stop

@section('script')
<script type="text/javascript">
    var get_url = "{{ URL::to('/registro') }}";
</script>
<script src="{{ url('js/index.js') }}"></script>

@stop
