<?php
  if (!isset($_POST['Num_Historial'])) {
    mysqli_close($conexion);
    header ("Location: pacientes.php");
    exit();
  }
  require_once 'conexion.php';
  $query = "
    UPDATE pacientes
    SET Nom_Paciente = '" .$_POST['Nom_Paciente'] . "',
         Apell_Paciente = '" .$_POST['Apell_Paciente'] . "',
         Domicilio = '" .$_POST['Domicilio'] . "',
         Poblacion = '" .$_POST['Poblacion'] . "',
         Sexo = '" .$_POST['Sexo'] . "'
    WHERE Num_Historial = '" .$_POST['Num_Historial'] . "';
  ";
  mysqli_query($conexion, $query);
  mysqli_close($conexion);
  header ("Location: pacientes.php");
?>
