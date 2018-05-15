<?php 
require_once realpath($_SERVER["DOCUMENT_ROOT"]) . '/ISEI Floreal/PHP/DB/DataBase.php';

$id = $_GET['id']; 
$con2 = Database::getInstance();
$sql = "SELECT * FROM alumnos WHERE id = :p1";
$params = array("p1"=> $id);
$listAlumnos = $con2->db->prepare($sql);
$listAlumnos->execute($params);
$listAlumnos->setFetchMode(PDO::FETCH_OBJ);

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
    <div style="display:flex;justify-content:center;align-items:center;"><h3>¿Está seguro que desea eliminar este registro?</h3></div>
    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nro Doc</th>
            <th>Fecha Nacimiento</th>
            <th>Grado</th>
            <th>Colegio</th>
            <th>Eliminar</th>
          </tr>
        <?php foreach ($listAlumnos as $p){ ?>
        <?php 
        echo '<tr><td>'.$p-> nombre.'</td>'.'<td>'. $p-> apellido.'</td>'.'<td>'. $p-> nro_doc.'</td>'.'<td>'. $p-> fecha_nac.'</td>'.'<td>'. $p-> grado.'</td>'.'<td>'. $p-> colegio.'</td>'.'<td>'; ?><input type="button" onclick="location.href='../../PHP/acciones/alumnos/delete.php?id= <?php echo $p->id; ?>';" value="Eliminar"></td></tr>
        <?php  
        }
        ?>
    </table>
  </body>
</html>