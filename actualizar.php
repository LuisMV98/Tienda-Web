<?php
	include("conexionBebos.php");
	session_start();
	
	$nombr = $_REQUEST['nombre'];
	$direc = $_REQUEST['direccion'];
	$tarje = $_REQUEST['tarjeta'];
	$corre = $_REQUEST['correo'];

    $_SESSION['nomb'] = $nombr;
    $_SESSION['dire'] = $direc;
    $_SESSION['tarj'] = $tarje;
    $_SESSION['correous'] = $corre;

	$link = Conectar();

    echo $tarje;

	$query = "UPDATE usuarios SET nombre='$nombr',direccion='$direc',tarjeta='$tarje',correo='$corre' WHERE correo='$corre'";

	mysqli_query($link,$query);

	header("Location: admin_cuenta.php?conf=1");

?>