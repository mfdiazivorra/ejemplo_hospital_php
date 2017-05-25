<?php
  session_start();
  if (!isset($_REQUEST['cod']) || (!isset($_SESSION['usuario']))) {
    mysqli_close($conexion);
    header ("Location: pacientes.php");
    exit();
  }
  require_once 'conexion.php';
  $query = "DELETE FROM pacientes WHERE Num_Historial = '" . $_REQUEST['cod'] . "'";
  if (mysqli_query($conexion, $query)) unlink('res/img/' . $_REQUEST['cod'] . '.jpg');
  mysqli_close($conexion);
  header ("Location: pacientes.php");
?>
