<?php
	session_start();
	session_destroy();
  include 'templates/cabecera2.php';
?>
    
<!DOCTYPE html>
<html>
		
	<head>
		<meta charset="utf-8">	
		<title>Los bebos | Inicio de sesión</title>
		<meta name="vieport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="css/loginBebos.css">
	</head>

	<body>
        <div align="center" class="wrapper">
            <div id="formContentLog">
                <!-- Icon -->
                <div>
                    <br>
                    <img src="imagenes/login.jpg" class="img_logo">
                    <br>
                    <span  class="titulo-cont2">Iniciar sesión:</span>
                </div>
                <br>
        
                <!-- Login Form -->
                <form action="validar.php" method="post">
                    <input type="email" name="correo" placeholder="Correo"><br><br>
                    <input type="password" name="contra" placeholder="Contraseña"><br><br>
                    <div class="mb-3">
                        <div>
                            <?php
                                $err = $_REQUEST['err'];
                                if($err == 0)
                                {
                                    print("<div class='alert alert-danger'>La contraseña es incorrecta</div>");
                                }
                                elseif ($err == 1) 
                                {
                                    print("<div class='alert alert-danger'>El usuario no existe</div>");
                                }
                                elseif ($err == 3) 
                                {
                                    print("<div class='alert alert-info'>Para poder comprar o agregar al carrito debe de iniciar sesión</div>");
                                }
                            ?>
                        </div>								
                    </div>
                    <input type="submit" value="Ingresar">
                    <!--
                    <p>OR</p>
                    <img src="img/facebook-logo.png" class="logoface">
                    <input type="submit" value="Login via facebook">
                    -->
                </form>
        
                <!-- Remind Passowrd -->
                <div id="formFooter">
                <span>
                    <b>¿No tiene una cuenta? </b> <a href="crea_usuario.php">Crear cuenta...</a><br>
                    <a href="#">¿Olvidó su contraseña?</a>
                </span>
                </div>
        
            </div>
        </div>

        <br><br><br><br><br><br>
	</body>
</html>


<?php
  include 'templates/pie.php';
?>