<?php

require_once "../Datos/DA_paises.php";

class paises {
    private $IDpais; private $nom; private $cont; private $reg; private $sup; private $indep; private $pobla; private $esp_vida; private $PNB; private $cod;

    //cuando se haga un new de paises que no se tenga que introducir ningun parametro/atributo
    //contructor generico
    public function __construct ($IDpais=null, $nom=null, $cont=null, $reg=null, $sup=null, $indep=null, $pobla=null, $esp_vida=null, $PNB=null, $cod=null) {
        //todo los atributos estan null(por defecto)
        //los parametros introducidos en cada new si no reciben paramentro seran por defecto null
        $this->IDpais = $IDpais;
        $this->nom = $nom;
        $this->cont = $cont;
        $this->reg = $reg;
        $this->sup = $sup;
        $this->indep = $indep;
        $this->pobla = $pobla;
        $this->esp_vida = $esp_vida;
        $this->PNB = $PNB;
        $this->cod = $cod; 
    }

    public function getIDpais() {
        return $this->IDpais ;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getCont() {
        return $this->cont;
    }  
    
    public function getReg() {
        return $this->reg;
    } 
    
    public function getSup() {
        return $this->sup;
    }   
    public function getIndep() {
        return $this->indep;
    }  
    
    public function getPoblacion() {
        return $this->pobla;
    }  
    
    public function getVida() {
        return $this->esp_vida;
    } 
    
    public function getPnb() {
        return $this->PNB;
    }   
    
    public function getCodigo() {
        return $this->cod;
    }
    
    

    public function setIDpais($IDpais) {
        $this->IDpais = $IDpais;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setCont($cont) {
        $this->cont = $cont;
    } 
    
    public function setReg($reg) {
        $this->reg = $reg;
    } 
    
    public function setSup($sup) {
        $this->sup = $sup;
    } 
    
    public function setIndep($indep) {
        $this->indep = $indep;
    } 
    
    public function setPoblacion($pobla) {
        $this->pobla = $pobla;
    } 
    
    public function setVida($esp_vida) {
        $this->esp_vida = $esp_vida;
    } 
    
    public function setPnb($PNB) {
        $this->PNB = $PNB;
    } 
    
    public function setCodigo($cod) {
        $this->cod = $cod;
    } 
    



    public function Insertar() {
    	$objDataPaises = new datapaises();//nuevo objeto datapaises de la clase datapaises
            if($this->esp_vida == '')
                $this->esp_vida = 'null';
            if($this->indep == '' )
                $this->indep = 'null';
            if($this->PNB == '' )
                $this->PNB = 'null';
        //el objeto->llama a insetar
        $resultado = $objDataPaises->Insertar($this->IDpais, $this->nom, $this->cont, $this->reg, $this->sup, $this->indep, $this->pobla, $this->esp_vida, $this->PNB, $this->cod);
	    return $resultado;
    }

    public function modificar() {
        $objDataPaises = new datapaises();
            if($this->esp_vida == '')
                $this->esp_vida = 'null';
            if($this->indep == '' )
                $this->indep = 'null';
            if($this->PNB == '' )
                $this->PNB = 'null';
        $resultado = $objDataPaises->modificar($this->IDpais, $this->nom, $this->cont, $this->reg, $this->sup, $this->indep, $this->pobla, $this->esp_vida, $this->PNB, $this->cod);
	    return $resultado;
    }

    public function eliminar(){
        $objDataPaises = new datapaises();
        $resultado = $objDataPaises->eliminar($this->IDpais);
	    return $resultado;
    }
    
    //select
    public function listarContinente(){
        $objDataPaises = new datapaises();
        $resultado = $objDataPaises->listarContinente();
	    return $resultado;
    }


    public function titulo(){
        $objDataPaises = new datapaises();
        $resultado = $objDataPaises->titulo();
	    return $resultado;
    }
        
    public function listar($continente) {
        if ($continente == "")
            $continente = '%';
        
        $objDataPaises = new datapaises();
        $arrayRegistros = $objDataPaises->Listar($continente);
        if (!$arrayRegistros)
        	return false;
        else {
        	$arrayPaises= array();
        	foreach ($arrayRegistros as $registro) {
        		$objgPais = new Paises($registro['IDpais'] ,$registro['nombre'] ,$registro['continente'],$registro['region'] ,$registro['superficie'] ,$registro['ano_indep'],$registro['poblacion'] ,$registro['experanza_vida'] ,$registro['PNB'], $registro['codigo'] );
        		$arrayPaises[]=$objgPais;
        	}
        	return $arrayPaises;
        }    	
    }
    
     public function listapais($IDpais) {
          $objDataPaises = new datapaises();
          $registro = $objDataPaises->listapais($IDpais);
        //registro es un array y en cada indice va un nombre de campo de la tabla
         if ($registro)
             //crea nuevo objeto con el registro de la base de datos
        	return new paises($registro['IDpais'] ,$registro['nombre'] ,$registro['continente'],$registro['region'] ,$registro['superficie'] ,$registro['ano_indep'],$registro['poblacion'] ,$registro['experanza_vida'] ,$registro['PNB'], $registro['codigo'] );
        else 
        	return false;
    }
              
        
    
}

?>