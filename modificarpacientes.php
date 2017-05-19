<?php include 'header.php'; ?>
<?php
if (!isset($_REQUEST['cod']) || (!isset($_SESSION['usuario']))){
  mysqli_close($conexion);
  header ("Location: pacientes.php");
  exit();
}
?>
<div class="container">
  <br><br>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
      <?php
        require_once 'conexion.php';

        $sql = "SELECT Num_Historial, Nom_Paciente, Apell_Paciente, FNacimiento, Domicilio, Poblacion, Sexo FROM pacientes WHERE Num_Historial='" . $_REQUEST['cod'] . "';";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            ?>
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                  <th>Núm Historial</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Fecha de Nacimiento</th>
                  <th>Domicilio</th>
                  <th>Población</th>
                  <th>Sexo</th>
                </tr>
              </thead>
              <tbody>
            <?php
             while($row = $result->fetch_assoc()) {
               ?>
              <form class="form-group" action="modificarpacientes2.php" method="post">

                <tr>
                  <td style="vertical-align:middle"><div><?php echo $row["Num_Historial"] ?></div> <input type="hidden" name="Num_Historial" value="<?php echo $row["Num_Historial"] ?>" class="disabled"> </td>
                  <td style="vertical-align:middle"> <input class="form-control" type="text" name="Nom_Paciente" value="<?php echo $row["Nom_Paciente"] ?>"> </td>
                  <td style="vertical-align:middle"> <input class="form-control" type="text" name="Apell_Paciente" value="<?php echo $row["Apell_Paciente"] ?>"> </td>
                  <td style="vertical-align:middle"> <?php echo date_format(date_create($row["FNacimiento"]), 'd/m/Y'); ?> </td>
                  <td style="vertical-align:middle"> <input class="form-control" type="text" name="Domicilio" value="<?php echo $row["Domicilio"] ?>"> </td>
                  <td style="vertical-align:middle"> <input class="form-control" type="text" name="Poblacion" value="<?php echo $row["Poblacion"] ?>"> </td>

                  <td style="vertical-align:middle">
                    <select  name="Sexo" class="form-control" id="select" style="width:60px">
                      <option value="H" <?php if ($row["Sexo"]=="H") {echo "selected";}  ?>>H</option>
                      <option value="M" <?php if ($row["Sexo"]=="M") {echo "selected";}  ?>>M</option>
                    </select>
                    <!-- <input class="form-control" type="text" name="Sexo" value="<?php //echo $row["Sexo"] ?>"> -->
                  </td>
                  <?php
                  if (isset($_SESSION['usuario'])){
                    ?>
                      <td><input type="submit" name="" value="Aceptar" class="btn btn-primary confirmar"></td>
                      <td><a href="pacientes.php" class="btn btn-danger">Cancelar</a></td>
                    <?php
                   }
                  ?>
                </tr>
               <?php
             }
            ?>
              </form>
              </tbody>
            </table>

            <?php
        } else {
             echo "0 resultados";
        }
      ?>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
