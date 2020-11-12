<!DOCTYPE html>
<html>
	<head>
		<title>Pizzoria</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../librerias/css/index.css">
		<link rel="shortcut icon" href="../librerias/imagenes/4.png">
		<script type="text/javascript">
			function Enviar(){
				alert("Su orden se ha realizado correctamente");
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
				<li id="e"><span id="f"><img src="../librerias/imagenes/7.png"></span>Inicio</li>
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
							echo "Bienvenid@"." ".$_SESSION['usuSession'];
						?>
					</div>
				</div>
				<?php
				}
				?>
			</ul>
		</nav>
		<article>
			<div id="x">
				<span>Aqui en Pizzoria tenemos las mejores pizzas para usted y su familia.</span>
			</div>
			<div id="x2">
				<span>Ofrecemos los mejores precios, solo debe ordenar ya.</span>
			</div>
			<div id="x3">
				<img src="../librerias/imagenes/11.jpg" width="500" height="200" id="im">
			</div>
		</article>
		<aside>
			<?php 
				if (isset($_SESSION['usuSession']) !=false) {				
			?>
			<div id="f1">
				<span>Ordene su Pizza YA</span>
			</div>
			<div id="f2">
				<form action="../php/index.php" method="POST">
					<span id="y1"><label for="nom">Nombre:</label></span>
					<span id="y2"><input type="text" name="Nombre" id="i1" required></input></span><br>
					<div id="d5">
						<span id="y9"><label for="dir">Apellido:</label></span>
						<span id="y10"><input type="text" name="Apellido" id="i6" required></input></span>
					</div><br>
					<div id="d1">
						<span id="y3"><label for="dir">Direccion:</label></span>
						<span id="y4"><input type="text" name="Direccion" id="i2" required></input></span>
					</div><br>
					<div id="d2">
						<span id="y5"><label for="tel">Telefono:</label></span>
						<span id="y6"><input type="number" name="Telefono" id="i3" required></input></span>
					</div><br>
					<div id="d3">
						<span id="y7"><label for="cor">Correo:</label></span>
						<span id="y8"><input type="email" name="Correo" id="i4" required></input></span>
					</div><br>
					<div id="d6">
						<span id="y11"><label for="cor">Pizza:</label></span>
						<span id="y12">
							<select id="i7" name="Pizza">
								<option>Hawaiana ($20.000)</option>
								<option>Queso y Pepperoni ($18.000)</option>
								<option>Jamón y Palmitos ($19.000)</option>
								<option>Margarita ($21.000)</option>
								<option>Pollo ($18.000)</option>
								<option>Jamón y panceta ($23.000)</option>
								<option>Napolitana ($22.000)</option>
								<option>4 quesos ($25.000)</option>
								<option>Salmón y queso crema ($22.000)</option>
								<option>Carnes ($24.000)</option>
							</select>
						</span>
					</div><br>
					<div id="d4">
						<table>
							<thead>
								<tr>
									<td>
										<input id="i5" type="submit" value="Ordenar" onclick="Enviar()"></input>
									</td>
									<td><span id="Sep">/</span></td>
									<td title="Reservas">
										<a href="Reservas.php">
											<img src="../librerias/imagenes/12.png" width="40" height="40" id="Reser">
										</a>
									</td>
								</tr>
							</thead>
						</table>
					</div>
				</form>
			</div>	
			<?php 
				}else{				
			?>
			<div id="Orden">
				Para ordenar tu pizza inicia sesión con tu cuenta, y si aún no tienes una puedes <a href="Registro.html" id="Nse2">registrarte</a> de forma gratuita.
			</div>
			<?php 
				}
			?>
		</aside>
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