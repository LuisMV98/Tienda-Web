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
            <img src="imagenes/cecinaderes.png" alt="Se muestra imagen de cecina de res.">

            <div class="card-body">
              <p class="card-text">Carne Parrillera prepara en casa una deliciosa parrillada ¡no te quedes con el antojo!.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$162.00 MX</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/arrachera.png" alt="Se muestra imagen de carne arrachera marinada.">

            <div class="card-body">
              <p class="card-text">Arrachera de Res Pulpa Marinada 500 gr. ¡No te quedes con el antojo!.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$80.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/albondigas.png" alt="Se muestra imagen de albóndigas.">

            <div class="card-body">
              <p class="card-text">Las albóndigas aportan vitaminas del grupo B. Aportan también ácido fólico</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$98.00 MX</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="imagenes/enchilada.png" alt="Se muestra imagen de carne enchilada.">
            <div class="card-body">
              <p class="card-text">Cecina Enchilada Cerdo Nutrí Carne 450g. ¡No te quedes con el antojo!.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$58.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/chorizoargentino.png" alt="Se muestra imagen de chorizo argentino.">

            <div class="card-body">
              <p class="card-text">Chorizo Argentino DCC por kg. ¡No te quedes con el antojo!.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$104.00 MX/KG</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/fileteres.png" alt="Se muestra imagen del producto filete de res.">
            <div class="card-body">
              <p class="card-text">Filete de Res empacado individual al vacío, facilita el almacenamiento y evita quemadura por congelación.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$264.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/ternera.png" alt="Se muestra imagenes de ternera Ossobuco.">
            <div class="card-body">
              <p class="card-text">Contiene minerales como el magnesio, cinc, fósforo, hierro y potasio.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$275.00 MX/KG</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/chuleta.png" alt="Se muestra imagen de producto chuleta de cerdo estilo ranchero.">
            <div class="card-body">
              <p class="card-text">Chuleta de Cerdo Estilo Ranchero kg. ¡No te quedes con el antojo!.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$120.00 MX/KG.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/tocino.png" alt="Se muestra imagen de tocino ahumado Bafar.">
            <div class="card-body">
              <p class="card-text">Ahumado natural y delicioso sabor..¡No te quedes con el antojo!.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$278.00 MX/KG</small>
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