
<?php
class Usuario{

    public $nom;
    public $mail;
    public $user;
    public $tel;
    public $pass;
    public $gen;
    public $rol;
    public function __construct($nom, $cor, $user, $tel, $pass, $gen, $rol){
        if(!empty($nom))
            $this->nom = $nom;
        else
            throw new Exception('Error. Nombre incorrecto');
            $this->valEmail($cor);
        if(!empty($user))
            $this->user = $user;
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
            throw new Exception('Error. rol vacío');
    }   


private function valEmail($cor){
    $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
    if(!empty($cor) && preg_match($regex, $cor))
        $this->mail = $cor;
    else
        throw new Exception('Error. email vacío');
}
//Setter funcion valEmail
public function setEmail($email){
    $this->valEmail($email);
}
//Creando GETTERS
public function getNombre(){
    return $this->nom;
}
public function getCorreo(){
    return $this->mail;
}
public function getUsername(){
    return $this->user;
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