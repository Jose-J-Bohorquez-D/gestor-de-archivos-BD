<?php require("Vistas/Modulos/navSup.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  </head>
  <body>
    <div class="container text-center">
      <h1 class="text-center">registro de usuario</h1>
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <form class="" method="post">
            <label for="">Nombre Personal:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="ejemplo: Damian velandia"><br>
            <label for="">Email:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="ejemplo: pepito@gmail.com"><br>
            <label for="">Nombre Usuario:</label>
            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="ejemplo: pepitoPerez01"><br>
            <label for="">Passowrd:</label>
            <input type="password" name="pass" id="pass" class="form-control" placeholder="ejemplo: contraseña"><br>
            <div class="row ">
              <div class="col-sm-6">
                <button type="submit" name="button" class="btn btn-primary">Registrar</button>
              </div>
              <div class="col-sm-6">
                <a href="index.php" class="btn btn-success">Login</a>
              </div>
            </div>
          </form>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>
  </body>
</html>
