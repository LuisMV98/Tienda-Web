<?php
	include("conexionBebos.php");
	$user = $_REQUEST['correo'];
	$pass = $_REQUEST['contra'];

	$link = Conectar();

	$query = "SELECT correo, contraseña FROM usuarios WHERE correo = '" . $user . "'";
	
	$consulta = mysqli_query($link,$query);

	$datos = mysqli_num_rows($consulta);

	if ($datos == 1)
	{
		while($fila = mysqli_fetch_row($consulta))
		{
			//$user_consulta = $fila[1];
			//print("Acceso Autorizado");
			if($fila[1] == $pass)
			{
				session_start();
				$_SESSION['correo'] = $fila[0];

				header("location: index.php");
			}
			else
			{
				header("location: index.php?err=0");
			}			
		}
	}
	elseif ($datos > 1) {
		print("Error al consultar la base de datos, contactar al Administrador");
	}
	elseif ($datos == 0){
		//print("El Usuaior no Existe");
		header("location: index.php?err=1");
	}




	//print($user);
	//print("<br>");
	//print($pass);




	print("<br>");
	print("<a href = index.php>Inicio</a> ");






?>