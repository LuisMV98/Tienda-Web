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
          <img src="imagenes/pastezarzamora.png" alt="Se muestra imagen de queso con zarzamora.">

            <div class="card-body">
              <p class="card-text">Paste elaborado con harina de trigo relleno con queso crema con mermelada de zarzamora.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$15.00 MX</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/pastepiña.png" alt="Se muestra imagen de paste de mermelada de piña.">

            <div class="card-body">
              <p class="card-text">Paste elaborado con harina de trigo relleno con mermelada de piña.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$15.00 MX</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/panrustico.png" alt="Se muestra imagen de pan rustico.">
            <div class="card-body">
              <p class="card-text">Pan rústico elaborado con harina de trigo y centeno. ¡No te quedes con el antojo!</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$30.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/pandemaiz.png" alt="Se muestra imagen de pan de maiz.">

            <div class="card-body">
              <p class="card-text">Pan rústico elaborado con harina de trigo con pasas.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">"20.00 MX</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/panmulticereales.png" alt="Se muestra imagen de pan multicereal.">
            <div class="card-body">
              <p class="card-text">Pan rústico elaborado con harina de trigo con semillas tostadas.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$30.00 MX</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/bolillo.png" alt="Se muestra imagen del producto bolillo.">

            <div class="card-body">
              <p class="card-text">Pan tradicional elaborado con harina de trigo y salvado.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$5.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/panque.png" alt="Se muestra imagen del panque de elote sin gluten.">

            <div class="card-body">
              <p class="card-text">Pan dulce elaborado con harina de arroz, leche condensada y granos de elote</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$23.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/pansingluten.png" alt="Se muestra imagen del producto pan sin gluten.">
            <div class="card-body">
              <p class="card-text">Pan dulce elaborado con harina de arroz, leche condensada y granos de elote.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$23.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/panbagel.png" alt="Se muestra imagen del pan bagel.">

            <div class="card-body">
              <p class="card-text">El mismo delicioso sabor y consistencia de nuestros Bagels ahora en tamaño mini.</p>
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
            <img src="imagenes/concha.png" alt="Se muestra imagen del producto pan concha premium.">

            <div class="card-body">
              <p class="card-text">Concha Premium tradicional con té de matcha natural.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$12.00 MX</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/mantecada.png" alt="Se muestra imagen de pan mantecada de vainilla.">
            <div class="card-body">
              <p class="card-text">Pan dulce elaborado con batido de cream cake de vainilla.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/tartaleta.png" alt="Se muestra imagen del producto tartaleta de durazno.">
            <div class="card-body">
              <p class="card-text">Concha Premium tradicional con té de matcha natural.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$10.00 MX</small>
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