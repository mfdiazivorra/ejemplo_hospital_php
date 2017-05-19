<?php include 'header.php'; ?>
<div class="container">
  <br><br>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
      <?php
        require_once 'conexion.php';

        $sql = "SELECT Num_Ingreso, FIngreso, FAlta, Planta, Cama, Alergico, Diagnostico, Coste, Num_Historial, Num_Colegiado FROM ingresos;";
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
                  <?php if (isset($_SESSION['usuario'])){ ?>
                    <th colspan="2"><center><a href="nuevoingreso.php"class="btn btn-success">Nuevo</a></center></th>
                  <?php } ?>
                </tr>
              </thead>
              <tbody>
            <?php
             while($row = $result->fetch_assoc()) {
               ?>
                <tr>
                  <td style="vertical-align:middle"><?php echo $row["Num_Ingreso"] ?></td>
                  <td style="vertical-align:middle"><?php echo date_format(date_create($row["FIngreso"]), 'd/m/Y'); ?></td>
                  <td style="vertical-align:middle"><?php echo date_format(date_create($row["FAlta"]), 'd/m/Y'); ?></td>
                  <td style="vertical-align:middle"><?php echo $row["Planta"] ?></td>
                  <td style="vertical-align:middle"><?php echo $row["Cama"] ?></td>
                  <td style="vertical-align:middle"><?php echo $row["Alergico"] ?></td>
                  <td style="vertical-align:middle"><?php echo $row["Diagnostico"] ?></td>
                  <td style="vertical-align:middle"><?php echo $row["Coste"] ?></td>
                  <td style="vertical-align:middle"><?php echo $row["Num_Historial"] ?></td>
                  <td style="vertical-align:middle"><?php echo $row["Num_Colegiado"] ?></td>
                  <?php
                  if (isset($_SESSION['usuario'])){
                    ?>
                      <td><center><a href="modificaringresos.php?cod=<?php echo $row["Num_Ingreso"] ?>" class="btn btn-primary">modificar</a></center></td>
                      <td><center><a href="eliminaringresos.php?cod=<?php echo $row["Num_Ingreso"] ?>" class="btn btn-danger confirmar">eliminar</a></center></td>
                    <?php
                   }
                  ?>
                </tr>
               <?php
             }
            ?>
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
