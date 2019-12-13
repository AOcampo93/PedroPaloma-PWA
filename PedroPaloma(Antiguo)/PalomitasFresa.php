<?php
session_start();
$_SESSION["producto"] = "Palomitas de Fresa";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Styles.css">

    <!-- favion  -->
     <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="favion/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
     <meta name="msapplication-TileColor" content="#00a300">
     <meta name="theme-color" content="#ffffff">

    <title>PedroPaloma | Producto</title>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a href="index.html">
        <img class="img-fluid Logo" src="images/Logo.png" alt="PedroPaloma">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#" class="btn btn-primary" data-toggle="modal" data-target="#ComoFunciona">Cómo Funciona</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Catálogo</a>
          </li>
          <li class="nav-item paddingRight">
            <a class="nav-link" href="contacto.html">Contácto</a>
          </li>
          <li class="nav-item paddingRight">
            <a class="nav-link" href="distribucion.html">Lugares de Reparto</a>
          </li>
          <li class="nav-item linea">
            <a class="nav-link" href="Eventos.html">Para Eventos</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row margin-top">
        <div class="col-12 col-md-2"></div>
        <div class="col-12 col-md-4">
          <a href="index.html">
            <img class="img-fluid imgProducto" src="images/Producto-PalomitasFresa.png" alt="imagen de producto">
          </a>
        </div>
        <div class="col-12 col-md-4 padding-Mobile">
          <h2 class="TitulosProducto">Palomitas de Fresa</h2>
          <p class="DetallesProducto">Bolsa de palomitas endulzadas con nuestro catalogo de ingredientes. Escoge el sabor que mejor te agrade y disfruta el sabor que te encanta en unas palomitas.</p>
          <h3 class="Precio">$ 20.00</h3>
          <!--Formulario-->
          <form class="" action="Enviador-PalomitasFresa.php" method="post" onsubmit="return validador()">
            <div class="row">
              <input class="input" id="Nombre" type="text" name="nombre" placeholder="Nombre de quien recoge">
            </div>
            <div class="row">
              <select name="horario" id="Horario">
                <option value="">Selecciona un horario</option>
                <option value="3:00pm">3:00 pm</option>
                <option value="4:00pm">4:00 pm</option>
              </select>
              <div class="col-12 col-md-12 terminos-box">
                <input id="checkBox" name="checkBox" type="checkbox">
                <p class="smallText">Acepto los términos y condiciones del servicio <span><a href="#" data-toggle="modal" data-target="#TerminosCondiciones">Ver aquí</a></span></p>
              </div>
              <div class="col-12 col-md-12 btn-cont">
                <input class="btn-doble btn btn-primary" type="submit" name="bt1" value="Pagar con Debito & Credito">
              </div>
              <div class="col-12 col-md-12 btn-cont">
                <input class="btn-doble btn btn-primar" type="submit" name="bt2" value="Pagar con Efectivo & Tarjeta de Vales">
              </div>
            </div>
          </form>
        </div>
        <div class="col-12 col-md-2"></div>
      </div>
    </div>

    <!-- Footer -->
    	<section id="footer">
    		<div class="container">
    			<div class="row text-center text-xs-center text-sm-left text-md-left">
    				<div class="col-xs-12 col-sm-4 col-md-4">
    					<<img class="img-fluid" src="images/Logo.png" alt="Logo Footer">
    				</div>
    				<div class="col-xs-12 col-sm-4 col-md-4">
    					<h5>Conócenos</h5>
    					<ul class="list-unstyled quick-links">
    						<li><a href="#" data-toggle="modal" data-target="#ComoFunciona"><i class="fa fa-angle-double-right"></i>Como funciona</a></li>
    						<li><a href="index.html"><i class="fa fa-angle-double-right"></i>Catálogo</a></li>
    						<li><a href="contacto.html"><i class="fa fa-angle-double-right"></i>Contáctanos</a></li>
                <li><a href="distribucion.html"><i class="fa fa-angle-double-right"></i>Lugares de Reparto</a></li>
    					</ul>
    				</div>
    				<div class="col-xs-12 col-sm-4 col-md-4">
    					<h5>Eventos</h5>
    					<ul class="list-unstyled quick-links">
    						<li><a href="Eventos.html"><i class="fa fa-angle-double-right"></i>Háblanos de tu evento</a></li>
                <li><a href="#" data-toggle="modal" data-target="#Terminos"><i class="fa fa-angle-double-right"></i>Ver Términos y Condiciones</a></li>
    					</ul>
    				</div>
    			</div>
          <br>
          <br>
    			<div class="row">
    				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
    					<p><u><a href="index.html">PedroPaloma </a></u>es un sitio dedicado a venta de productos alimenticios por pedido.</p>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- ./Footer -->

      <!-- Modal Como funciona -->
    <div class="modal fade" id="ComoFunciona" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Cómo funciona</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <iframe width="100%" height="250px" src="https://www.youtube.com/embed/6uqvgPm8U4c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar ventana</button>
        </div>
      </div>
    </div>

    <!--MODAL | Términos y condiciones-->
    <div class="modal fade" id="TerminosCondiciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3>Términos y Condiciones</h3>
            <p>
              <span class="italic">Pedropaloma.com </span>es un negocio electrónico dedicado a la venta de alimentos por pedido. Existen 2 opciones en la plataforma, el pedido individual y el pedido para eventos (Pedido por volumen), en breve explicaremos los términos del servicio.<br>
              <span class="bold">Pedido individual.</span><br>
              Los pedidos individuales aplican por ahora a los empleados de AMEX patriotismo, el lugar de entrega puede variar dependiendo la demanda, usando como punto central la calle Pablo Ucello No. 33 en la reja trasera de American Express. El método de pedido es bastante simple, se debe ingresar a la pagina de pedropaloma.com para realizar cualquier pedido, escoger el producto y llenar los campos solicitados, donde existen 2 formas de pago. 1. A través de tarjeta de debito o crédito haciendo la transferencia por MercadoPago o pagar a la entrega del producto con efectivo o a través de una terminal bancaria portátil donde se puede pagar con vales y tarjetas participantes. Una vez creada o pagada la orden de venta se le instruirá al cliente donde debe recoger su pedido en el horario escogido previamente.<br>

              <span class="bold">Pedido para eventos</span><br>
              Se debe llenar el formulario de la pagina pedropaloma.com en la sección de eventos, completando los campos requeridos, donde un agente de ventas se pondrá en contacto con el cliente por email o teléfono. Haciendo un acuerdo escrito de lo que se pidió a través del asesor. Se cobrará costo de envío.<br>

              <span class="bold">Políticas</span><br>
              Cada foto de la pagina de catalogo debe llevar la leyenda -imagen representativa, el producto puede variar-<br>

              <span class="bold">Aceptar términos y condiciones</span><br>
              Al aceptar los términos y condiciones en la pagina, el consumidor acepta realizar las operaciones bancarias a través del portal pedropaloma.com aceptando los precios establecidos por el servicio. Una vez realizado el pago no hay cambios ni devoluciones totales ni parciales.<br>

              <span class="bold">Aviso de privacidad</span><br>
              <span class="italic">Pedropaloma.com</span> no se queda con ningún dato bancario del consumidor, ya que el método de pago se realiza de manera externa por MercadoPago.<br>
            </p>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar ventana</button>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/misfunciones.js"></script>
  </body>
</html>
