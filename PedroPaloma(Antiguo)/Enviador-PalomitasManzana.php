<?php
  session_start();
  //Recolectando info
  $nombre = $_POST["nombre"];
  $horario = $_POST["horario"];

  //enviar variables a otro php
  $_SESSION["nombre"] = $nombre;
  $_SESSION["horario"] = $horario;

  if(isset($_POST['bt1']))
  {
    header("location:https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=115445088-fe800ee4-4fce-4556-a0dd-a81d0a36db62");
  }else
  {
    header("location:OrdenCreada.php");
  }
?>
