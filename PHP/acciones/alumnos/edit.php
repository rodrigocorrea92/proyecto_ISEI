<?php 
	require_once realpath($_SERVER["DOCUMENT_ROOT"]) .'/ISEI Floreal/PHP/clases/alumno.php';
	if(isset($_REQUEST["nombre"]) && $_REQUEST["nombre"]!='')
{
	$a = new Alumno();
	$a->setId($_REQUEST["id"]);
	$a->setNombre($_REQUEST["nombre"]);
	$a->setApellido($_REQUEST["apellido"]);
	$a->setNroDoc($_REQUEST["nro_doc"]);
	$a->setFechaNac($_POST['fecha_nac']);
	$a->setGrado($_REQUEST["grado"]);
	$a->setColegio($_REQUEST["colegio"]);
	$a->setNivel($_REQUEST["nivel"]);
	$a->Editar();
}


 ?>