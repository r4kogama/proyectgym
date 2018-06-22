<?php
    require_once "../Datos/Da_usuario.php";

class usuario {
    private $id_usuario; private $id_contrato; private $nom; private $apellido; private $edad; private $sexo; private $email; private $pass; private $terminos; private $direccion; private $postal; private $tel; private $dni; 
    
        //contructor generico por defecto null
    public function __construct ($id_usuario=null,  $id_contrato=null, $nom=null, $apellido=null, $edad=null, $sexo=null, $email=null, $pass=null, $terminos=null, $direccion=null, $postal=null,  $tel=null, $dni=null) {
        //todo los atributos estan null(por defecto)
        //los parametros introducidos en cada new si no reciben paramentro seran por defecto null
        $this->id_usuario = $id_usuario;
        $this->id_contrato = $id_contrato;
        $this->nom = $nom;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->pass = $pass;
        $this->terminos = $terminos;
        $this->direccion= $direccion;
        $this->postal = $postal;
        $this->tel = $tel; 
        $this->dni = $dni; 

    }
    
    //GET
    //devuelve el valor del atributo declarado private del objeto this
    public function getIdUsuario() {return $this->id_usuario;}
    public function getIdContrato() {return $this->id_contrato;}  
    public function getNom() {return $this->nom;}
    public function getApellido() {return $this->apellido;}  
    public function getEdad() {return $this->edad;} 
    public function getSexo() {return $this->sexo;}   
    public function getEmail() {return $this->email;}  
    public function getPass() {return $this->pass;}  
    public function getTerm() {return $this->terminos;} 
    public function getDirec() {return $this->direccion;}   
    public function getPostal() {return $this->postal;}
    public function getTel() {return $this->tel;}
    public function getDni() {return $this->dni;}
    
    //SET
    //rellena el  atributo del objeto del que llama
    public function setIdUsuario($id_usuario) {$this->id_usuario = $id_usuario;}
    public function setIdContrato($id_contrato) {$this->id_contrato = $id_contrato;}  
    public function setNom($nom) { $this->nom = $nom;}
    public function setApellido($apellido) { $this->apellido = $apellido;}  
    public function setEdad($edad) { $this->edad = $edad;} 
    public function setSexo($sexo) { $this->sexo = $sexo;}   
    public function setEmail($email) { $this->email = $email;}  
    public function setPass($pass) { $this->pass = $pass;}  
    public function setTerm($terminos) { $this->terminos = $terminos;} 
    public function setDirec($direccion) { $this->direccion = $direccion;}   
    public function setPostal($postal) { $this->postal = $postal;}
    public function setTel($tel) { $this->tel = $tel;}
    public function setDni($dni) { $this->dni = $dni;}
    
    
    public function Insertar() {
    	$objDataUsuario= new datausuario();//nuevo objeto datausuario de la clase usuario
        /*
            if($this->direccion == '')
                $this->direccion = 'null';
            if($this->postal == '' )
                $this->postal = 'null';
            if($this->tel == '' )
                $this->tel = 'null';
            if($this->dni == '' )
                $this->dni = 'null';
        */
        //el objeto->llama a insetar
        $resultado = $objDataUsuario->Insertar($this->nom, $this->apellido, $this->edad, $this->sexo, $this->email, $this->pass, $this->terminos, $this->direccion, $this->postal, $this->tel, $this->dni);
	    return $resultado;
    }
    
}
?>