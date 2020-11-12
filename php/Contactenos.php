<?php
	include("Conexion.php");
	$Nomb=$_POST["Nom"];
	$Apel=$_POST["Ape"];
	$Tele=$_POST["Tel"];
	$Corr=$_POST["Cor"];
	$Asun=$_POST["Asu"];
	$Mens=$_POST["Men"];
	$sql="INSERT INTO mensajes VALUES(null,'".$Nomb."','".$Apel."',".$Tele.",'".$Corr."','".$Asun."','".$Mens."')";
	$resultado=mysql_query($sql) or die (header("location: ../html/Error.html"));
	header("location: ../html/Contactenos.php");
?>