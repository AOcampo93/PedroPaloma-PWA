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
    header("location:https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=115445088-44db7be2-a6c0-40d6-9bde-dfd3cfeff2e0");
  }else
  {
    header("location:OrdenCreada.php");
  }
?>
