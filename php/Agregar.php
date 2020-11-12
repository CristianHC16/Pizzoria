<?php 
	include("Conexion.php");
	$nom=$_POST['nombre'];
	$descri=$_POST['descripcion'];
	$pre=$_POST['precio'];
	$target_path="../DescargarImagenes/";
	$target_path=$target_path . basename($_FILES['foto']['name']);
	if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) {
		$sql="INSERT INTO menu VALUES (null,'".$nom."','".$target_path."','".$descri."',".$pre.")";
		$agregar=mysql_query($sql) or die (header("location: ../html/Error.html"));
		echo "Se inserto correctamente";
		header("location: ../html/Menu.php");
	}else{
		echo "Ha ocurrio un error";
		header("location: ../html/Error.html");
	}
?>