<?php
require_once realpath($_SERVER["DOCUMENT_ROOT"]) . '/PRA/PHP/DB/DataBase.php';

			$grado = $_POST['grado']; 
			$con2 = Database::getInstance();
			$sql = "SELECT * FROM alumnos WHERE grado = :p1";
			$params = array("p1"=> $grado);
			$listAlumnos = $con2->db->prepare($sql);
			$listAlumnos->execute($params);
			$listAlumnos->setFetchMode(PDO::FETCH_OBJ);

?>
