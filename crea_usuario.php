<?php
  include 'templates/cabecera2.php';
?>
    
<!DOCTYPE html>
<html>
		
	<head>
		<meta charset="utf-8">	
		<title>Los bebos | Crear usuario</title>
		<meta name="vieport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="css/loginBebos.css">
	</head>

	<body>
        <div align="center" class="wrapper">
            <div id="formContentLog">
                <form action="registrar.php" method="post">
                    <div>
                        <span  class="CrearUs">Nombre: </span>
                        <input type="text" name="nombre" placeholder="Nombre"><br><br>
                    </div>
                    <div>
                        <span  class="CrearUs">Dirección: </span>
                        <input type="text" name="direccion" placeholder="Direccion"><br><br>
                    </div>
                    <div>
                        <span  class="CrearUs">No. de tarjeta: </span>
                        <input type="text" name="tarjeta" placeholder="Tarjeta"><br><br>
                    </div>
                    <div>
                        <span  class="CrearUs">Correo electrónico: </span>
                        <input type="email" name="correo" placeholder="Correo"><br><br>
                    </div>
                    <div>
                        <span  class="CrearUs">Contraseña: </span>
                        <input type="password" name="contra" placeholder="Contraseña"><br><br>
                    </div>
                    <input type="submit" value="Crear usuario">
                </form>
            </div>
        </div>

        <br><br><br><br><br><br>
	</body>
</html>


<?php
  include 'templates/pie.php';
?>