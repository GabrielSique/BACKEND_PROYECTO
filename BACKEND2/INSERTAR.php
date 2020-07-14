<?php
  include("CONEXION.php");
  $link = Conectarse();
  $nombre = $_GET['nombre'];
  $url = $_GET['url'];
  $rol = $_GET['rol'];
  $descripcion = $_GET['descripcion'];
  $cliente = $_GET['cliente'];
  $cadena ="insert into programador_proyecto (NOMBRE_PROYECTO, URL_PROYECTO, ROLE_PROGRAMADOR, DESCRIPCION, CLIENTE_EMPRESA) values('".$nombre."','".$url."','".$rol."','".$descripcion."','".$cliente."')";

  mysqli_query($link,$cadena)or die('INSERCION FALLIDA ' . mysqli_error());
  header("Location: BACKEND.php");
?>