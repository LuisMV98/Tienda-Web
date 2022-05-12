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
            <input name="precio" type="hidden" id="precio" value="26.00" />
            <input name="titulo" type="hidden" id="titulo" value="Alpura deslactosada 1L" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

          <img src = "imagenes/lecheAlpura.jpeg">

            <div class="card-body">
              <p class="card-text">Leche Alpura Deslactosada 1L</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <button type="button" class="btn btn-sm botonComprar" data-bs-toggle="modal" data-bs-target="#compraRealizada">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$26.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="27.50" />
            <input name="titulo" type="hidden" id="titulo" value="Santa Clara Entera 1L" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

              <img src = "imagenes/lecheSantaClara.jpeg">
              <div class="card-body">
              <p class="card-text">Leche UHT Santa Clara Entera 1L.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <button type="button" class="btn btn-sm botonComprar" data-bs-toggle="modal" data-bs-target="#compraRealizada">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$27.50</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

            <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="28.50" />
            <input name="titulo" type="hidden" id="titulo" value="Santa Clara deslactosada 1L" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

            <img src = "imagenes/SantaClaraD.jpeg">

            <div class="card-body">
              <p class="card-text">Leche UHT Santa Clara Deslactosada 1L.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <button type="button" class="btn btn-sm botonComprar" data-bs-toggle="modal" data-bs-target="#compraRealizada">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$28.50</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="32.50" />
            <input name="titulo" type="hidden" id="titulo" value="Lala sin lactosa proteina" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

            <img src = "imagenes/lechelala.jpeg">

            <div class="card-body">
              <p class="card-text">Leche Lala 100 Sin Lactosa Proteina Ligth 1L.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <button type="button" class="btn btn-sm botonComprar" data-bs-toggle="modal" data-bs-target="#compraRealizada">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$32.50</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="24.90" />
            <input name="titulo" type="hidden" id="titulo" value="Lala deslactosada baja en grasa 1L" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
            <img src = "imagenes/bajaGrasa.jpeg">

            <div class="card-body">
              <p class="card-text">Leche  Lala Deslactosada baja en grasa 1L.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <button type="button" class="btn btn-sm botonComprar" data-bs-toggle="modal" data-bs-target="#compraRealizada">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$24.90</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="18.80" />
            <input name="titulo" type="hidden" id="titulo" value="Nutri Ultrapasteurizado Deslactosado 1L" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

          <img src = "imagenes/nutrileche.jpeg">

            <div class="card-body">
              <p class="card-text">Producto Lacteo NUtri Ultrapasteurizado Deslactosada 1L.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <button type="button" class="btn btn-sm botonComprar" data-bs-toggle="modal" data-bs-target="#compraRealizada">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$18.80</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="10.00" />
            <input name="titulo" type="hidden" id="titulo" value="Margarina Pasteurizada con sal norteñita" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

          <img src = "imagenes/margarina.jpeg">

            <div class="card-body">
              <p class="card-text">Margarina Pasteurizada con Sal Norteñita.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <button type="button" class="btn btn-sm botonComprar" data-bs-toggle="modal" data-bs-target="#compraRealizada">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$10.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="47.00" />
            <input name="titulo" type="hidden" id="titulo" value="Queso Ranchero San Roque" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

          <img src = "imagenes/queso.jpeg">

            <div class="card-body">
              <p class="card-text">Queso Ranchero Sn Roque 300g.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <button type="button" class="btn btn-sm botonComprar" data-bs-toggle="modal" data-bs-target="#compraRealizada">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$47.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="47.60" />
            <input name="titulo" type="hidden" id="titulo" value="Yoplait Light 1kg de Fresa" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

           <img src = "imagenes/yogurt.jpeg">

            <div class="card-body">
              <p class="card-text">Yogurt Bat Yoplait Light 1kg de Fresa.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <button type="button" class="btn btn-sm botonComprar" data-bs-toggle="modal" data-bs-target="#compraRealizada">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$47.60</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="15" />
            <input name="titulo" type="hidden" id="titulo" value="Leche Yaqui chocolate" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
       
          <img src = "imagenes/lecheChocolate.jpeg">
            <div class="card-body">
              <p class="card-text">Leche Yaqui con chocolate 474L .</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <button type="button" class="btn btn-sm botonComprar" data-bs-toggle="modal" data-bs-target="#compraRealizada">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$15.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="51.00" />
            <input name="titulo" type="hidden" id="titulo" value="Queso Panela la antigua hacienda" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

          <img src = "imagenes/panela.jpeg">

            <div class="card-body">
              <p class="card-text">Queso La antigua Hacienda Panela 400g.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <button type="button" class="btn btn-sm botonComprar" data-bs-toggle="modal" data-bs-target="#compraRealizada">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$51.00</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">

          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="135.90" />
            <input name="titulo" type="hidden" id="titulo" value="Quesillo la colorada artesanal" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

          <img src = "imagenes/quesillo.jpeg">

            <div class="card-body">
              <p class="card-text">Quesillo Genuino la colorada artesanal 740g.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <button type="button" class="btn btn-sm botonComprar" data-bs-toggle="modal" data-bs-target="#compraRealizada">Comprar ahora</button>
                  <button type="button submit" class="btn btn-sm botonCarrito">Agregar al carrito</button>
                </div>
                <small class="text-muted">$135.90</small>
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