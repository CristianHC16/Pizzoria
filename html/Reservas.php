<!DOCTYPE html>
<html>
	<head>
		<title>Reservas</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../librerias/css/Reservas.css">
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
				<li id="e"><a href="index.php" id="en2"><span id="f"><img src="../librerias/imagenes/7.png"></span>Inicio</a></li>
				<li id="l1"><a href="Menu.php" id="en1"><span id="g"><img src="../librerias/imagenes/8.png"></span>Menú</a></li>
				<li id="l2"><a href="Nosotros.php" id="en2"><span id="h"><img src="../librerias/imagenes/9.png"></span>Nosotros</a></li>
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
			<h1 id="AR">Reservas</h1>
			<div id="TablaReser">
				<table border="1" cellpadding="5" cellspacing="1" id="TablaRe">
					<thead id="TabR">
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Dirección</th>
							<th>Telefono</th>
							<th>Correo</th>
							<th id="PizzaI">Pizza - Promoción</th>
						</tr>
					</thead>
					<tbody id="TabR2">
						<?php 
							include("../php/Conexion.php");
							$sql="SELECT * FROM reserva";
							$resultado=mysql_query($sql);
							while ($fila = mysql_fetch_array($resultado)) {
						?>
							<tr>
								<td><?php echo $fila['nombre'] ?></td>
								<td><?php echo $fila['apellido'] ?></td>
								<td><?php echo $fila['direccion'] ?></td>
								<td><?php echo $fila['telefono'] ?></td>
								<td><?php echo $fila['correo'] ?></td>
								<td><?php echo $fila['pizza_promocion'] ?></td>
							</tr>
						<?php 
							}
						?>
					</tbody>
				</table>
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