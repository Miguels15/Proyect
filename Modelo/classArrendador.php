<?php

class Arrendador{

    public $nombre;
    public $correo;
    public $username;
    public $tel;
    public $pass;
    public $gen;
    public $rol;
    public function __construct($nom, $cor, $user, $tel, $pass, $gen, $rol){
        
        if(!empty($nom))
            $this->nombre = $nom;
        else
            throw new Exception('Error. Nombre incorrecto');
            $this->valEmail($cor);
        if(!empty($user))
            $this->username = $user;
        else
            throw new Exception('Error. username vacío');

        if(!empty($tel))
            $this->tel = $tel;
        else
            throw new Exception('Error. telefono vacío');

        if(!empty($pass))
            $this->pass = $pass;
        else
            throw new Exception('Error. contraseña vacía');
        if(!empty($gen))
            $this->gen = $gen;
        else
            throw new Exception('Error. genero vacío');
       if(!empty($rol))
        $this->rol = $rol;
       else
       throw new Exception('Error. Rol vacio');
    }   


private function valEmail($cor){
    $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
    if(!empty($cor) && preg_match($regex, $cor))
        $this->correo = $cor;
    else
        throw new Exception('Error. email vacío');
}
//Setter funcion valEmail
public function setEmail($email){
    $this->valEmail($email);
}
//Creando GETTERS
public function getNombre(){
    return $this->nombre;
}
public function getCorreo(){
    return $this->correo;
}
public function getUsername(){
    return $this->username;
}
public function getTel(){
    return $this->tel;
}
public function getPass(){
    return $this->pass;
}
public function getGen(){
    return $this->gen;
}
public function getRol(){
    return $this->rol;
}
}
?>