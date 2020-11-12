<?php
	include("Conexion.php");
	$nom=$_POST["Nombre"];
	$ape=$_POST["Apellido"];
	$usu=$_POST["Usuario"];
	$con=$_POST["Contraseña"];
	$con2=$_POST["ConfirmarContraseña"];
	$cor=$_POST["Correo"];
	$tel=$_POST["Telefono"];
	$dir=$_POST["Dirección"];
	$passEncriptado;
	if ($con==$con2) {
		$passEncriptado=md5($con);
		$sql = "INSERT INTO usuarios VALUES(null,'".$nom."','".$ape."','".$usu."','".$passEncriptado."','".$cor."','".$tel."','".$dir."')";
		$respuesta = mysql_query($sql) or die (header("location: ../html/Error.html"));
		header("location: ../html/Login.html");
	}else{
		header("location: ../html/Registro.html");
	}
?>