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
    header("location:https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=115445088-00929a2c-e62e-4e7b-80aa-4845b7edfb72");
  }else
  {
    header("location:OrdenCreada.php");
  }
?>
