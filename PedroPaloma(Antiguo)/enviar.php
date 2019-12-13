<?php
  //Recolectando info
  $nombre = $_POST["nombre"];
  $horario = $_POST["horario"];

  //Datos para correo
  $destinatario = "arturoocampo8+zquhz1qxoxr5logmlakw@boards.trello.com";
  $asunto = "Nueva orden de venta";

  $carta = "Nombre de la persona quien recibe: $nombre \n";
  $carta .= "Horario de entrega: $horario \n";

  //Enviando mensaje
  mail($destinatario, $asunto, $carta);
  header("location:https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=115445088-d10a29db-a865-4696-b058-81f8d7cd98d1")
?>
