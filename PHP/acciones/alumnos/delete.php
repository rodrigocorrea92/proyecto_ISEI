<?php 
	require_once realpath($_SERVER["DOCUMENT_ROOT"]) . '/PRA/PHP/DB/DataBase.php';

	$id = $_GET['id']; 

	$con2 = Database::getInstance();
	$sql = "DELETE FROM alumnos WHERE id = :p1";
	$params = array("p1"=> $id);
	$listPersonas = $con2->db->prepare($sql);
	$listPersonas->execute($params);
	$listPersonas->setFetchMode(PDO::FETCH_OBJ);
	header("location:../../../vistas/alumno/lista.php");
 ?>