<?php
	include("conexionBebos.php");
	
	$nom = $_REQUEST['nombre'];
	$dir = $_REQUEST['direccion'];
	$tar = $_REQUEST['tarjeta'];
	$cor = $_REQUEST['correo'];
	$con = $_REQUEST['contra'];

	$link = Conectar();

	$query = "INSERT INTO usuarios VALUES ('$nom', '$dir', '$tar', '$cor', '$con')";
	
	mysqli_query($link,$query);

	echo $nom;

	header("Location: crea_usuario.php?conf=1");

?>