<?php require_once 'ti.php' ?> 
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title><?php startblock('title') ?> Title of the page <?php endblock() ?> </title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
	<meta name="description" content="LisonKite, Taller de reparación integral para equipos de kite. Reparamos cualquier desperfecto. Servicio por mensajería a toda la península, recogidas online. Fabricamos flotadores, líneas a medida, bridajes, cabos de potencia, cambiamos válvulas, modificamos barras.">
    <meta name="keywords" content="taller kite, reparar kite, reparar vela, reparar líneas, kite poro, kite rajado, kite roto, kite estropeado, kite, roto, kite explosión, kite ola, kite falta, cometa rota, cometa rajada, cometa estropeada, poro, válvula, válvula desenganchada, pierde aire kite, tapón kite, pierde aire, válvula rota, reparar naish, reparar north, reparar slingshot, reparar airush, reparar ozone, reparar best, reparar takoon, reparar Cabrinha, reparar líneas, polea, líneas, profesional kite, Xavi lison, cabo barra, botavara, pig tail, dacron, borde de ataque, costilla, blader, flotador, vejiga, dynnema, footstrap, cinta spinaker, cinta reparar, reparar rápido, taller kitesurf, taller kitesurf Barcelona, taller, kite Barcelona, Barcelona kitesurf repair, kite repair, kite repair Barcelona.">
	<meta http-equiv="Content-Type"content="text/html; charset=windows-1252">
	<META NAME="revisit-after" content="14 days">
	<META NAME="robots" content="index,follow">
	<META NAME="distribution" content="global">
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>

	<!-- CSS Menu -->
   <link rel="stylesheet" href="cssmenu/styles.css">
   <script src="cssmenu/script.js"></script>


	<style>
	.art-content .art-postcontent-0 .layout-item-0 { 
		border-spacing: 10px 0px; 
		border-collapse: separate;  
	}
	.art-content .art-postcontent-0 .layout-item-1 { 
		border-top-style:dotted;
		border-right-style:dotted;
		border-bottom-style:dotted;
		border-left-style:dotted;
		border-width:3px;
		border-color:#000000; 
		color: #191018; 
		background: #B9C0CA; 
		padding: 10px; 
		border-radius: 40px;  
	}
	.ie7 .post .layout-cell {
		border:none !important; 
		padding:0 !important; 
	}
	.ie6 .post .layout-cell {
		border:none !important; 
		padding:0 !important; 
	}
	</style>
</head>
<body>

<div id="fb-root"></div>
<script>
	(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.0";
			  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<!-- Main Container -->
<div id="art-main">
    <div class="art-sheet clearfix">
		<header class="art-header clearfix">
		<div class="art-slider art-slidecontainerheader">
	    	<div class="art-slider-inner">
				<div class="art-slide-item art-slideheader0"></div>
				<div class="art-slide-item art-slideheader1"></div>
				<div class="art-slide-item art-slideheader2"></div>
				<div class="art-slide-item art-slideheader3"></div>
	    	</div>
		</div>
		<div class="art-slidenavigator art-slidenavigatorheader">
			<a href="#" class="art-slidenavigatoritem"></a>
			<a href="#" class="art-slidenavigatoritem"></a>
			<a href="#" class="art-slidenavigatoritem"></a
			><a href="#" class="art-slidenavigatoritem"></a>
		</div>
	    <div class="art-shapes"></div>                                    
		</header>


		<!-- Navigation panel -->
		<nav class="art-nav clearfix">
		    <ul class="art-hmenu">
		    	<li><a href="index.php" class="active">INICIO</a></li>
		    	<li><a href="reparaciones.php">REPARACIONES</a>
				<ul>
			    	<li><a href="tela.php">TELA</a></li>
			    	<li><a href="flotadores.php">FLOTADORES</a></li>
			    	<li><a href="barras.php">BARRAS</a></li>
			    	<li><a href="presupuesto.php">PRESUPUESTO</a></li>
		    	</ul>
		    	</li>
		    	<li><a href="recogidas.php">RECOGIDAS</a></li>
		    	<li><a href="kite-style.php">KITE STYLE</a></li>
		    	<li><a href="quienes-somos.php">QUIENES SOMOS</a></li>
		    	<li><a href="formulario.php">FORMULARIO</a></li>
		    	<li><a href="contacto.php">CONTACTO</a></li>		    
		    </ul> 
		</nav>

		<div class="art-layout-wrapper clearfix">
			<?php startblock('content') ?> Place here your content <?php endblock() ?> 
		</div>

		<!-- Footer -->
		<footer class="art-footer clearfix">
			<div class="fb-like" data-href="https://www.facebook.com/LisonKite" data-layout="standard" data-action="like" data-show-faces="false" data-share="true">
			</div>
			<p>
			<span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 18px; font-weight: bold;"><br></span>
			</p>
		</footer>
	</div>
</div>
</body>
</html>