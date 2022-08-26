<?php
class Conn{
    public function getConnect(){
        $host = "localhost";
        $bdd = "property-deluxe";
        $user = "property";
        $pass = "123456";
        try{
            $dsn = "mysql:host=$host;dbname=$bdd";
            $dbh = new PDO($dsn,$user,$pass);
            return $dbh;

       }catch(PDOException  $e){
           echo "Fallo de conexión: " . $e->getMessage();
     }
    }
}
?>