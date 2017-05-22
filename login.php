<?php include 'header.php'; ?>
<?php
  if (isset($_SESSION['usuario'])){//controlamos que no se puede acceder a Login si ya está iniciada la sesión
    mysqli_close($conexion);
    header ("Location: index.php");
    exit();
  }
?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 id="type-blockquotes"></h2>
        </div>
      </div>
      <div class="row">
        <form class="form-horizontal col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3" action="login2.php" method="post" autocomplete="off">
          <fieldset>
            <legend>Login</legend>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Usuario</label>
              <div class="col-lg-10">
                <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label">Contraseña</label>
              <div class="col-lg-10">
                <input type="password" name="pass" class="form-control" id="pass" placeholder="Contraseña">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-primary">Aceptar</button>
              </div>
            </div>
            <?php
              if (isset($_REQUEST['error'])){
            ?>
                  <div class="alert alert-dismissible alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Información incorrecta</strong>
                  </div>
                <?php
              }
                ?>
          </fieldset>
        </form>
      </div>
    </div>
<?php include 'footer.php'; ?>
