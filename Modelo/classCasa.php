<?php
class Casa{

public $nom;
public $direc;
public $precio;
public $depa;
public $descu;

public function __construct($nom, $direc, $precio, $depa, $descu){
    if(!empty($nom))
        $this->nom = $nom;
    else
        throw new Exception('Error. Nombre de casa incorrecto');
    if(!empty($direc))
        $this->direc = $direc;
    else
        throw new Exception('Error. dirección vacía');

    if(!empty($precio))
        $this->precio = $precio;
    else
        throw new Exception('Error. precio vacío');

    if(!empty($depa))
        $this->depa = $depa;
    else
        throw new Exception('Error. departamento vacio');
    if(!empty($descu))
        $this->descu = $descu;
    else
        throw new Exception('Error. descripcion vacia');
       
      
}   

//Creando GETTERS
public function getNombre(){
return $this->nom;
}
public function getDirec(){
return $this->direc;
}
public function getPrecio(){
return $this->precio;
}
public function getDep(){
return $this->depa;
}
public function getDesc(){
return $this->descu;
}

}

?>