<?php
require_once 'conexionClass.php';

class conClient{
    public function insertar($usuario){
        $cn = new Conn();        
        $dbh = $cn->getConnect();
        $sql = "INSERT INTO usuarios (nombre, correo, username, tel, pass, gen, rol) VALUES (:nom, :mail, :user, :tel, :pass, :gen, :rol) ";
  
        try{
            $stmt = $dbh->prepare($sql);
            $stmt->execute((array) $usuario);
            header('Location: ../vista/form.php');
        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }  
}  
?>
