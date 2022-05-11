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
            <input name="precio" type="hidden" id="precio" value="907" />
            <input name="titulo" type="hidden" id="titulo" value="Whisky Buchanan Deluxe" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

            <img src = "imagenes/Buchanans .jpeg">
            <div class="card-body">
              <p class="card-text">Whisky Buchanan's Deluxe 750 ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$907.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            
          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="285.00" />
            <input name="titulo" type="hidden" id="titulo" value="Johnnie Walker Red Label" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

            <img src = "imagenes/redLabel.jpeg">
            <div class="card-body">
              <p class="card-text">Whisky Johnnie Walker Red Label 700 ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$285.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="385.00" />
            <input name="titulo" type="hidden" id="titulo" value="Jose Cuervo Tradicional" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
            
            <img src = "imagenes/cuervo.jpeg">
            <div class="card-body">
              <p class="card-text">Tequila José Cuervo Tradicional Reposado 950ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$385.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="789.00" />
            <input name="titulo" type="hidden" id="titulo" value="Tequila Maestro Diamante" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

          <img src = "imagenes/diamante.jpeg">

            <div class="card-body">
              <p class="card-text">Tequila Maestro Dobel Diamante 700ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$789.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="436.00" />
            <input name="titulo" type="hidden" id="titulo" value="Tequila Hornitos Reposado" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
            
          <img src = "imagenes/hornitos.jpeg">
            <div class="card-body">
              <p class="card-text">Tequila Hornitos Reposado 1L.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$436.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="365.00" />
            <input name="titulo" type="hidden" id="titulo" value="Ron Bacardi Carta Blanca" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
            
          <img src = "imagenes/ron.jpeg">
            <div class="card-body">
              <p class="card-text">Ron Bacardi Carta Blanca 1.75L.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$365.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="989.00" />
            <input name="titulo" type="hidden" id="titulo" value="Johnnie Walker Black Label" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

          <img src = "imagenes/blackLabel.jpeg">

            <div class="card-body">
              <p class="card-text">Whisky Johnnie Walker Black Label 750 ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$989.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="1039" />
            <input name="titulo" type="hidden" id="titulo" value="Tequila don Julio Cristalino" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

          <img src = "imagenes/donJulio.jpeg">

            <div class="card-body">
              <p class="card-text">Tequila Don Julio 70 Cristalino 700 ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$1,039.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="192.00" />
            <input name="titulo" type="hidden" id="titulo" value="Cerveza corona Extra 12 pack" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
            
          <img src = "imagenes/corona.jpeg">
            <div class="card-body">
              <p class="card-text">Cerveza Corona Extra 12 Pack lata 355 ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$192.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="620" />
            <input name="titulo" type="hidden" id="titulo" value="Tequila don nacho Blanco" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

            <img src = "imagenes/donNacho.jpeg">

            <div class="card-body">
              <p class="card-text">Tequila Don Nacho Blanco Extra Premium 750ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$620.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="209" />
            <input name="titulo" type="hidden" id="titulo" value="Tequila Azul Baby mango" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
            
          <img src = "imagenes/babyMango.jpeg">
            <div class="card-body">
              <p class="card-text">Licor de Tequila Azul Baby Mango 750ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$209.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="399" />
            <input name="titulo" type="hidden" id="titulo" value="Vino Tinto Mexicano Guanamé Syrah" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
            
          <img src = "imagenes/vino.jpeg">
            <div class="card-body">
              <p class="card-text">Vino Tinto Mexicano Guanamé Syrah 750 ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$399.00</small>
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