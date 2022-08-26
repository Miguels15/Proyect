<?php
require_once 'conexionClass.php';

class DaoCasa{

    public function listadoCasa($id){
        $sql = "select idPropiedad, nom, direc, precio, depa, descu, fotos, username from casa order by idPropiedad, nom, direc, precio, depa, descu, fotos, username";
        $cn = new Conn();
        $dbh = $cn->getConnect();
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $casa = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $casa;
    }

    public function mostrarCasa($id){
        $sql = "select * from casa where idPropiedad=:idCasa";
        $cn = new Conn();
        $dbh = $cn->getConnect();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':idCasa',$id);
        $stmt->execute();
        $casa = $stmt->fetch();
        return $casa;
    }

    public function eliminar($id){
        $cn = new Conn();        
        $dbh = $cn->getConnect();
        $sql = "DELETE FROM casa WHERE idPropiedad=:idCasa";
        try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':idCasa',$id);
            $stmt->execute();
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    } 


    public function modificar($cliente,$id){
        $cn = new Conn();        
        $dbh = $cn->getConnect();
        $sql = "UPDATE casa SET nom=:nom, direc=:direc,  precio=:precio, depa=:depa, descu=:descu  WHERE idPropiedad=:idCasa";
        try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':idCasa',$id);
            $stmt->bindParam(':nom',$cliente->nom);
            $stmt->bindParam(':direc',$cliente->direc);
            $stmt->bindParam(':precio',$cliente->precio);
            $stmt->bindParam(':depa',$cliente->depa);
            $stmt->bindParam(':descu',$cliente->descu);
            
            $stmt->execute();
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    } 

}  
?>