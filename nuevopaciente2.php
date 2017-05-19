<?php

  if (!isset($_POST['Num_Historial'])) {
    mysqli_close($conexion);
    header ("Location: pacientes.php");
    exit();
  }
  require_once 'conexion.php';

  $query = "INSERT INTO pacientes (Num_Historial, Nom_Paciente, Apell_Paciente, FNacimiento, Domicilio, Poblacion, Sexo)
  VALUES ('" . $_POST['Num_Historial'] . "',
   '".$_POST['Nom_Paciente']."',
   '".$_POST['Apell_Paciente']."',
   '".$_POST['FNacimiento']."',
   '".$_POST['Domicilio']."',
   '".$_POST['Poblacion']."',
   '".$_POST['Sexo']."'
    )";
  mysqli_query($conexion, $query);
  mysqli_close($conexion);
  header ("Location: pacientes.php");
?>
