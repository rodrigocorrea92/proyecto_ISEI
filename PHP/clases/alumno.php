<?php 
require_once realpath($_SERVER["DOCUMENT_ROOT"]) . '/ISEI Floreal/PHP/DB/DataBase.php';
	class Alumno{

		private $id;
		private $nombre;
		private $apellido;
		private $nro_doc;
		private $fecha_nac;
        private $nivel; //MODIFICADO
		private $grado;
		private $colegio;
		private $caracteristicas;
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     *
     * @return self
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getNroDoc()
    {
        return $this->nro_doc;
    }

    /**
     * @param mixed $nro_doc
     *
     * @return self
     */
    public function setNroDoc($nro_doc)
    {
        $this->nro_doc = $nro_doc;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getFechaNac()
    {
        return $this->fecha_nac;
    }

    /**
     * @param mixed $fecha_nac
     *
     * @return self
     */
    public function setFechaNac($fecha_nac)
    {
        $this->fecha_nac = $fecha_nac;

        return $this;
    }

    public function getNivel() //MODIFICADO
    {
        $this->nivel;
    }

    public function setNivel($nivel) //MODIFICADO
    {
        $this->nivel = $nivel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGrado()
    {
        return $this->grado;
    }

    /**
     * @param mixed $mail
     *
     * @return self
     */
    public function setGrado($grado)
    {
        $this->grado = $grado;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getColegio()
    {
        return $this->colegio;
    }

    /**
     * @param mixed $colegio
     *
     * @return self
     */
    public function setColegio($colegio)
    {
        $this->colegio = $colegio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function Agregar()
	{

	    $con  = Database::getInstance();
	    $sql = "INSERT INTO alumnos (nombre,apellido,nro_doc,fecha_nac,grado,colegio,nivel) values(:p1,:p2,:p3,:p4,:p5,:p6, :p8)";
	    $autor = $con->db->prepare($sql);
	    $params = array("p1" => $this->nombre,"p2" => $this->apellido, "p3" => $this->nro_doc, "p4" => $this->fecha_nac, "p5" => $this->grado, "p6" => $this->colegio, "p8" => $this->nivel);
	    $autor->execute($params);
	    header("location:../../vistas/alumno/agregar.php");
	}
	public function Editar()
	{

	    $con  = Database::getInstance();
	    $sql = "UPDATE alumnos SET nombre=:p1,apellido = :p2,nro_doc = :p3,fecha_nac = :p4,grado = :p5,nivel = :p8,colegio = :p6 WHERE id = :p7";
	    $autor = $con->db->prepare($sql);
	    $params = array("p1" => $this->nombre,"p2" => $this->apellido, "p3" => $this->nro_doc, "p4" => $this->fecha_nac, "p5" => $this->grado, "p6" => $this->colegio, "p8" => $this->nivel, "p7" => $this->id);
	    $autor->execute($params);
	    header("location:../../vistas/alumno/listatodos.php");

	}
}



 ?>