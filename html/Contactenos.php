<!DOCTYPE html>
<html>
	<head>
		<title>Contactenos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../librerias/css/Contactenos.css">
		<link rel="shortcut icon" href="../librerias/imagenes/4.png">
		<script type="text/javascript">
			function Enviar(){
				alert("Su mensaje se ha enviado correctamente");
			}
		</script>
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
				<li id="l2"><a href="Nosotros.php" id="en2"><span id="h"><img src="../librerias/imagenes/9.png"></span>Nosotros</a></li>
				<li id="k"><span id="j"><img src="../librerias/imagenes/10.png"></span>Contáctenos</li>
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
				<form action="../php/Contactenos.php" method="POST">
					<span id="y1"><label for="nom">Nombre:</label></span>
					<span id="y2"><input type="text" name="Nom" id="i1" required></input></span><br>
					<div id="d5">
						<span id="y9"><label for="dir">Apellido:</label></span>
						<span id="y10"><input type="text" name="Ape" id="i6" required></input></span>
					</div><br>
					<div id="d1">
						<span id="y3"><label for="dir">Telefono:</label></span>
						<span id="y4"><input type="number" name="Tel" id="i2" required></input></span>
					</div><br>
					<div id="d2">
						<span id="y5"><label for="tel">Correo:</label></span>
						<span id="y6"><input type="email" name="Cor" id="i3" required></input></span>
					</div><br>
					<div id="d3">
						<span id="y7"><label for="cor">Asunto:</label></span>
						<span id="y8"><input type="text" name="Asu" id="i4" required></input></span>
					</div><br>
					<span id="y11"><label for="nom">Mensaje:</label></span>
					<div id="d6">
						<span id="y12"><textarea type="text" name="Men" id="i1" rows="6" cols="34" required></textarea></span>
					</div><br>
					<div id="d4">
						<table>
							<thead>
								<tr>
									<td>
										<input id="i5" type="submit" value="Enviar" onclick="Enviar()"></input>
									</td>
									<td><span id="Sep">/</span></td>
									<td title="Mensajes Enviados">
										<a href="Mensajes.php">
											<img src="../librerias/imagenes/MenEnvi.png" width="100" height="100" id="Mensajes">
										</a>
									</td>
								</tr>
							</thead>
						</table>
					</div>
				</form>
			</div>
			<div id="Informacion">
				<div id="I">
					<span id="In">Dirección:</span> Santa Rosa de Cabal
				</div>
				<div id="I">
					<span id="In">Teléfono:</span> 0953127543
				</div>
				<div id="I">
					<span id="In">Correo:</span> Pizzoria@gmail.com
				</div>
			</div>
		</article>
		<footer>
			<div id="b1">
				<table>
					<thead>
						<tr>
							<td><img src="../librerias/imagenes/13.png"></td>
							<td><span id="v1">Dirrecion</span></td>
						</tr>
					</thead>
				</table>
			</div>
			<div id="b2">
				<table>
					<thead>
						<tr>
							<td><img src="../librerias/imagenes/14.png" ></td>
							<td><span id="v2">Telefono</span></td>
						</tr>
					</thead>
				</table>
			</div>
			<div id="b3">
				<table>
					<thead>
						<tr>
							<td><img src="../librerias/imagenes/15.png"></td>
							<td><span id="v3">Correo</span></td>
						</tr>
					</thead>
				</table>
			</div>
		</footer>		
	</body>
</html>