<?php
    if(isset($_SESSION['correous'])){
        print("<button type='button' class='btn btn-sm botonComprar' data-bs-toggle='modal' data-bs-target='#compraRealizada'>Comprar ahora</button>");
        print("<button type='button submit' class='btn btn-sm botonCarrito'>Agregar al carrito</button>");
    }else{
        print("<a href='login_error.php?err=3'><button type='button' class='btn btn-sm botonComprar'>Comprar ahora</button></a>");
        print("<a href='login_error.php?err=3'><button type='button' class='btn btn-sm botonCarrito'>Agregar al carrito</button></a>");
    }
?>