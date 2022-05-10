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
          <img src = "imagenes/sandia.jpg"> 
            <div class="card-body">
              <p class="card-text">Sandia Blanca Rayada por Kg. </p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button" class="btn btn-sm botonSecundario">Agregar al carrito</button>
                </div>
                <small class="text-muted">$16.00/kg</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src = "imagenes/jicama.jpeg">
            <div class="card-body">
              <p class="card-text">Jícama por Kg. Refrescante y ligera </p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button" class="btn btn-sm botonSecundario">Agregar al carrito</button>
                </div>
                <small class="text-muted">$21.50/kg</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src = "imagenes/uva.jpeg">

            <div class="card-body">
              <p class="card-text">Uva Negra Domo 908g. </p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button" class="btn btn-sm botonSecundario">Agregar al carrito</button>
                </div>
                <small class="text-muted">$44.90</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src = "imagenes/papa.jpeg">

            <div class="card-body">
              <p class="card-text">Papa Campo Vivo Orgánica 1kg</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button" class="btn btn-sm botonSecundario">Agregar al carrito</button>
                </div>
                <small class="text-muted">$56.90</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src = "imagenes/jitomate.jpeg">

            <div class="card-body">
              <p class="card-text">Tomate Racimo Organico 300g.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button" class="btn btn-sm botonSecundario">Agregar al carrito</button>
                </div>
                <small class="text-muted">$44.90</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src = "imagenes/kiwi.jpeg">

            <div class="card-body">
              <p class="card-text">Kiwi Chumis 450g.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button" class="btn btn-sm botonSecundario">Agregar al carrito</button>
                </div>
                <small class="text-muted">$53.90</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            
            <img src = "imagenes/naranja.jpeg">
            <div class="card-body">
              <p class="card-text">Naranja campo vivo organica 2kg.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button" class="btn btn-sm botonSecundario">Agregar al carrito</button>
                </div>
                <small class="text-muted">$46.90</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src = "imagenes/lechuga.jpeg">

            <div class="card-body">
              <p class="card-text">Lechuga mini romana 2 piezas</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button" class="btn btn-sm botonSecundario">Agregar al carrito</button>
                </div>
                <small class="text-muted">$39.90</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src = "imagenes/cebolla.jpeg">

            <div class="card-body">
              <p class="card-text">Cebolla morada organica bolsa 700g</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button" class="btn btn-sm botonSecundario">Agregar al carrito</button>
                </div>
                <small class="text-muted">$52.14</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src = "imagenes/flores.jpeg">

            <div class="card-body">
              <p class="card-text">Flores comestibles carborganic 20g</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button" class="btn btn-sm botonSecundario">Agregar al carrito</button>
                </div>
                <small class="text-muted">$85.00</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            
          <img src = "imagenes/manzana.jpeg">
            <div class="card-body">
              <p class="card-text">Manzana pure Harvest golden 600g</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button" class="btn btn-sm botonSecundario">Agregar al carrito</button>
                </div>
                <small class="text-muted">$56.00s</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            
          <img src = "imagenes/aguacate.jpeg">
            <div class="card-body">
              <p class="card-text">Aguacate Hass Enmallado Pieza</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                 <button type="button" class="btn btn-sm btn-primary">Comprar ahora</button>
                  <button type="button" class="btn btn-sm botonSecundario">Agregar al carrito</button>
                </div>
                <small class="text-muted">$59.00</small>
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