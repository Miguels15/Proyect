<?php
require_once 'conexionClass.php';

class connCasa{
    public function insertar($casas){
        $cn = new Conn();        
        $dbh = $cn->getConnect();
        
        $sql = "INSERT INTO casa (nom, direc, precio, depa, descu) VALUES (:nom, :direc, :precio, :depa, :descu) ";

        try{
            $stmt = $dbh->prepare($sql);
            $stmt->execute((array) $casas);
           $idUser = $dbh->lastInsertId();
           //header("Location: ../Controlador/controlImg.php?proceso=$idUser");


        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }  

}  
?>