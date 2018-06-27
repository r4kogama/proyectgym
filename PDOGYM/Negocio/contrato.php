<?php?
    require_once 'C:\xampp\htdocs\Fitness\PDOGYM\Datos\DA_contrato.php';

class usuario {
     private $id_contrato; private $nomContrato; private $descripcion; private $precio; 
    
        //contructor generico por defecto null
    public function __construct ( $id_contrato=null, $nomContrato=null, $descripcion=null, $precio=null) {
        //todo los atributos estan null(por defecto)
        //los parametros introducidos en cada new si no reciben paramentro seran por defecto null
        $this->id_contrato = $id_contrato;
        $this->nomContrato = $nomContrato;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
    }
    
    //GET
    //devuelve el valor del atributo declarado private del objeto this
    public function getIdContrato() {return $this->id_contrato;}  
    public function getNomcontrato() {return $this->nomContrato;}
    public function getDescripcion() {return $this->$descripcion;}  
    public function getPrecio() {return $this->edad;} 
   
    
    //SET
    //rellena el  atributo del objeto del que llama
    public function setIdContrato($id_contrato) {$this->id_contrato = $id_contrato;}  
    public function setNomcontrato($nomContrato) { $this->nomContrato = $nomContrato;}
    public function setDecripcion($descripcion) { $this->descripcion = $descripcion;}  
    public function setPrecio($precio) { $this->precio = $precio;} 
 
    /*
    public function ListarContrato() {
    	$objDataContrato = new datacontrato();//nuevo objeto datacontrato de la clase contrato
        /*
            if($this->direccion == '')
                $this->direccion = 'null';
            if($this->postal == '' )
                $this->postal = 'null';
            if($this->tel == '' )
                $this->tel = 'null';
            if($this->dni == '' )
                $this->dni = 'null';
        
        //el objeto->llama a insetar
        $resultado = $objDataContrato->Insertar($this->nomContrato, $this->apellido, $this->edad, $this->sexo, $this->email, $this->pass, $this->terminos, $this->direccion, $this->postal, $this->tel, $this->dni);
	    return $resultado;
    }
    */
    
}
>