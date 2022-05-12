<?php
  session_start();
	if(isset($_SESSION['correous'])){
    include 'templates/cabecera_usuario.php';
  }else{
    include 'templates/cabecera.php';
  }
?>

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm">
            
          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="16" />
            <input name="titulo" type="hidden" id="titulo" value="sandia" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

            <img src = "imagenes/sandia.jpg"> 
            <div class="card-body">
              <p class="card-text">Sandia Blanca Rayada por Kg. </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm botonComprar" data-bs-toggle="modal" data-bs-target="#compraRealizada">Comprar ahora</button>
                    <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$16.00/kg</small>
              </div>
            </div>
          </form>
          </div>
        </div>
       

        <div class="col">
          <div class="card shadow-sm">

            <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="21.50" />
            <input name="titulo" type="hidden" id="titulo" value="Jícama" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

            <img src = "imagenes/jicama.jpeg">
            <div class="card-body">
              <p class="card-text">Jícama por Kg. Refrescante y ligera </p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$21.50/kg</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

            <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="44.90" />
            <input name="titulo" type="hidden" id="titulo" value="Uva Negra" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
            <img src = "imagenes/uva.jpeg">

            <div class="card-body">
              <p class="card-text">Uva Negra Domo 908g. </p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$44.90</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="56.90" />
            <input name="titulo" type="hidden" id="titulo" value="Papa campo  vivo" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

            <img src = "imagenes/papa.jpeg">

            <div class="card-body">
              <p class="card-text">Papa Campo Vivo Orgánica 1kg</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$56.90</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

            <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="44.90" />
            <input name="titulo" type="hidden" id="titulo" value="Tomate organico" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

            <img src = "imagenes/jitomate.jpeg">

            <div class="card-body">
              <p class="card-text">Tomate Racimo Organico 300g.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$44.90</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="53.90" />
            <input name="titulo" type="hidden" id="titulo" value="Kiwi Chumis" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

            <img src = "imagenes/kiwi.jpeg">

            <div class="card-body">
              <p class="card-text">Kiwi Chumis 450g.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$53.90</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            
          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="46.90" />
            <input name="titulo" type="hidden" id="titulo" value="Naranja Campo vivo" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

            <img src = "imagenes/naranja.jpeg">
            <div class="card-body">
              <p class="card-text">Naranja campo vivo organica 2kg.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$46.90</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="39.90" />
            <input name="titulo" type="hidden" id="titulo" value="Lechuga mini romana" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
          <img src = "imagenes/lechuga.jpeg">

            <div class="card-body">
              <p class="card-text">Lechuga mini romana 2 piezas</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$39.90</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="52.14" />
            <input name="titulo" type="hidden" id="titulo" value="Cebolla morada" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

          <img src = "imagenes/cebolla.jpeg">

            <div class="card-body">
              <p class="card-text">Cebolla morada organica bolsa 700g</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$52.14</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="85" />
            <input name="titulo" type="hidden" id="titulo" value="Flores comestibles" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

          <img src = "imagenes/flores.jpeg">

            <div class="card-body">
              <p class="card-text">Flores comestibles carborganic 20g</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$85.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="56.00" />
            <input name="titulo" type="hidden" id="titulo" value="Manzana golden" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
            
          <img src = "imagenes/manzana.jpeg">
            <div class="card-body">
              <p class="card-text">Manzana pure Harvest golden 600g</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$56.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="59.00" />
            <input name="titulo" type="hidden" id="titulo" value="Aguacate Hass" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
            
          <img src = "imagenes/aguacate.jpeg">
            <div class="card-body">
              <p class="card-text">Aguacate Hass Enmallado Pieza</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                 <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$59.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
  include 'templates/pie.php';
?>