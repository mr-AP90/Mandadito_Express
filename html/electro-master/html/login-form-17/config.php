<?php 
//configuracion de la bd
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname  = "mandadito_express";

	//crear la conexion a la bd
	$con = new mysqli($hostname, $username, $password, $dbname);
	
	//verificar la conexion
	if ($con->connect_error) {
		die("conexion fallida: " . $con->connect_error);
	}
?>