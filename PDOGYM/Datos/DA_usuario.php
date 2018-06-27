<?php
require_once 'conexion.php';

class datausuario {
    const tabla = 'usuario';
    
    public function Insertar (&$ErrorInfo, $nom,  $apellido,  $edad,  $sexo,  $email,  $pass,  $terminos,  $direccion,  $postal,  $tel,  $dni ){
        
        $conexion = new Conexion();
        
        $consulta = $conexion->prepare('INSERT INTO ' . self::tabla . ' ( Nombre, Apellidos, Nacimiento, Sexo, Email, Password, Terminos, Direccion, CP, Telefono, Dni) VALUES ( :nom, :apell, :edad, :sexo, :mail, :pass, :term, :direc, :postal, :tel, :dni )');

        
        $consulta->bindParam(':nom', $nom);
        //echo " -- DA.terminos = " .$terminos;
        $consulta->bindParam(':apell', $apellido);
        $consulta->bindParam(':edad', $edad);
        $consulta->bindParam(':sexo', $sexo);
        $consulta->bindParam(':mail', $email);
        $consulta->bindParam(':pass', $pass);
        $consulta->bindParam(':term', $terminos); 
        $consulta->bindParam(':direc', $direccion);
        $consulta->bindParam(':postal', $postal);
        $consulta->bindParam(':tel', $tel);
        $consulta->bindParam(':dni', $dni);

        
        $resultado = $consulta->execute();
        $ErrorInfo=$consulta->ErrorInfo()[2];
        $conexion = null;
	    return $resultado;
    }
    
        public function buscarUser(&$ErrorInfo,$email) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare("SELECT * FROM ". self::tabla ." where Email = :email");
        $consulta->bindParam(':email', $email);
        $consulta->execute();
        $arrayRegistros = $consulta->fetch();//devuelve solo un array para cada email
        $ErrorInfo=$consulta->ErrorInfo()[2];
        $conexion = null;
        return $arrayRegistros;
    }
    
        public function comprobarUser(&$ErrorInfo,$email,$logpass) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare("SELECT * FROM ". self::tabla ." where Email = :email and Password = :pass");
        $consulta->bindParam(':email', $email);
        $consulta->bindParam(':pass', $logpass);
        $consulta->execute();
        $arrayRegistros = $consulta->fetch();//devuelve solo un array para cada email
        $ErrorInfo=$consulta->ErrorInfo()[2];
        $conexion = null;
        return $arrayRegistros;
    }
}
?>