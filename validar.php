<?php
	include("conexionBebos.php");
	$corr = $_REQUEST['correo'];
	$pass = $_REQUEST['contra'];

	$link = Conectar();

	$query = "SELECT correo, contraseña, nombre, direccion, tarjeta FROM usuarios WHERE correo = '" . $corr . "'";
	
	$consulta = mysqli_query($link,$query);

	$datos = mysqli_num_rows($consulta);

	if ($datos == 1)
	{
		while($fila = mysqli_fetch_row($consulta))
		{
			//$corr_consulta = $fila[1];
			//print("Acceso Autorizado");
			if($fila[1] == $pass)
			{
				session_start();
				$_SESSION['correous'] = $fila[0];
				$_SESSION['nomb'] = $fila[2];
				$_SESSION['dire'] = $fila[3];
				$_SESSION['tarj'] = $fila[4];

				header("location: index.php?init=1");
			}
			else
			{
				header("location: login_error.php?err=0");
			}			
		}
	}
	elseif ($datos > 1) {
		print("Error al consultar la base de datos, contactar al Administrador");
	}
	elseif ($datos == 0){
		//print("El Usuaior no Existe");
		header("location: login_error.php?err=1");
	}

	print("<br>");
	print("<a href = login.php>Inicio</a> ");
?>