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
            
            <img src = "imgenes/Buchanans.jpeg">
            <div class="card-body">
              <p class="card-text">Whisky Buchanan's Deluxe 750 ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$907.00</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            
            <img src = "imgenes/redLabel.jpeg">
            <div class="card-body">
              <p class="card-text">Whisky Johnnie Walker Red Label 700 ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$285.00</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            
            <img src = "imgenes/cuervo.jpeg">
            <div class="card-body">
              <p class="card-text">Tequila José Cuervo Tradicional Reposado 950ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$385.00</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src = "imgenes/diamante.jpeg">

            <div class="card-body">
              <p class="card-text">Tequila Maestro Dobel Diamante 700ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$789.00</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            
          <img src = "imgenes/hornitos.jpeg">
            <div class="card-body">
              <p class="card-text">Tequila Hornitos Reposado 1L.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$436.00</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            
          <img src = "imgenes/ron.jpeg">
            <div class="card-body">
              <p class="card-text">Ron Bacardi Carta Blanca 1.75L.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$365.00</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src = "imgenes/blackLabel.jpeg">

            <div class="card-body">
              <p class="card-text">Whisky Johnnie Walker Black Label 750 ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$989.00</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src = "imgenes/donJulio.jpeg">

            <div class="card-body">
              <p class="card-text">Tequila Don Julio 70 Cristalino 700 ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$1,039.00</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            
          <img src = "imgenes/corona.jpeg">
            <div class="card-body">
              <p class="card-text">Cerveza Corona Extra 12 Pack lata 355 ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$192.00</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src = "imgenes/donNacho.jpeg">

            <div class="card-body">
              <p class="card-text">Tequila Don Nacho Blanco Extra Premium 750ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$620.00</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            
          <img src = "imgenes/babyMango.jpeg">
            <div class="card-body">
              <p class="card-text">Licor de Tequila Azul Baby Mango 750ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$209.00</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            
          <img src = "imgenes/vino.jpeg">
            <div class="card-body">
              <p class="card-text">Vino Tinto Mexicano Guanamé Syrah 750 ml.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$399.00</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
  include 'templates/pie.php';
?>