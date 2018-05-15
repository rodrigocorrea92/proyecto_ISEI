<?php
class Database
{
    public $db;   // handle of the db connexion
    private static $dns = "mysql:host=localhost;dbname=pruebas";
    private static $user = "root";
    private static $pass = "";
    private static $instance;

    public function __construct ()
    {
        $this->db = new PDO(self::$dns,self::$user,self::$pass);
        //seteo atributos para q me devuelva excepcion ante errores
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET sql_mode="NO_ENGINE_SUBSTITUTION"');
    }

    public static function getInstance()
    {
        //si la db no esta instanciada
        if(!isset(self::$instance))
        {
            $object= __CLASS__;
            //instancio la clase
            self::$instance=new $object;
        }
        //retorno la instancia de la clase
        return self::$instance;
    }
}