<!DOCTYPE html>
<html>
	<head>
		<title>Agregar Pizza</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../librerias/css/Agregar.css">
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
				<li><a href="Menu.php" id="en2"><span id="g"><img src="../librerias/imagenes/8.png"></span>Menú</a></li>
				<li><a href="Nosotros.php" id="en2"><span id="h"><img src="../librerias/imagenes/9.png"></span>Nosotros</a></li>
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
			<div id="f1">
				<span>Agregue su Pizza YA</span>
			</div>
			<div id="Conte">
				<div id="f2">
					<form method="POST" action="../php/Agregar.php" enctype="multipart/form-data">
						<div id="d0">
							<span id="y1"><label for="nom">Nombre:</label></span>
							<span id="y2"><input type="text" id="i1" name="nombre" required></input></span><br>
						</div>
						<div id="d5">
							<span id="y9"><label for="dir">Foto:</label></span>
							<span id="y10"><input type="file" id="i6" name="foto" required></input></span>
						</div><br>
						<div id="d1">
							<span id="y3"><label for="dir">Descripción:</label></span>
							<span id="y4"><textarea type="text" id="i2" name="descripcion" rows="6" cols="36" required></textarea></span>
						</div><br>
						<div id="d2">
							<span id="y5"><label for="tel">Precio:</label></span>
							<span id="y6"><input type="number" id="i3" name="precio" required></input></span>
						</div><br>
						<input id="i5" type="submit" value="Agregar"></input>
					</form>
				</div>
			</div>
			<div id="AgregarP">
				<img src="../librerias/imagenes/AgregarPR.png" width="400" height="400">
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