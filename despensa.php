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
            <img src="imagenes/chocolate.png" alt="Imagen de Chococoa.">

            <div class="card-body">
                <p class="card-text">Disfruta de un rico chocolate de mesa con sabor a tradición, prepáralo de la manera tradicional 
                  con molinillo o pruébalo en modo express en licuadora. Dale un gusto a tu antojo cargado de energía y sabor con esta presentación de Chococoa.</p>
                <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
        
                <small class="text-muted">$50.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="imagenes/cremadealmendra.png" alt="Se muestra Crema de almendra Morama.">
            <div class="card-body">
              <p class="card-text">La crema de almendra MORAMA está hecha solamente con un ingrediente, es 100% almendra. Es una fuente energía ideal para incluir en tu dieta. La almendra es 
                una increíble proteína para niños, jóvenes y deportistas.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$159.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/bisquet.png" alt="Se muestra el paquete de bisquets integrales La fuente.">
            <div class="card-body">
              <p class="card-text">Cuida tu alimentación diariamente con bisquets de La Fuente. Es nutritivo y saludable. Su consumo favorece la digestión. y el control de peso. 
              Complementa tu bisquet de harina integral con nuestros productos para el cuidado de la salud.
              </p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$38.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/aceite.png" alt="Imagen de aceite de soya Selecto.">
            <div class="card-body">
              <p class="card-text">Selecto es un aceite comestible de soya, fortificado con vitamina A y su propiedades provienen principalmente de la materia prima de primera calidad, 
                pasando por las etapas de refinado, blanqueado y desodorizado en condiciones higiénicas controladas, garantizando un aceite de alta calidad.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$45.00 MX</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
           <img src="imagenes/lechedealmendras.png" alt="Imagen del producto Silk: Avena sin azúcar.">
            <div class="card-body">
              <p class="card-text">Te levantaste con el pie derecho, con un antojo de algo dulce y elegiste Silk Avena Monk Fruit Sin AzúcarMenos de 32KCAL (Porción de 100mL): Puede ayudarte 
                a llevar una dieta balanceada y una vida más saludable. Apto para: Intolerantes a la lactosa y para veganos. Marca	Silk</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$52.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/avena.png" alt="Se muestra la Avena Quaker Super Foods.">

            <div class="card-body">
              <p class="card-text">La avena instantánea Quaker te aporta fibra, por lo que es perfecto para mejorar los procesos digestivos. Además esta adicionada con Beta-Q , un compuesto que fortalece el sistema inmune. 
              Solo en Sam's Club encontrarás una amplia variedad de artículos de abarrotes por mayoreo perfectos para tu hogar o negocio. </p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$105.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="imagenes/arroz.png" alt="Se muestra arroz integral SOS.">
            <div class="card-body">
              <p class="card-text">El arroz integral es un producto al que se le elimina la cáscara exterior y conserva sus capas de salvado, en donde se encuentra la mayor parte de la fibra, proteínas, minerales
                y vitaminas del arroz. Es un producto que nos ayuda en nuestra alimentación por su alto contenido en fibra.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$33.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="imagenes/sal.png" alt="Se muestra producto Sal Rosa Altamar del Himalaya.">
            <div class="card-body">
              <p class="card-text">El arroz integral es un producto al que se le elimina la cáscara exterior y conserva sus capas de salvado, en donde se encuentra la mayor parte de la fibra, proteínas, minerales 
              y vitaminas del arroz. Es un producto que nos ayuda en nuestra alimentación por su alto contenido en fibra.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$155.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="imagenes/huevo.png" alt="Se muestra producto claras de huevo">

            <div class="card-body">
              <p class="card-text">Para que mantengas una dieta saludable, San Juan te proporciona claras de huevo sin aditivos, ideales para utilizar en tus diferentes recetas de cocina, como omeletts, mousses y una gran 
                variedad de platillos. Este producto está libre de conservadores, es 100% natural, está pasteurizado y puede ser parte de tu dieta baja en grasa, ya que está libre de ella.</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$41.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="imagenes/cereal.png" alt="Se muestra cereal Fitness Canela Chai.">

            <div class="card-body">
              <p class="card-text">Agrega sabor y energía a tus mañanas con el NUEVO FITNESS CANELA CHAI. Disfruta del sabor de su mezcla de especias: Canela, Jengibre, Cardamomo y Nuez moscada ¡Sabor que deleita y activa tus 
              sentidos! Pruébalo como parte de un desayuno balanceado con leche, fruta fresca o incluso yogurt y granola. ¡Motívate y disfruta de una vida activa!</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$53.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="imagenes/garbanzo.png" alt="Se muestra imagen del producto Garbanzos marca Bueno.">

            <div class="card-body">
              <p class="card-text">Garbanzo Calidad Bueno lleva a tu mesa lo mejor de la cosecha mexicana para que disfrutes las bondades de esta legumbre con gran contenido en vitaminas, 
              minerales, fibra y proteína vegetal. Calidad Bueno lleva a tu mesa frescura, lo mejor de las cosechas de esta legumbre para que obtengas los múltiples beneficios que esta te brinda</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$25.00 MX</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="imagenes/barras.png" alt="Se muestra imagen de barras marca Special K.">

            <div class="card-body">
              <p class="card-text">Estas deliciosas barritas de cereal están hechas con cacahuates, almendras, arroz inflado y avena. Tienen también trocitos sabor a chocolate y base sabor chocolate oscuro. Además, no contienen 
                colorantes ni saborizantes artificiales y están diseñadas con nutrientes esenciales como vitaminas A, D, B12, C, E , ácido fólico y calcio. </p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Comprar ahora</button>
                  <button type="button" class="btn btn-sm btn btn-warning">Agregar al carrito</button>
                </div>
                <small class="text-muted">$38.00 MX</small>
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