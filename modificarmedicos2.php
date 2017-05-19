<?php
  if (!isset($_POST['Num_Colegiado'])) {
    mysqli_close($conexion);
    header ("Location: medicos.php");
    exit();
  }
  require_once 'conexion.php';
  $query = "
    UPDATE medicos
    SET Num_Colegiado = '" .$_POST['Num_Colegiado'] . "',
         Apell_Medico = '" .$_POST['Apell_Medico'] . "',
         Especialidad = '" .$_POST['Especialidad'] . "',
         Antiguedad = '" .$_POST['Antiguedad'] . "'
    WHERE Num_Colegiado = '" .$_POST['Num_Colegiado'] . "';
  ";
  mysqli_query($conexion, $query);
  mysqli_close($conexion);
  header ("Location: medicos.php");
?>
