<?php
  $servidor = "localhost";
  $us = "root";
  $pass = "";
  $db = "hospital";
  $conexion = mysqli_connect($servidor, $us, $pass, $db) or die (mysql_error());
  mysqli_set_charset($conexion, "utf8");
 ?>
