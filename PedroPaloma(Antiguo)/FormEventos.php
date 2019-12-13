<?php
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];
  $personas = $_POST['personas'];
  $hora = $_POST['hora'];
  $lugar = $_POST['lugar'];
  $comentario = $_POST['comentario'];

  $destinatario = "arturoocampo8+zquhz1qxoxr5logmlakw@boards.trello.com";
  $asunto = "Evento de $nombre";

  $carta = "Nombre: $nombre \n";
  $carta .= "Telefono: $telefono \n";
  $carta .= "Email: $email \n";
  $carta .= "No. de personas: $personas \n";
  $carta .= "Hora: $hora \n";
  $carta .= "Lugar: $lugar \n";
  $carta .= "Comentario: $comentario \n";

  //Enviando mensaje
  mail($destinatario, $asunto, $carta);
  header('Location:ThankyouPage.html');
?>
