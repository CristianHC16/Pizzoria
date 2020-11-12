<?php
	include("Conexion.php");
	$nom=$_POST["Nombre"];
	$ape=$_POST["Apellido"];
	$dir=$_POST["Direccion"];
	$tel=$_POST["Telefono"];
	$cor=$_POST["Correo"];
	$piz=$_POST["Pizza"];
	$sql="INSERT INTO reserva VALUES(null,'".$nom."','".$ape."','".$dir."',".$tel.",'".$cor."','".$piz."')";
	$resultado=mysql_query($sql) or die (header("location: ../html/Error.html"));
	header("location: ../html/index.php");
?>