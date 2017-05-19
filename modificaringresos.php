<?php include 'header.php'; ?>
<?php
if (!isset($_REQUEST['cod']) || (!isset($_SESSION['usuario']))){
  mysqli_close($conexion);
  header ("Location: ingresos.php");
  exit();
}
?>
<div class="container">
  <br><br>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
      <?php
        require_once 'conexion.php';

        $sql = "SELECT Num_Ingreso, FIngreso, FAlta, Planta, Cama, Alergico, Diagnostico, Coste, Num_Historial, Num_Colegiado FROM ingresos WHERE Num_Ingreso='" . $_REQUEST['cod'] . "';";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            ?>
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                  <th>Núm Ingreso</th>
                  <th>Fecha de ingreso</th>
                  <th>Fecha de alta</th>
                  <th>Planta</th>
                  <th>Cama</th>
                  <th>Alérgico</th>
                  <th>Diagnóstico</th>
                  <th>Coste</th>
                  <th>Núm Historial</th>
                  <th>Núm Coliegiado</th>
                </tr>
              </thead>
              <tbody>
            <?php
             while($row = $result->fetch_assoc()) {
               ?>
              <form class="form-group" action="modificaringresos2.php" method="post">

                <tr>
                  <td style="vertical-align:middle"><div><?php echo $row["Num_Ingreso"] ?></div> <input type="hidden" name="Num_Ingreso" value="<?php echo $row["Num_Ingreso"] ?>" class="disabled"> </td>
                  <td style="vertical-align:middle">
                    <input type="date" name="FIngreso" value="<?php echo date_format(date_create($row["FIngreso"]), 'Y-m-d'); ?>">
                  </td>
                  <td style="vertical-align:middle">
                    <input type="date" name="FAlta" value="<?php echo date_format(date_create($row["FAlta"]), 'Y-m-d'); ?>">
                  </td>
                  <td style="vertical-align:middle"> <input class="form-control" type="text" name="Planta" value="<?php echo $row["Planta"] ?>"> </td>
                  <td style="vertical-align:middle"> <input class="form-control" type="text" name="Cama" value="<?php echo $row["Cama"] ?>"> </td>
                  <td style="vertical-align:middle">
                    <select  name="Alergico" class="form-control" id="select" style="width:60px">
                      <option value="0" <?php if ($row["Alergico"]=="0") {echo "selected";}  ?>>0</option>
                      <option value="1" <?php if ($row["Alergico"]=="1") {echo "selected";}  ?>>1</option>
                    </select>
                  </td>
                  <td style="vertical-align:middle"> <input class="form-control" type="text" name="Diagnostico" value="<?php echo $row["Diagnostico"] ?>"> </td>
                  <td style="vertical-align:middle"> <input class="form-control" type="text" name="Coste" value="<?php echo $row["Coste"] ?>"> </td>
                  <td style="vertical-align:middle"> <input class="form-control" type="text" name="Num_Historial" value="<?php echo $row["Num_Historial"] ?>"> </td>
                  <td style="vertical-align:middle"> <input class="form-control" type="text" name="Num_Colegiado" value="<?php echo $row["Num_Colegiado"] ?>"> </td>

                  <?php
                  if (isset($_SESSION['usuario'])){
                    ?>
                      <td><input type="submit" name="" value="Aceptar" class="btn btn-primary confirmar"></td>
                      <td><a href="ingresos.php" class="btn btn-danger">Cancelar</a></td>
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
