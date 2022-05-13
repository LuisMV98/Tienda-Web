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
          <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="15" />
            <input name="titulo" type="hidden" id="titulo" value="Paste zarzamora" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>

            <div class="card-body">
              <p class="card-text">Paste elaborado con harina de trigo relleno con queso crema con mermelada de zarzamora.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <?php
                    require("botones_comprar_agregar.php");
                  ?>
                </div>
                <small class="text-muted">$15.00 MX</small>
              </div>
            </div>
            </form>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/pastepiña.png" alt="Se muestra imagen de paste de mermelada de piña.">
            <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="15" />
            <input name="titulo" type="hidden" id="titulo" value="Paste piña" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>

            <div class="card-body">
              <p class="card-text">Paste elaborado con harina de trigo relleno con mermelada de piña.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <?php
                    require("botones_comprar_agregar.php");
                  ?>
                </div>
                <small class="text-muted">$15.00 MX</small>
              </div>
            </div>
          </form>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/panrustico.png" alt="Se muestra imagen de pan rustico.">
            <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="30" />
            <input name="titulo" type="hidden" id="titulo" value="Pan trigo y centeno" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>
            <div class="card-body">
              <p class="card-text">Pan rústico elaborado con harina de trigo y centeno. ¡No te quedes con el antojo!</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <?php
                    require("botones_comprar_agregar.php");
                  ?>
                </div>
                <small class="text-muted">$30.00 MX</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/pandemaiz.png" alt="Se muestra imagen de pan de maiz.">
            <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="20" />
            <input name="titulo" type="hidden" id="titulo" value="Pan con pasas" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>

            <div class="card-body">
              <p class="card-text">Pan rústico elaborado con harina de trigo con pasas.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <?php
                    require("botones_comprar_agregar.php");
                  ?>
                </div>
                <small class="text-muted">"20.00 MX</small>
              </div>
            </div>
            </form>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/panmulticereales.png" alt="Se muestra imagen de pan multicereal.">
            <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="30" />
            <input name="titulo" type="hidden" id="titulo" value="Pan con semillas" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>
            <div class="card-body">
              <p class="card-text">Pan rústico elaborado con harina de trigo con semillas tostadas.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <?php
                    require("botones_comprar_agregar.php");
                  ?>
                </div>
                <small class="text-muted">$30.00 MX</small>
              </div>
            </div>
            </form>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/bolillo.png" alt="Se muestra imagen del producto bolillo.">
            <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="5" />
            <input name="titulo" type="hidden" id="titulo" value="Pan trigo y salvado" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>

            <div class="card-body">
              <p class="card-text">Pan tradicional elaborado con harina de trigo y salvado.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <?php
                    require("botones_comprar_agregar.php");
                  ?>
                </div>
                <small class="text-muted">$5.00 MX</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/panque.png" alt="Se muestra imagen del panque de elote sin gluten.">
            <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="23" />
            <input name="titulo" type="hidden" id="titulo" value="Pan dulce" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>

            <div class="card-body">
              <p class="card-text">Pan dulce elaborado con harina de arroz, leche condensada y granos de elote</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <?php
                    require("botones_comprar_agregar.php");
                  ?>
                </div>
                <small class="text-muted">$23.00 MX</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/pansingluten.png" alt="Se muestra imagen del producto pan sin gluten.">
            <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="23" />
            <input name="titulo" type="hidden" id="titulo" value="Mantecada" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>
            <div class="card-body">
              <p class="card-text">Mantecada de vainilla. Pan dulce, auténtico sabor.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <?php
                    require("botones_comprar_agregar.php");
                  ?>
                </div>
                <small class="text-muted">$23.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/panbagel.png" alt="Se muestra imagen del pan bagel.">
            <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="80" />
            <input name="titulo" type="hidden" id="titulo" value="Bagel" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>

            <div class="card-body">
              <p class="card-text">El mismo delicioso sabor y consistencia de nuestros Bagels ahora en tamaño mini.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <?php
                    require("botones_comprar_agregar.php");
                  ?>
                </div>
                <small class="text-muted">$80.00 MX</small>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/concha.png" alt="Se muestra imagen del producto pan concha premium.">
            <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="12" />
            <input name="titulo" type="hidden" id="titulo" value="Concha premium" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>

            <div class="card-body">
              <p class="card-text">Concha Premium tradicional con té de matcha natural.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <?php
                    require("botones_comprar_agregar.php");
                  ?>
                </div>
                <small class="text-muted">$12.00 MX</small>
              </div>
            </div>
            </form>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/mantecada.png" alt="Se muestra imagen de pan mantecada de vainilla.">
            <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="10" />
            <input name="titulo" type="hidden" id="titulo" value="Pan vainilla" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>
            <div class="card-body">
              <p class="card-text">Pan dulce elaborado con batido de cream cake de vainilla.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <?php
                    require("botones_comprar_agregar.php");
                  ?>
                </div>
                <small class="text-muted">$10.00 MX</small>
              </div>
            </div>
          </form>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/tartaleta.png" alt="Se muestra imagen del producto tartaleta de durazno.">
            <form id="formulario" name="formulario" method="post" action="templates/cart.php">
            <input name="precio" type="hidden" id="precio" value="10" />
            <input name="titulo" type="hidden" id="titulo" value="Bisquet premium" />
            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>
            <div class="card-body">
            <p class="card-text">Bisquet Premium tradicional. ¡No te quedes con el antojo!</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              <?php
                    require("botones_comprar_agregar.php");
                  ?>
                </div>
                <small class="text-muted">$10.00 MX</small>
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