<?php
	include("Conexion.php");
	$usu=$_POST["Usuario"];
	$con=$_POST["Password"];
	$passEncriptado=md5($con);
	$sql="SELECT * FROM usuarios WHERE usuario='".$usu."' AND password='".$passEncriptado."'";
	$resultado=mysql_query($sql) or die (header("location: ../html/Error.html"));
	if (mysql_num_rows($resultado)>0) {
		session_start();
		$_SESSION['usuSession']=$usu;
		header("location: ../html/index.php");
	}else{
		echo "El usuario no existe";
		header("location: ../html/Login.html");
	}
?>