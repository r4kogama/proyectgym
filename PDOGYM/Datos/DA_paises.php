<?php

require_once 'Conexion.php';

class datapaises {

	const TABLA = 'paises';

	public function Insertar($IDpais, $nom, $cont, $reg, $sup, $indep, $pobla, $esp_vida, $PNB, $cod) {
    $conexion = new Conexion();
        
      $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (IDpais, nombre, continente, region, superficie, ano_indep, poblacion, experanza_vida, PNB, codigo) VALUES ( :id, :nombre, :continente, :region, :sup, :indep, :pobl, :vida, :pnb, :cod)');
		
		$consulta->bindParam(':id', $IDpais);
        $consulta->bindParam(':nombre', $nom);
        $consulta->bindParam(':continente', $cont);
        $consulta->bindParam(':region', $reg);
        $consulta->bindParam(':sup', $sup);
        $consulta->bindParam(':indep', $indep);
        $consulta->bindParam(':pobl', $pobla); 
        $consulta->bindParam(':vida', $esp_vida);
        $consulta->bindParam(':pnb', $PNB);
        $consulta->bindParam(':cod', $cod);
                
        
        $resultado = $consulta->execute();
        $conexion = null;

	    return $resultado;
    }

    public function modificar($id, $nom, $cont, $reg, $sup, $indep, $pobla, $esp_vida, $PNB, $cod) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET nombre = :nombre, continente = :cont, region = :reg, superficie = :sup, ano_indep = :indep, poblacion = :pobl, experanza_vida = :exp, PNB = :pnb,codigo = :cd where IDpais = :id');

        $consulta->bindParam(':id', $id);
        $consulta->bindParam(':nombre', $nom);
        $consulta->bindParam(':cont', $cont);
        $consulta->bindParam(':reg', $reg);
        $consulta->bindParam(':sup', $sup);
        $consulta->bindParam(':indep', $indep);
        $consulta->bindParam(':pobl', $pobla);
        $consulta->bindParam(':exp', $esp_vida);
        $consulta->bindParam(':pnb', $PNB);
        $consulta->bindParam(':cd', $cod);
        
        $resultado= $consulta->execute();
        
        $conexion = null;

		return $resultado;
    }

    public function eliminar($IDpais){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE IDpais = :id');
        $consulta->bindParam(':id', $IDpais);
        $resultado=$consulta->execute();
        $conexion = null;

        return $resultado;
    }
    
    //mostrar toda la lista
    public function listar($continente) {
        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA.' WHERE continente like :conti');
        $consulta->bindParam(':conti', $continente);
        $consulta->execute();
        $arrayRegistros = $consulta->fetchAll();
        $conexion = null;

        return $arrayRegistros;
    }
    
    //lista de continentes con select
    public function listarContinente() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT DISTINCT continente FROM ' . self::TABLA);
        $consulta->execute();
        $arrayRegistros = $consulta->fetchAll();//devuelve un array de arrays
        $conexion = null;
        return $arrayRegistros;
    }
    
    //encabezado de la tabla con todos sus nombres
    public function titulo(){
        $meta = array();
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT IDpais as ID, nombre ,continente, superficie,ano_indep as anyo_independencia FROM ' . self::TABLA .' LIMIT 1');
        $consulta->execute();
        // Devuelve los metadatos de una columna de índice basado 0 de un conjunto de resultados como un array asociativo. 
        foreach(range(0, $consulta->columnCount() - 1) as $index) {
          $meta[] = $consulta->getColumnMeta($index)['name']; //name  =El nombre de esta columna tal como es devuelto por la base de datos.
        }   
        $conexion = null;
        return $meta;
    }
    
    
        //
    public function listapais($IDpais){
        $conexion = new Conexion();
        $consulta = $conexion->prepare("SELECT * FROM ". self::TABLA ." where IDpais = :id");
        $consulta->bindParam(':id', $IDpais);
        $consulta->execute();
        $arrayRegistros = $consulta->fetch();//devuelve solo un array para cada idpais
        $conexion = null;
        return $arrayRegistros;
    }
    
}



?>