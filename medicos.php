<?php include 'header.php'; ?>
<div class="container">
  <br><br>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
      <?php
        require_once 'conexion.php';

        $sql = "SELECT Num_Colegiado, Nom_Medico, Apell_Medico, Especialidad, Antiguedad FROM medicos;";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            ?>
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                  <th>Número de Colegiado</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Especialidad</th>
                  <th>Antigüedad</th>
                  <?php if (isset($_SESSION['usuario'])){ ?>
                    <th colspan="2"><center><a href="nuevomedico.php"class="btn btn-success">Nuevo</a></center></th>
                  <?php } ?>
                </tr>
              </thead>
              <tbody>
            <?php
             while($row = $result->fetch_assoc()) {
               ?>
                <tr>
                  <td style="vertical-align:middle"><?php echo $row["Num_Colegiado"] ?></td>
                  <td style="vertical-align:middle"><?php echo $row["Nom_Medico"] ?></td>
                  <td style="vertical-align:middle"><?php echo $row["Apell_Medico"] ?></td>
                  <td style="vertical-align:middle"><?php echo $row["Especialidad"] ?></td>
                  <td style="vertical-align:middle"><?php echo $row["Antiguedad"] ?></td>
                  <?php
                  if (isset($_SESSION['usuario'])){
                    ?>
                      <td><center><a href="modificarmedicos.php?cod=<?php echo $row["Num_Colegiado"] ?>" class="btn btn-primary">modificar</a></center></td>
                      <td><center><a href="eliminarmedicos.php?cod=<?php echo $row["Num_Colegiado"] ?>" class="btn btn-danger confirmar">eliminar</a></center></td>
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
