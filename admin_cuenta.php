<?php
  include 'templates/cabecera2.php';
  session_start();
  if(isset($_SESSION['nomb'])){
    $nom = $_SESSION['nomb'];
    $corr= $_SESSION['correous'];
    $dir = $_SESSION['dire'];
    $tar = $_SESSION['tarj'];
  }
?>
    
<!DOCTYPE html>
<html>
		
	<head>
		<meta charset="utf-8">	
		<title>Los bebos | Cuenta</title>
		<meta name="vieport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="css/loginBebos.css?ts=<?=time()?>">
	</head>

	<body>
        <br>
        <div align="center">
            <div align="center" class="wrapper borde">
                <div id="formContentLog">
                    <form action="actualizar.php" method="post">
                        <div>
                            <span  class="CrearUs">Nombre: </span>
                            <?php print("<input type='text' name='nombre' value='$nom'><br><br>"); ?>
                        </div>
                        <div>
                            <span  class="CrearUs">Dirección: </span>
                            <?php print("<input type='text' name='direccion' value='$dir'><br><br>"); ?>
                        </div>
                        <div>
                            <span  class="CrearUs">No. de tarjeta: </span>
                            <?php print("<input type='text' name='tarjeta' value='$tar'><br><br>"); ?>
                        </div>
                        <div>
                            <span  class="CrearUs">Correo electrónico: </span>
                            <?php print("<input type='email' name='correo' value='$corr'><br><br>"); ?>
                        </div>
                        <?php
                            if(isset($_REQUEST['conf']))
                            {
                                print("<div class='alert alert-success'>");
                                $conf = $_REQUEST['conf'];
                                if($conf==1)
                                {
                                    print("Cambios Guardados.");
                                }
                                print("</div>");
                            }else{
                                print("<button type='submit' class='btn boton_cambios'>Aplicar Cambios</button><br><br>");
                            }
                        ?>	
                    </form>

                    <button type="button" class="btn boton_cerrar" onclick="location.href='cerrar_sesion.php'">Cerrar Sesión</button><br><br>
                    
                    <?php
                        if(isset($_REQUEST['conf']))
                        {
                            $conf = $_REQUEST['conf'];
                            if($conf==1)
                            {
                                print("<a href='index.php'><button type='submit' class='btn boton_regresar'>REGRESAR A INICIO</button><br><br></a>");
                            }
                        }
                    ?>
                </div>
            </div>
        </div>

        <br><br><br><br><br><br>
	</body>
</html>


<?php
  include 'templates/pie.php';
?>