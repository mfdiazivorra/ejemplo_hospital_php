<?php include 'header.php'; ?>
<div class="container">
  <div class="row">
    <form class="form-horizontal" action="nuevatarjeta2.php" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend>Nueva Tarjeta</legend>

        <div class="form-group">
          <label for="h3" class="col-lg-2 control-label">Título</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="h3" name="h3">
          </div>
        </div>
        <div class="form-group">
          <label for="p" class="col-lg-2 control-label">Texto</label>
          <div class="col-lg-10">
            <!-- <input type="text" class="form-control" id="p" name="p"> -->
            <textarea class="form-control" rows="3" id="p" name="p"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="fileToUpload" class="col-lg-2 control-label">Imagen</label>
          <div class="col-lg-10">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="hidden" value="Upload Image" name="submit">
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
