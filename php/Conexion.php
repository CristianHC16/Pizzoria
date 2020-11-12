<?php
	$con = mysql_connect("localhost","root","") or die (header("location: ../html/Error.html").mysql_error());
	mysql_select_db("pizzoria") or die (header("location: ../html/Error.html"));
?>