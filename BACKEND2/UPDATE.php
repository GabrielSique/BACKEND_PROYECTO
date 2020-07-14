<?php
  include("CONEXION.php");
  $link = Conectarse();
  $nombre = $_GET['nombre'];
  $url = $_GET['url'];
  $rol = $_GET['rol'];
  $descripcion = $_GET['descripcion'];
  $cliente = $_GET['cliente'];

  $cadena ="update programador_proyecto set NOMBRE_PROYECTO='".$nombre."',URL_PROYECTO='".$url."',ROLE_PROGRAMADOR='".$rol."',DESCRIPCION='".$descripcion."',CLIENTE_EMPRESA='".$cliente."' where NOMBRE_PROYECTO=".$nombre;
  mysqli_query($link,$cadena)or die('INSERCION FALLIDA ' . mysqli_error());

  header("Location: BACKEND.php");
?>