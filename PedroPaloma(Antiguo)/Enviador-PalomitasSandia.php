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
    header("location:https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=115445088-42dd577a-bf20-431a-9a9f-39c975b4fddf");
  }else
  {
    header("location:OrdenCreada.php");
  }
?>
