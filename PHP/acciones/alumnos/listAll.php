<?php
require_once realpath($_SERVER["DOCUMENT_ROOT"]) . '/ISEI Floreal/PHP/DB/DataBase.php';

			$con1 = Database::getInstance();
			$sql = "SELECT * FROM alumnos";
			$listAlumnos = $con1->db->prepare($sql);
			$listAlumnos->execute();
			$listAlumnos->setFetchMode(PDO::FETCH_OBJ);
		
?>
