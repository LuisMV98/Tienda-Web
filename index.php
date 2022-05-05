<?php
  include 'templates/cabecera.php';
?>

<br>
<br>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src= "imagenes/frutas.jpg" class="d-block w-100" height="600px" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagenes/carnes.jpg" class="d-block w-100" height="600px" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagenes/colgate.jpg" class="d-block w-100" height="600px" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>

  <br>
  <br>
  <div class="card-group">
  <div class="card">
    <div class="card-body">
      <img src="imagenes/img1.jpg" class="card-img-top" alt="abarrotes bebos">
      <h5 class="card-title">Entrega el mismo día</h5>
      <p class="card-text">Quiero recibir mi súper y/o más productos con precios bajos para mi hogar el mismo día, en mi domicilio o recogerlos en mi Bebos más cercano</p>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <img src="imagenes/img2.jpg" class="card-img-top" alt="abarrotes bebos">
      <h5 class="card-title">Mas marcas y productos</h5>
      <p class="card-text">Haz tus compras y encuentra variedad y formas de pago, <b>Meses sin intereses y Envios sin costo </b> a toda la Republica Mexicana</p>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <img src="imagenes/índice.jpeg" class="card-img-top" alt="abarrotes bebos">
      <h5 class="card-title">Oferta en Vinos y Licores</h5>
      <p class="card-text">Encuentra las mejores ofertas en el departamento de vinos y licores (valido hasta agotar existencia)</p>
    </div>
  </div>
  </div>
</div>

<br>
<br>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/aviso1.jpeg" class="d-block w-100" height="100px"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagenes/aviso2.jpeg" class="d-block w-100" height="100px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagenes/colgate.webp" class="d-block w-100" height="100px" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>
<br>


<?php
  include 'templates/pie.php';
?>