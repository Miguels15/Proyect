<?php
require_once 'conexionClass.php';

class conArrendador{
    public function insertar($arrendador){
        $cn = new Conn();        
        $dbh = $cn->getConnect();
        $sql = "INSERT INTO arrendador (nombre, correo, username, telefono, pass, gen, rol) VALUES (:nombre, :correo, :username, :tel, :pass, :gen, :rol) ";
  
        try{
            $stmt = $dbh->prepare($sql);
            $stmt->execute((array) $arrendador);
        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            
        }
    }  
}  
?>
