<?php
  session_start();
  if (!isset($_REQUEST['cod']) || (!isset($_SESSION['usuario']))) {
    mysqli_close($conexion);
    header ("Location: ingresos.php");
    exit();
  }
  require_once 'conexion.php';
  $query = "DELETE FROM ingresos WHERE Num_Ingreso = '" . $_REQUEST['cod'] . "'";
  mysqli_query($conexion, $query);
  mysqli_close($conexion);
  header ("Location: ingresos.php");
?>
