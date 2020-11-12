<!DOCTYPE html>
<html>
	<head>
		<title>Menu</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../librerias/css/Menu.css">
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
				<li><span id="g"><img src="../librerias/imagenes/8.png"></span>Menú</li>
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
		<?php 
			if (isset($_SESSION['usuSession']) !=false) {
		?>
			<article id="Ar1">
				<div id="AgreI">
					<img src="../librerias/imagenes/AgregarIm.png" width="43" height="43">
				</div>
				<div id="Agregar">
					<a href="Agregar.php"><input type="submit" value="Agregar Pizzas" id="Agre"></input></a>
				</div>
				<div id="PizA">
					<img src="../librerias/imagenes/PizzasA.png" width="43" height="43">
				</div>
				<div id="Pizzas">
					<a href="Pizzas.php"><input type="submit" value="Pizzas Agregadas" id="Piz"></input></a>
				</div>
				<hr id="SepBu" color="black" size="2">
				<div id="AC1">
					<span id="AT1">PROMOCIONES</span>
				</div>
				<div id="AC2">
					<table border="1" id="ATA1" cellspacing="1" cellpadding="2">
						<thead id="ATA2">
							<tr>
								<th id="Item">Por la compra de</th>
								<th>Recibe gratis</th>
								<th>Tan solo por</th>
							</tr>
						</thead>
						<tbody id="ATA3">
							<tr>
								<td>1. Pizza Hawaiana y de Carnes</td>
								<td>Pizza de Pollo</td>
								<td>$22.000</td>
							</tr>
							<tr>
								<td>2. Pizza 4 Quesos</td>
								<td>1 Gaseosa de 2 Litros</td>
								<td>$18.000</td>
							</tr>
							<tr>
								<td>3. Pizza de Pollo y de Jamon y Palmitos</td>
								<td>Pizza de Carnes</td>
								<td>$18.500</td>
							</tr>
							<tr>
								<td>4. Pizza Napolitana</td>
								<td>Pizza Margarita</td>
								<td>$20.000</td>
							</tr>
							<tr>
								<td>5. Pizza de Salmon y Queso Crema</td>
								<td>Pizza de Queso y Pepperoni</td>
								<td>$19.000</td>
							</tr>
							<tr>
								<td>6. Pizza de Queso y Pepperoni</td>
								<td>Pizza de Salmon y Queso Crema</td>
								<td>$19.500</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="SepP">
					<a href="#popup11" class="popup-link"><img src="../librerias/imagenes/16.png" width="40" height="40"></a>
				</div>
				<hr id="AL1" color="black" size="2">
				<div id="AC9">
					<span id="AT2">Hawaiana</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/17.png" width="450" height="300" id="IA1">
				</div>
				<div id="AC11">
					<span>La pizza hawaiana es una pizza que contiene una base de queso fundido y tomate que se aliñan con jamón y piña. Sea como sea la piña está siempre presente. Se trata de una de las variantes de pizza más importantes de Australia, llegando a alcanzar el 15% de los pedidos de pizza.</span>
				</div>
				<div id="AB1">
					<a href="#popup1" class="popup-link"><img src="../librerias/imagenes/16.png" width="40" height="40"></a>
				</div>

				<hr id="AL2" color="black" size="2">
				<div id="AC12">
					<span id="AT3">Queso y Pepperoni</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/18.jpg" width="450" height="300" id="IA2">
				</div>
				<div id="AC14">
					<span>Esta pizza contiene salsa de tomate, orégano, queso y pepperoni. El pepperoni es uno de los sabores más populares en el mundo, sobre todo en EE. UU. Por encima de las rebanadas picantes del pepperoni, lleva una capa de queso derretido a la que nadie puede negarse.</span>
				</div>
				<div id="AB2">
					<a href="#popup2" class="popup-link"><img src="../librerias/imagenes/16.png" width="40" height="40"></a>
				</div>

				<hr id="AL3" color="black" size="2">
				<div id="AC15">
					<span id="AT4">Jamon y Palmitos</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/19.jpg" width="450" height="300" id="IA3">
				</div>
				<div id="AC17">
					<span>Esta contiene una de las grandes combinaciones que saben deliciosas  sobre todo la masa de la pizza ya que contiene mantequilla.  Esta la servimos con mozzarella, jamón y palmitos, para los amantes de lo imperdible y delicioso. Los palmitos son el toque de gracia.</span>
				</div>
				<div id="AB3">
					<a href="#popup3" class="popup-link"><img src="../librerias/imagenes/16.png" width="40" height="40"></a>
				</div>

				<hr id="AL4" color="black" size="2">
				<div id="AC18">
					<span id="AT5">Margarita</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/20.jpg" width="450" height="300" id="IA4">
				</div>
				<div id="AC20">
					<span>La pizza Margarita es una típica pizza napolitana condimentada con tomate, mozzarella, albahaca fresca, sal y aceite. Se trata de la pizza napolitana más popular, junto con la marinera. La auténtica pizza italiana que lleva los colores de su bandera con el rojo de los tomates, el verde de la albahaca y el blanco de la mozzarella.</span>
				</div>
				<div id="AB4">
					<a href="#popup4" class="popup-link"><img src="../librerias/imagenes/16.png" width="40" height="40"></a>
				</div>

				<hr id="AL5" color="black" size="2">
				<div id="AC21">
					<span id="AT6">Pollo</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/21.jpg" width="450" height="300" id="IA5">
				</div>
				<div id="AC23">
					<span>Es una pizza que contiene pollo (pechuga deshuesada y sin piel), cebolla roja pequeña y mozzarella. No es tan conocida como otras pizzas, pero igualmente debes probarla. A muchos les encantaría este sabor con pollo y salsa barbacoa.</span>
				</div>
				<div id="AB5">
					<a href="#popup5" class="popup-link"><img src="../librerias/imagenes/16.png" width="40" height="40"></a>
				</div>

				<hr id="AL6" color="black" size="2">
				<div id="AC24">
					<span id="AT7">Jamon y Panceta</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/22.jpg" width="450" height="300" id="IA6">
				</div>
				<div id="AC26">
					<span>Esta pizza envuelve Salsa de tomate, Mozarella, Jamón ,Panceta o bacon y Hierbas aromáticas. ¡Otra vez el jamón! Es que es uno de los ingredientes favoritos en las pizzas. Esta vez, en combinación con la panceta.</span>
				</div>
				<div id="AB6">
					<a href="#popup6" class="popup-link"><img src="../librerias/imagenes/16.png" width="40" height="40"></a>
				</div>

				<hr id="AL7" color="black" size="2">
				<div id="AC27">
					<span id="AT8">Napolitana</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/23.jpg" width="450" height="300" id="IA7">
				</div>
				<div id="AC29">
					<span>La pizza napolitana, de masa tierna y delgada pero bordes altos, es la versión propia de la cocina napolitana de la pizza redonda. Muy similar a la pizza Margarita debido a sus sabores  e ingredientes pero con leves variantes.</span>
				</div>
				<div id="AB7">
					<a href="#popup7" class="popup-link"><img src="../librerias/imagenes/16.png" width="40" height="40"></a>
				</div>

				<hr id="AL8" color="black" size="2">
				<div id="AC30">
					<span id="AT9">4 Quesos</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/24.jpg" width="450" height="300" id="IA8">
				</div>
				<div id="AC32">
					<span>Esta es una pizza que como su nombre lo indica contiene 4 tipos de quesos, los cuales son queso mozzarella, queso azul,  queso provolone y queso parmesano rallado. Si te gustan las recetas con queso, ¡imagínate esta que lleva cuatro! </span>
				</div>
				<div id="AB8">
					<a href="#popup8" class="popup-link"><img src="../librerias/imagenes/16.png" width="40" height="40"></a>
				</div>

				<hr id="AL9" color="black" size="2">
				<div id="AC33">
					<span id="AT10">Salmón y queso crema</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/25.jpg" width="450" height="300" id="IA9">
				</div>
				<div id="AC35">
					<span>Esta pizza contiene alcaparras, eneldo fresco picado, queso crema, a temperatura ambiente, sal y pimienta. Y si quieres darle un toque de elegancia a la noche, prueba esta pizza con salmón ahumado que seguro a todos les gustará.</span>
				</div>
				<div id="AB9">
					<a href="#popup9" class="popup-link"><img src="../librerias/imagenes/16.png" width="40" height="40"></a>
				</div>

				<hr id="AL10" color="black" size="2">
				<div id="AC36">
					<span id="AT11">Carnes</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/26.jpg" width="450" height="300" id="IA10">
				</div>
				<div id="AC38">
					<span>Esta pizza contiene Salsa de tomate, mozzarella, carne picada, oregano y aceite de oliva virgen extra. Esta es perfecta para las personas que aman la carne, por lo cual la disfrutaran mucho.</span>
				</div>
				<div id="AB10">
					<a href="#popup10" class="popup-link"><img src="../librerias/imagenes/16.png" width="40" height="40"></a>
				</div>
			</article>	
		<?php
			}else{
		?>
			<article id="Ar2">
				<div id="AC9">
					<span id="AT2">Hawaiana</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/17.png" width="450" height="300" id="IA1">
				</div>
				<div id="AC11">
					<span>La pizza hawaiana es una pizza que contiene una base de queso fundido y tomate que se aliñan con jamón y piña. Sea como sea la piña está siempre presente. Se trata de una de las variantes de pizza más importantes de Australia, llegando a alcanzar el 15% de los pedidos de pizza.</span>
				</div>
				<hr id="AL2" color="black" size="2">
				<div id="AC12">
					<span id="AT3">Queso y Pepperoni</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/18.jpg" width="450" height="300" id="IA2">
				</div>
				<div id="AC14">
					<span>Esta pizza contiene salsa de tomate, orégano, queso y pepperoni. El pepperoni es uno de los sabores más populares en el mundo, sobre todo en EE. UU. Por encima de las rebanadas picantes del pepperoni, lleva una capa de queso derretido a la que nadie puede negarse.</span>
				</div>
				<hr id="AL3" color="black" size="2">
				<div id="AC15">
					<span id="AT4">Jamon y Palmitos</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/19.jpg" width="450" height="300" id="IA3">
				</div>
				<div id="AC17">
					<span>Esta contiene una de las grandes combinaciones que saben deliciosas  sobre todo la masa de la pizza ya que contiene mantequilla.  Esta la servimos con mozzarella, jamón y palmitos, para los amantes de lo imperdible y delicioso. Los palmitos son el toque de gracia.</span>
				</div>
				<hr id="AL4" color="black" size="2">
				<div id="AC18">
					<span id="AT5">Margarita</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/20.jpg" width="450" height="300" id="IA4">
				</div>
				<div id="AC20">
					<span>La pizza Margarita es una típica pizza napolitana condimentada con tomate, mozzarella, albahaca fresca, sal y aceite. Se trata de la pizza napolitana más popular, junto con la marinera. La auténtica pizza italiana que lleva los colores de su bandera con el rojo de los tomates, el verde de la albahaca y el blanco de la mozzarella.</span>
				</div>
				<hr id="AL5" color="black" size="2">
				<div id="AC21">
					<span id="AT6">Pollo</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/21.jpg" width="450" height="300" id="IA5">
				</div>
				<div id="AC23">
					<span>Es una pizza que contiene pollo (pechuga deshuesada y sin piel), cebolla roja pequeña y mozzarella. No es tan conocida como otras pizzas, pero igualmente debes probarla. A muchos les encantaría este sabor con pollo y salsa barbacoa.</span>
				</div>
				<hr id="AL6" color="black" size="2">
				<div id="AC24">
					<span id="AT7">Jamon y Panceta</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/22.jpg" width="450" height="300" id="IA6">
				</div>
				<div id="AC26">
					<span>Esta pizza envuelve Salsa de tomate, Mozarella, Jamón ,Panceta o bacon y Hierbas aromáticas. ¡Otra vez el jamón! Es que es uno de los ingredientes favoritos en las pizzas. Esta vez, en combinación con la panceta.</span>
				</div>
				<hr id="AL7" color="black" size="2">
				<div id="AC27">
					<span id="AT8">Napolitana</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/23.jpg" width="450" height="300" id="IA7">
				</div>
				<div id="AC29">
					<span>La pizza napolitana, de masa tierna y delgada pero bordes altos, es la versión propia de la cocina napolitana de la pizza redonda. Muy similar a la pizza Margarita debido a sus sabores  e ingredientes pero con leves variantes.</span>
				</div>
				<hr id="AL8" color="black" size="2">
				<div id="AC30">
					<span id="AT9">4 Quesos</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/24.jpg" width="450" height="300" id="IA8">
				</div>
				<div id="AC32">
					<span>Esta es una pizza que como su nombre lo indica contiene 4 tipos de quesos, los cuales son queso mozzarella, queso azul,  queso provolone y queso parmesano rallado. Si te gustan las recetas con queso, ¡imagínate esta que lleva cuatro! </span>
				</div>
				<hr id="AL9" color="black" size="2">
				<div id="AC33">
					<span id="AT10">Salmón y queso crema</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/25.jpg" width="450" height="300" id="IA9">
				</div>
				<div id="AC35">
					<span>Esta pizza contiene alcaparras, eneldo fresco picado, queso crema, a temperatura ambiente, sal y pimienta. Y si quieres darle un toque de elegancia a la noche, prueba esta pizza con salmón ahumado que seguro a todos les gustará.</span>
				</div>
				<hr id="AL10" color="black" size="2">
				<div id="AC36">
					<span id="AT11">Carnes</span>
				</div>
				<div id="AC10">
					<img src="../librerias/imagenes/26.jpg" width="450" height="300" id="IA10">
				</div>
				<div id="AC38">
					<span>Esta pizza contiene Salsa de tomate, mozzarella, carne picada, oregano y aceite de oliva virgen extra. Esta es perfecta para las personas que aman la carne, por lo cual la disfrutaran mucho.</span>
				</div>
				<hr id="AL10" color="black" size="2">
				<div id="Nse">
					Para observar nuestras promociones <a href="Login.html" id="Nse2">inicia sesión</a> con tu cuenta, y si aún no tienes una puedes <a href="Registro.html" id="Nse2">registrarte</a> de forma gratuita.
				</div>
			</article>			
		<?php
			}
		?>
		<div class="modal-wrapper" id="popup1">
		    <div class="popup-contenedor">
		       <div id="f1">
					<span>Ordene YA</span>
			   </div>
		       <div id="f2">
					<form action="../php/Menu.php" method="POST">
						<span id="y1"><label for="nom">Nombre:</label></span>
						<span id="y2"><input type="text" id="i1" name="Nombre" required></input></span><br>
						<div id="d5">
							<span id="y9"><label for="dir">Apellido:</label></span>
							<span id="y10"><input type="text" id="i6" name="Apellido" required></input></span>
						</div><br>
						<div id="d1">
							<span id="y3"><label for="dir">Direccion:</label></span>
							<span id="y4"><input type="text" id="i2" name="Direccion" required></input></span>
						</div><br>
						<div id="d2">
							<span id="y5"><label for="tel">Telefono:</label></span>
							<span id="y6"><input type="number" id="i3" name="Telefono" required></input></span>
						</div><br>
						<div id="d3">
							<span id="y7"><label for="cor">Correo:</label></span>
							<span id="y8"><input type="email" id="i4" name="Correo" required></input></span>
						</div><br>
						<div id="d6">
							<span id="y11"><label for="cor">Pizza:</label></span>
							<span id="y12"><input id="i7" type="text" name="Pizza" readonly="readonly" value="Hawaiana ($20.000)"></input>
							</span>
						</div><br>
						<div id="d4">
							<table>
								<thead>
									<tr>
										<td>
											<input id="i5" type="submit" value="Ordenar"></input>
										</td>
									</tr>
								</thead>
							</table>
						</div>

					</form>
				</div>	
		       <a class="popup-cerrar" href="#">X</a>
		    </div>
		</div>
		<div class="modal-wrapper" id="popup2">
		    <div class="popup-contenedor">
		       <div id="f1">
					<span>Ordene YA</span>
			   </div>
		       <div id="f2">
					<form action="../php/Menu.php" method="POST">
						<span id="y1"><label for="nom">Nombre:</label></span>
						<span id="y2"><input type="text" id="i1" name="Nombre" required></input></span><br>
						<div id="d5">
							<span id="y9"><label for="dir">Apellido:</label></span>
							<span id="y10"><input type="text" id="i6" name="Apellido" required></input></span>
						</div><br>
						<div id="d1">
							<span id="y3"><label for="dir">Direccion:</label></span>
							<span id="y4"><input type="text" id="i2" name="Direccion" required></input></span>
						</div><br>
						<div id="d2">
							<span id="y5"><label for="tel">Telefono:</label></span>
							<span id="y6"><input type="number" id="i3" name="Telefono" required></input></span>
						</div><br>
						<div id="d3">
							<span id="y7"><label for="cor">Correo:</label></span>
							<span id="y8"><input type="email" id="i4" name="Correo" required></input></span>
						</div><br>
						<div id="d6">
							<span id="y11"><label for="cor">Pizza:</label></span>
							<span id="y12"><input id="i7" type="text" name="Pizza" readonly="readonly" value="Queso y Pepperoni ($18.000)" size="23"></input>
							</span>
						</div><br>
						<div id="d4">
							<table>
								<thead>
									<tr>
										<td>
											<input id="i5" type="submit" value="Ordenar"></input>
										</td>
									</tr>
								</thead>
							</table>
						</div>

					</form>
				</div>	
		       <a class="popup-cerrar" href="#">X</a>
		    </div>
		</div>
		<div class="modal-wrapper" id="popup3">
		    <div class="popup-contenedor">
		       <div id="f1">
					<span>Ordene YA</span>
			   </div>
		       <div id="f2">
					<form action="../php/Menu.php" method="POST">
						<span id="y1"><label for="nom">Nombre:</label></span>
						<span id="y2"><input type="text" id="i1" name="Nombre" required></input></span><br>
						<div id="d5">
							<span id="y9"><label for="dir">Apellido:</label></span>
							<span id="y10"><input type="text" id="i6" name="Apellido" required></input></span>
						</div><br>
						<div id="d1">
							<span id="y3"><label for="dir">Direccion:</label></span>
							<span id="y4"><input type="text" id="i2" name="Direccion" required></input></span>
						</div><br>
						<div id="d2">
							<span id="y5"><label for="tel">Telefono:</label></span>
							<span id="y6"><input type="number" id="i3" name="Telefono" required></input></span>
						</div><br>
						<div id="d3">
							<span id="y7"><label for="cor">Correo:</label></span>
							<span id="y8"><input type="email" id="i4" name="Correo" required></input></span>
						</div><br>
						<div id="d6">
							<span id="y11"><label for="cor">Pizza:</label></span>
							<span id="y12"><input id="i7" type="text" name="Pizza" readonly="readonly" value="Jamón y Palmitos ($19.000)" size="23"></input>
							</span>
						</div><br>
						<div id="d4">
							<table>
								<thead>
									<tr>
										<td>
											<input id="i5" type="submit" value="Ordenar"></input>
										</td>
									</tr>
								</thead>
							</table>
						</div>

					</form>
				</div>	
		       <a class="popup-cerrar" href="#">X</a>
		    </div>
		</div>
		<div class="modal-wrapper" id="popup4">
		    <div class="popup-contenedor">
		       <div id="f1">
					<span>Ordene YA</span>
			   </div>
		       <div id="f2">
					<form action="../php/Menu.php" method="POST">
						<span id="y1"><label for="nom">Nombre:</label></span>
						<span id="y2"><input type="text" id="i1" name="Nombre" required></input></span><br>
						<div id="d5">
							<span id="y9"><label for="dir">Apellido:</label></span>
							<span id="y10"><input type="text" id="i6" name="Apellido" required></input></span>
						</div><br>
						<div id="d1">
							<span id="y3"><label for="dir">Direccion:</label></span>
							<span id="y4"><input type="text" id="i2" name="Direccion" required></input></span>
						</div><br>
						<div id="d2">
							<span id="y5"><label for="tel">Telefono:</label></span>
							<span id="y6"><input type="number" id="i3" name="Telefono" required></input></span>
						</div><br>
						<div id="d3">
							<span id="y7"><label for="cor">Correo:</label></span>
							<span id="y8"><input type="email" id="i4" name="Correo" required></input></span>
						</div><br>
						<div id="d6">
							<span id="y11"><label for="cor">Pizza:</label></span>
							<span id="y12"><input id="i7" type="text" name="Pizza" readonly="readonly" value="Margarita ($21.000)"></input>
							</span>
						</div><br>
						<div id="d4">
							<table>
								<thead>
									<tr>
										<td>
											<input id="i5" type="submit" value="Ordenar"></input>
										</td>
									</tr>
								</thead>
							</table>
						</div>

					</form>
				</div>	
		       <a class="popup-cerrar" href="#">X</a>
		    </div>
		</div>
		<div class="modal-wrapper" id="popup5">
		    <div class="popup-contenedor">
		       <div id="f1">
					<span>Ordene YA</span>
			   </div>
		       <div id="f2">
					<form action="../php/Menu.php" method="POST">
						<span id="y1"><label for="nom">Nombre:</label></span>
						<span id="y2"><input type="text" id="i1" name="Nombre" required></input></span><br>
						<div id="d5">
							<span id="y9"><label for="dir">Apellido:</label></span>
							<span id="y10"><input type="text" id="i6" name="Apellido" required></input></span>
						</div><br>
						<div id="d1">
							<span id="y3"><label for="dir">Direccion:</label></span>
							<span id="y4"><input type="text" id="i2" name="Direccion" required></input></span>
						</div><br>
						<div id="d2">
							<span id="y5"><label for="tel">Telefono:</label></span>
							<span id="y6"><input type="number" id="i3" name="Telefono" required></input></span>
						</div><br>
						<div id="d3">
							<span id="y7"><label for="cor">Correo:</label></span>
							<span id="y8"><input type="email" id="i4" name="Correo" required></input></span>
						</div><br>
						<div id="d6">
							<span id="y11"><label for="cor">Pizza:</label></span>
							<span id="y12"><input id="i7" type="text" name="Pizza" readonly="readonly" value="Pollo ($18.000)"></input>
							</span>
						</div><br>
						<div id="d4">
							<table>
								<thead>
									<tr>
										<td>
											<input id="i5" type="submit" value="Ordenar"></input>
										</td>
									</tr>
								</thead>
							</table>
						</div>

					</form>
				</div>	
		       <a class="popup-cerrar" href="#">X</a>
		    </div>
		</div>
		<div class="modal-wrapper" id="popup6">
		    <div class="popup-contenedor">
		       <div id="f1">
					<span>Ordene YA</span>
			   </div>
		       <div id="f2">
					<form action="../php/Menu.php" method="POST">
						<span id="y1"><label for="nom">Nombre:</label></span>
						<span id="y2"><input type="text" id="i1" name="Nombre" required></input></span><br>
						<div id="d5">
							<span id="y9"><label for="dir">Apellido:</label></span>
							<span id="y10"><input type="text" id="i6" name="Apellido" required></input></span>
						</div><br>
						<div id="d1">
							<span id="y3"><label for="dir">Direccion:</label></span>
							<span id="y4"><input type="text" id="i2" name="Direccion" required></input></span>
						</div><br>
						<div id="d2">
							<span id="y5"><label for="tel">Telefono:</label></span>
							<span id="y6"><input type="number" id="i3" name="Telefono" required></input></span>
						</div><br>
						<div id="d3">
							<span id="y7"><label for="cor">Correo:</label></span>
							<span id="y8"><input type="email" id="i4" name="Correo" required></input></span>
						</div><br>
						<div id="d6">
							<span id="y11"><label for="cor">Pizza:</label></span>
							<span id="y12"><input id="i7" type="text" name="Pizza" readonly="readonly" value="Jamón y panceta ($23.000)" size="23"></input>
							</span>
						</div><br>
						<div id="d4">
							<table>
								<thead>
									<tr>
										<td>
											<input id="i5" type="submit" value="Ordenar"></input>
										</td>
									</tr>
								</thead>
							</table>
						</div>

					</form>
				</div>	
		       <a class="popup-cerrar" href="#">X</a>
		    </div>
		</div>
		<div class="modal-wrapper" id="popup7">
		    <div class="popup-contenedor">
		       <div id="f1">
					<span>Ordene YA</span>
			   </div>
		       <div id="f2">
					<form action="../php/Menu.php" method="POST">
						<span id="y1"><label for="nom">Nombre:</label></span>
						<span id="y2"><input type="text" id="i1" name="Nombre" required></input></span><br>
						<div id="d5">
							<span id="y9"><label for="dir">Apellido:</label></span>
							<span id="y10"><input type="text" id="i6" name="Apellido" required></input></span>
						</div><br>
						<div id="d1">
							<span id="y3"><label for="dir">Direccion:</label></span>
							<span id="y4"><input type="text" id="i2" name="Direccion" required></input></span>
						</div><br>
						<div id="d2">
							<span id="y5"><label for="tel">Telefono:</label></span>
							<span id="y6"><input type="number" id="i3" name="Telefono" required></input></span>
						</div><br>
						<div id="d3">
							<span id="y7"><label for="cor">Correo:</label></span>
							<span id="y8"><input type="email" id="i4" name="Correo" required></input></span>
						</div><br>
						<div id="d6">
							<span id="y11"><label for="cor">Pizza:</label></span>
							<span id="y12"><input id="i7" type="text" name="Pizza" readonly="readonly" value="Napolitana ($22.000)"></input>
							</span>
						</div><br>
						<div id="d4">
							<table>
								<thead>
									<tr>
										<td>
											<input id="i5" type="submit" value="Ordenar"></input>
										</td>
									</tr>
								</thead>
							</table>
						</div>

					</form>
				</div>	
		       <a class="popup-cerrar" href="#">X</a>
		    </div>
		</div>
		<div class="modal-wrapper" id="popup8">
		    <div class="popup-contenedor">
		       <div id="f1">
					<span>Ordene YA</span>
			   </div>
		       <div id="f2">
					<form action="../php/Menu.php" method="POST">
						<span id="y1"><label for="nom">Nombre:</label></span>
						<span id="y2"><input type="text" id="i1" name="Nombre" required></input></span><br>
						<div id="d5">
							<span id="y9"><label for="dir">Apellido:</label></span>
							<span id="y10"><input type="text" id="i6" name="Apellido" required></input></span>
						</div><br>
						<div id="d1">
							<span id="y3"><label for="dir">Direccion:</label></span>
							<span id="y4"><input type="text" id="i2" name="Direccion" required></input></span>
						</div><br>
						<div id="d2">
							<span id="y5"><label for="tel">Telefono:</label></span>
							<span id="y6"><input type="number" id="i3" name="Telefono" required></input></span>
						</div><br>
						<div id="d3">
							<span id="y7"><label for="cor">Correo:</label></span>
							<span id="y8"><input type="email" id="i4" name="Correo" required></input></span>
						</div><br>
						<div id="d6">
							<span id="y11"><label for="cor">Pizza:</label></span>
							<span id="y12"><input id="i7" type="text" name="Pizza" readonly="readonly" value="4 quesos ($25.000)"></input>
							</span>
						</div><br>
						<div id="d4">
							<table>
								<thead>
									<tr>
										<td>
											<input id="i5" type="submit" value="Ordenar"></input>
										</td>
									</tr>
								</thead>
							</table>
						</div>

					</form>
				</div>	
		       <a class="popup-cerrar" href="#">X</a>
		    </div>
		</div>
		<div class="modal-wrapper" id="popup9">
		    <div class="popup-contenedor">
		       <div id="f1">
					<span>Ordene YA</span>
			   </div>
		       <div id="f2">
					<form action="../php/Menu.php" method="POST">
						<span id="y1"><label for="nom">Nombre:</label></span>
						<span id="y2"><input type="text" id="i1" name="Nombre" required></input></span><br>
						<div id="d5">
							<span id="y9"><label for="dir">Apellido:</label></span>
							<span id="y10"><input type="text" id="i6" name="Apellido" required></input></span>
						</div><br>
						<div id="d1">
							<span id="y3"><label for="dir">Direccion:</label></span>
							<span id="y4"><input type="text" id="i2" name="Direccion" required></input></span>
						</div><br>
						<div id="d2">
							<span id="y5"><label for="tel">Telefono:</label></span>
							<span id="y6"><input type="number" id="i3" name="Telefono" required></input></span>
						</div><br>
						<div id="d3">
							<span id="y7"><label for="cor">Correo:</label></span>
							<span id="y8"><input type="email" id="i4" name="Correo" required></input></span>
						</div><br>
						<div id="d6">
							<span id="y11"><label for="cor">Pizza:</label></span>
							<span id="y12"><input id="i7" type="text" name="Pizza" readonly="readonly" value="Salmón y queso crema ($22.000)" size="26"></input>
							</span>
						</div><br>
						<div id="d4">
							<table>
								<thead>
									<tr>
										<td>
											<input id="i5" type="submit" value="Ordenar"></input>
										</td>
									</tr>
								</thead>
							</table>
						</div>

					</form>
				</div>	
		       <a class="popup-cerrar" href="#">X</a>
		    </div>
		</div>
		<div class="modal-wrapper" id="popup10">
		    <div class="popup-contenedor">
		       <div id="f1">
					<span>Ordene YA</span>
			   </div>
		       <div id="f2">
					<form action="../php/Menu.php" method="POST">
						<span id="y1"><label for="nom">Nombre:</label></span>
						<span id="y2"><input type="text" id="i1" name="Nombre" required></input></span><br>
						<div id="d5">
							<span id="y9"><label for="dir">Apellido:</label></span>
							<span id="y10"><input type="text" id="i6" name="Apellido" required></input></span>
						</div><br>
						<div id="d1">
							<span id="y3"><label for="dir">Direccion:</label></span>
							<span id="y4"><input type="text" id="i2" name="Direccion" required></input></span>
						</div><br>
						<div id="d2">
							<span id="y5"><label for="tel">Telefono:</label></span>
							<span id="y6"><input type="number" id="i3" name="Telefono" required></input></span>
						</div><br>
						<div id="d3">
							<span id="y7"><label for="cor">Correo:</label></span>
							<span id="y8"><input type="email" id="i4" name="Correo" required></input></span>
						</div><br>
						<div id="d6">
							<span id="y11"><label for="cor">Pizza:</label></span>
							<span id="y12"><input id="i7" type="text" name="Pizza" readonly="readonly" value="Carnes ($24.000)"></input>
							</span>
						</div><br>
						<div id="d4">
							<table>
								<thead>
									<tr>
										<td>
											<input id="i5" type="submit" value="Ordenar"></input>
										</td>
									</tr>
								</thead>
							</table>
						</div>

					</form>
				</div>	
		       <a class="popup-cerrar" href="#">X</a>
		    </div>
		</div>
		<div class="modal-wrapper" id="popup11">
		    <div class="popup-contenedor">
		       <div id="f1">
					<span>Ordene YA</span>
			   </div>
		       <div id="f2">
					<form action="../php/Menu.php" method="POST">
						<span id="y1"><label for="nom">Nombre:</label></span>
						<span id="y2"><input type="text" id="i1" name="Nombre" required></input></span><br>
						<div id="d5">
							<span id="y9"><label for="dir">Apellido:</label></span>
							<span id="y10"><input type="text" id="i6" name="Apellido" required></input></span>
						</div><br>
						<div id="d1">
							<span id="y3"><label for="dir">Direccion:</label></span>
							<span id="y4"><input type="text" id="i2" name="Direccion" required></input></span>
						</div><br>
						<div id="d2">
							<span id="y5"><label for="tel">Telefono:</label></span>
							<span id="y6"><input type="number" id="i3" name="Telefono" required></input></span>
						</div><br>
						<div id="d3">
							<span id="y7"><label for="cor">Correo:</label></span>
							<span id="y8"><input type="email" id="i4" name="Correo" required></input></span>
						</div><br>
						<div id="d6">
							<span id="y11"><label for="cor">Promoción:</label></span>
							<span id="y12"><input id="Prom" type="number" name="Pizza" placeholder="Número de la promoción"></input>
							</span>
						</div><br>
						<div id="d4">
							<table>
								<thead>
									<tr>
										<td>
											<input id="i5" type="submit" value="Ordenar"></input>
										</td>
									</tr>
								</thead>
							</table>
						</div>

					</form>
				</div>	
		       <a class="popup-cerrar" href="#">X</a>
		    </div>
		</div>
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
