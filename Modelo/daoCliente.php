<?php
require_once 'conexionClass.php';

class DaoClient{

    public function listadoClientes(){
        $sql = "select Id_Usuario, nombre, username, rol from usuarios order by Id_Usuario, nombre, username, rol";
        $cn = new Conn();
        $dbh = $cn->getConnect();
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $clientes;
    }

    public function eliminar($id){
        $cn = new Conn();        
        $dbh = $cn->getConnect();
        $sql = "DELETE FROM usuarios WHERE Id_Usuario=:Id_Usuario";
        try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':Id_Usuario',$id);
            $stmt->execute();
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    } 

    public function eliminarA($id){
        $cn = new Conn();        
        $dbh = $cn->getConnect();
        $sql = "DELETE FROM arrendador WHERE Id_Arrendador=:Id_Arrendador";
        try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':Id_Arrendador',$id);
            $stmt->execute();
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    } 

    public function modificar($cliente,$id){
        $cn = new Conn();        
        $dbh = $cn->getConnect();
        $sql = "UPDATE usuarios SET nombre=:nom, username=:user,  correo=:mail, tel=:tel, pass=:pass, gen=:gen  WHERE Id_Usuario=:Id_Usuario";
        try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':Id_Usuario',$id);
            $stmt->bindParam(':nom',$cliente->nom);
            $stmt->bindParam(':mail',$cliente->mail);
            $stmt->bindParam(':user',$cliente->user);
            $stmt->bindParam(':tel',$cliente->tel);
            $stmt->bindParam(':pass',$cliente->pass);
            $stmt->bindParam(':gen',$cliente->gen);
            $stmt->execute();
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    } 

    public function modificarA($cliente,$id){
        $cn = new Conn();        
        $dbh = $cn->getConnect();
        $sql = "UPDATE arrendador SET nombre=:nom, username=:user,  correo=:mail, telefono=:tel, pass=:pass, gen=:gen  WHERE Id_Arrendador=:Id_Arrendador";
        try{
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':Id_Arrendador',$id);
            $stmt->bindParam(':nom',$cliente->nom);
            $stmt->bindParam(':mail',$cliente->mail);
            $stmt->bindParam(':user',$cliente->user);
            $stmt->bindParam(':tel',$cliente->tel);
            $stmt->bindParam(':pass',$cliente->pass);
            $stmt->bindParam(':gen',$cliente->gen);
            $stmt->execute();
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    } 

    public function mostrarCliente($id){
        $sql = "select * from usuarios where Id_Usuario=:id";
        $cn = new Conn();
        $dbh = $cn->getConnect();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $cliente = $stmt->fetch();
        return $cliente;
    }

    public function mostrarClienteA($id){
        $sql = "select * from arrendador where Id_Arrendador=:id";
        $cn = new Conn();
        $dbh = $cn->getConnect();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $cliente = $stmt->fetch();
        return $cliente;
    }

   
    public function listadoClientesArrendador(){
        $sql = "select Id_Arrendador, nombre, username, rol from arrendador order by Id_Arrendador, nombre, username, rol";
        $cn = new Conn();
        $dbh = $cn->getConnect();
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $clientes;
    }
    



}  
?>