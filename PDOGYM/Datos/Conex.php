<?php
class Conexion extends PDO {
	
	private const servidor= "localhost";
    private const basededatos = "world";
	private const usuario= "root";
	private const password= "";
	

	public function __construct() {
        //Sobreescribo el método constructor de la clase PDO.
        try {
            parent::__construct('mysql:host=' . self::servidor . ';dbname=' . self::basededatos, self::usuario, self::password);
        } catch (PDOException $e) {
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
            exit;
        }
    }
}
?>