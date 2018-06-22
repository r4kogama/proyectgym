<?php
require_once 'conexion.php';

class datausuario {
    const tabla = 'usuario';
    
    public function Insertar ( $nom,  $apellido,  $edad,  $sexo,  $email,  $pass,  $terminos,  $direccion,  $postal,  $tel,  $dni ){
        $conexion = new Conexion();
        
        $consulta = $conexion->prepare('INSERT INTO ' . self::tabla . ' (Id_usuario,  Id_contrato, Nombre, Apellidos, Email, Password, Nacimiento, Sexo, Terminos, Dni, Direccion, C.postal, Telefono) VALUES (null, null, :nom, :apell, :mail, :pass, :edad, :sexo, :term, :dni, :direc, :postal, :tel)');
        
  
        $consulta->bindParam(':nom', $nom);
        $consulta->bindParam(':apell', $apellido);
        $consulta->bindParam(':mail', $edad);
        $consulta->bindParam(':pass', $sexo);
        $consulta->bindParam(':edad', $email);
        $consulta->bindParam(':sexo', $pass);
        $consulta->bindParam(':term', $terminos); 
        $consulta->bindParam(':dni', $direccion);
        $consulta->bindParam(':direc', $postal);
        $consulta->bindParam(':postal', $tel);
        $consulta->bindParam(':tel', $dni);
        
        $resultado = $consulta->execute();
        $conexion = null;

	    return $resultado;
    }
}
?>