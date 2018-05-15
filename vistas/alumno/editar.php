<?php 
require_once realpath($_SERVER["DOCUMENT_ROOT"]) . '/ISEI Floreal/PHP/DB/DataBase.php';

$id = $_GET['id']; 
$con2 = Database::getInstance();
$sql = "SELECT * FROM alumnos WHERE id = :p1";
$params = array("p1"=> $id);
$listAlumnos = $con2->db->prepare($sql);
$listAlumnos->execute($params);
$listAlumnos->setFetchMode(PDO::FETCH_OBJ);
if (isset($_REQUEST['editar_alumno'])) {
  require_once realpath($_SERVER["DOCUMENT_ROOT"]) .'/ISEI Floreal/PHP/acciones/alumnos/edit.php';
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
                <a class="dropdown-item" href="agregar.php"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Agregar alumno</a>
                <a class="dropdown-item" href="lista.php"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;filtrar alumnos</a>
              </div>

            </li>

          </ul>
        </nav>
    </header>
    <?php foreach ($listAlumnos as $p) { ?>

<form id="needs-validation" method="POST" action="" novalidate>
              <div class="container">
                <div style="display:flex;justify-content:center;align-items:center;"><h1>Editar alumno</h1></div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <label class="input-group-text" for="validationCustom01">Nombre:&nbsp;</label>
                </div>
                   <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" required name="nombre" value="<?php echo $p->nombre; ?>">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <label class="input-group-text" for="validationCustom02">Apellido:&nbsp;</label>
                </div>
                  <input type="text" class="form-control" id="validationCustom02" placeholder="Apellido" required name="apellido" value="<?php echo $p->apellido; ?>">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <label class="input-group-text" for="validationCustom07">Número documento:&nbsp;</label>
                </div>
                 <input type="number" class="form-control" id="validationCustom07" placeholder="Número documento" required name="nro_doc" value="<?php echo $p->nro_doc; ?>">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <label class="input-group-text" for="validationCustom08">Fecha de nacimiento:&nbsp;</label>
                </div>
                  <input type="date" class="form-control" id="validationCustom08" placeholder="Fecha de nacimiento" required name="fecha_nac" value="<?php echo $p->fecha_nac; ?>">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <label class="input-group-text" for="validationCustom09">Colegio:&nbsp;</label>
                </div>
                 <input type="text" class="form-control" id="validationCustom09" placeholder="Colegio" required name="colegio" value="<?php echo $p->colegio; ?>">
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
                   <select class="custom-select" required name="grado" value="<?php echo $p->grado; ?>">
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
              <button class="btn btn-primary justify-content-center" type="submit" name="editar_alumno">Editar</button>
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
        <?php }
         if (isset($_GLOBALS['msj'])) {
          echo $_GLOBALS['msj'];
          }
          ?>
</html>