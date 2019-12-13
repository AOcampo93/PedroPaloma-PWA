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
    header("location:https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=115445088-68f69c1d-7c7b-4c64-bb8c-5d9a74f64de6");
  }else
  {
    header("location:OrdenCreada.php");
  }
?>
