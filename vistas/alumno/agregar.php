<?php 
if (isset($_REQUEST['nuevo_alumno'])) {
  require_once realpath($_SERVER["DOCUMENT_ROOT"]) .'/ISEI Floreal/PHP/acciones/alumnos/add.php';
}
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </head>
  <body>

    <!-- Barra de navegación -->
       <header>
        <nav class="navbar navbar-dark bg-dark">
          <ul class="nav">
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Alumnos</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="listatodos.php"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Ver alumnos</a>
                <a class="dropdown-item" href="#"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Agregar alumno</a>
                <a class="dropdown-item" href="lista.php"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;filtrar alumnos</a>
              </div>

            </li>

          </ul>
        </nav>
    </header>
    <!-- Formulario para nuevo alumno -->
    <div style="display:flex;justify-content:center;align-items:center;"><h1>Agregar nuevo alumno</h1></div><br>

    <form id="needs-validation" method="POST" action="" novalidate>
              <div class="container">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <label class="input-group-text" for="validationCustom01">Nombre:&nbsp;</label>
                </div>
                  <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" required name="nombre">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <label class="input-group-text" for="validationCustom02">Apellido:&nbsp;</label>
                </div>
                  <input type="text" class="form-control" id="validationCustom02" placeholder="Apellido" required name="apellido">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <label class="input-group-text" for="validationCustom07">Número documento:&nbsp;</label>
                </div>
                  <input type="number" class="form-control" id="validationCustom07" placeholder="Número documento" required name="nro_doc">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <label class="input-group-text" for="validationCustom08">Fecha de nacimiento:&nbsp;</label>
                </div>
                  <input type="date" class="form-control" id="validationCustom08" placeholder="Fecha de nacimiento" required name="fecha_nac">
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <label class="input-group-text" for="validationCustom09">Colegio:&nbsp;</label>
                </div>
                  <input type="text" class="form-control" id="validationCustom09" placeholder="Colegio" required name="colegio">
                </div>                
                <div class="input-group mb-3"">
                  <div class="input-group-prepend">
                  <label class="input-group-text" for="validationCustom10">Nivel:&nbsp;</label>
                </div>
                   <select class="custom-select" required name="nivel">
                    <option value="primario">primario</option>
                    <option value="secundario">secundario</option>
                  </select> 
                </div>
                <div class="input-group mb-3"">
                  <div class="input-group-prepend">
                  <label class="input-group-text" for="validationCustom10">Grado:&nbsp;</label>
                </div>
                   <select class="custom-select" required name="grado">
                    <option value="primero">primero</option>
                    <option value="segundo">segundo</option>
                    <option value="tercero">tercero</option>
                    <option value="cuarto">cuarto</option>
                    <option value="quinto">quinto</option>
                    <option value="sexto">sexto</option>
                    <option value="septimo">septimo</option>
                  </select> 
                </div>
              </div>
              <div style="display:flex;justify-content:center;align-items:center;">
              <button class="btn btn-primary justify-content-center" type="submit" name="nuevo_alumno">Agregar</button>
            </div>
              <script>
                (function() {
                  "use strict";
                  window.addEventListener("load", function() {
                    var form = document.getElementById("needs-validation");
                    form.addEventListener("submit", function(event) {
                      if (form.checkValidity() == false) {
                        event.preventDefault();
                        event.stopPropagation();
                      }
                      form.classList.add("was-validated");
                    }, false);
                  }, false);
                }());
              </script>
        </form>
  </body>
</html>