<?php
  session_start();
  if (!isset($_REQUEST['cod']) || (!isset($_SESSION['usuario']))) {
    mysqli_close($conexion);
    header ("Location: medicos.php");
    exit();
  }
  require_once 'conexion.php';
  $query = "DELETE FROM medicos WHERE Num_Colegiado = '" . $_REQUEST['cod'] . "'";
  mysqli_query($conexion, $query);
  mysqli_close($conexion);
  header ("Location: medicos.php");
?>
