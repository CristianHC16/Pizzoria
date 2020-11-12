<!DOCTYPE html>
<html>
	<head>
		<title>Nosotros</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../librerias/css/Nosotros.css">
		<link rel="shortcut icon" href="../librerias/imagenes/4.png">
	</head>
	<body>
		<header>
			<div id="c">
				<img src="../librerias/imagenes/6.png">
			</div>
			<div id="d">
				<img src="../librerias/imagenes/5.png">
			</div>
			<div id="a">
				<img src="../librerias/imagenes/2.png">
			</div>
			<div id="b">
				<span>PIZZ<img src="../librerias/imagenes/3.png" width="80" height="80">RIA</span>
			</div>
			<div id="m">
				<span>Creamos Pizzas a la medida y de gran calidad</span>
			</div>	
		</header>
		<nav>
			<ul>
				<li id="e"><a href="index.php" id="en1"><span id="f"><img src="../librerias/imagenes/7.png"></span>Inicio</a></li>
				<li id="l1"><a href="Menu.php" id="en2"><span id="g"><img src="../librerias/imagenes/8.png"></span>Menú</a></li>
				<li id="l2"><span id="h"><img src="../librerias/imagenes/9.png"></span>Nosotros</li>
				<li id="k"><a href="Contactenos.php" id="en2"><span id="j"><img src="../librerias/imagenes/10.png"></span>Contáctenos</a></li>
				<?php
					session_start();
					if (isset($_SESSION['usuSession']) !=false) {
				?>
				<span id="Login"><li id="L2"><a href="../php/Cerrar.php" id="en3"><img src="../librerias/imagenes/27.png" id="IM1"><span id="L3">Cerrar Sesión</a></span></li></span>
				<?php }else{ ?>
				<span id="Login"><li id="L2"><a href="Login.html" id="en3"><img src="../librerias/imagenes/27.png" id="IM1"><span id="L3">Iniciar Sesión</a></span></li></span>
				<?php } ?>
				<?php
				if (isset($_SESSION['usuSession']) !=false) {
				
				?>	
				<div id="cua">
					<div id="cua2">
						<?php 
							echo $_SESSION['usuSession'];
						?>
					</div>
				</div>
				<?php
				}
				?>
			</ul>
		</nav>
		<article>
			<h1>¿Quienes somos?</h1>

			<div id="ari">
				<img src="../librerias/imagenes/29.png" width="200" height="200">
			</div>

			<div id="art">
				Somos una pizzería que les brinda un poco de alegría, gracias a nuestras increíbles pizzas que con sus sabores deleitan a todas las personas.<br/><br/>
				Pizzoria brinda una excelente calidad en sus pizzas, ya que cuenta con las mejores personas para realizar esta tarea, además poseemos el personal adecuado para responder a sus peticiones o reclamos. Contamos con 5 años de experiencia, lo cual le brinda mucha más confianza al momento de ordenar su pizza.<br/><br/>
				No dudes en <a href="index.php" id="enN">ordenar</a> tu pizza ya, lo único por lo que te debes preocupar es por escoger tu <a href="Menu.php" id="enN">pizza</a> favorita. Además si tienes una queja o deseas trabajar con nosotros <a href="Contactenos.php" id="enN">envíanos</a> un mensaje y te responderemos lo más pronto posible.
			</div>
		</article>
		<footer>
			<a href="Contactenos.php" id="Ei">
				<div id="b1">
					<table>
						<thead>
							<tr>
								<td><img src="../librerias/imagenes/13.png"></td>
								<td><span id="v1" title="Santa Rosa de Cabal">Dirrecion</span></td>
							</tr>
						</thead>
					</table>
				</div>
			</a>
			<a href="Contactenos.php" id="Ei">
				<div id="b2">
					<table>
						<thead>
							<tr>
								<td><img src="../librerias/imagenes/14.png" ></td>
								<td><span id="v2" title="0953127543">Telefono</span></td>
							</tr>
						</thead>
					</table>
				</div>
			</a>
			<a href="Contactenos.php" id="Ei">
				<div id="b3">
					<table>
						<thead>
							<tr>
								<td><img src="../librerias/imagenes/15.png"></td>
								<td><span id="v3" title="Pizzoria@gmail.com">Correo</span></td>
							</tr>
						</thead>
					</table>
				</div>
			</a>
		</footer>
	</body>
</html>