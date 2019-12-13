<?php
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];
  $comentario = $_POST['comentario'];

  $destinatario = "arturoocampo8+zquhz1qxoxr5logmlakw@boards.trello.com";
  $asunto = "Contacto de $nombre";

  $carta = "Nombre: $nombre \n";
  $carta .= "Telefono: $telefono \n";
  $carta .= "Email: $email \n";
  $carta .= "Comentario: $comentario \n";

  //Enviando mensaje
  mail($destinatario, $asunto, $carta);
  header('Location:ThankyouPage.html');
?>
