<?php include 'header.php'; ?>
<div class="container">
  <div class="row">
    <form class="form-horizontal" action="nuevoingreso2.php" method="post">
      <fieldset>
        <legend>Nuevo Ingreso</legend>

        <div class="form-group">
          <label for="Num_Ingreso" class="col-lg-2 control-label">Núm Ingreso</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Num_Ingreso" name="Num_Ingreso">
          </div>
        </div>
        <div class="form-group">
          <label for="FIngreso" class="col-lg-2 control-label">Fecha de ingreso</label>
          <div class="col-lg-10">
            <input type="date" class="form-control" id="FIngreso" name="FIngreso">
          </div>
        </div>
        <div class="form-group">
          <label for="FAlta" class="col-lg-2 control-label">Fecha de alta</label>
          <div class="col-lg-10">
            <input type="date" class="form-control" id="FAlta" name="FAlta">
          </div>
        </div>
        <div class="form-group">
          <label for="Planta" class="col-lg-2 control-label">Planta</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Planta" name="Planta">
          </div>
        </div>
        <div class="form-group">
          <label for="Cama" class="col-lg-2 control-label">Cama</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Cama" name="Cama">
          </div>
        </div>
        <div class="form-group">
          <label for="Alergico" class="col-lg-2 control-label">Alérgico</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Alergico" name="Alergico">
          </div>
        </div>
        <div class="form-group">
          <label for="Diagnostico" class="col-lg-2 control-label">Diagnóstico</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Diagnostico" name="Diagnostico">
          </div>
        </div>
        <div class="form-group">
          <label for="Coste" class="col-lg-2 control-label">Coste</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Coste" name="Coste">
          </div>
        </div>
        <div class="form-group">
          <label for="Num_Historial" class="col-lg-2 control-label">Núm Historial</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Num_Historial" name="Num_Historial">
          </div>
        </div>
        <div class="form-group">
          <label for="Num_Colegiado" class="col-lg-2 control-label">Núm Colegiado</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Num_Colegiado" name="Num_Colegiado">
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="reset" class="btn btn-default">Cancelar</button>
            <button type="submit" class="btn btn-primary">Aceptar</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
<?php include 'footer.php'; ?>
