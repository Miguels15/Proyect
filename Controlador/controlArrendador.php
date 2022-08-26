<?php
$nom= isset($_POST['nom'])?$_POST['nom']:"";
$mail= isset($_POST['email'])?$_POST['email']:"";
$user= isset($_POST['username'])?$_POST['username']:"";
$tel= isset($_POST['telefono'])?$_POST['telefono']:"";
$pass= isset($_POST['pass'])?$_POST['pass']:"";
$gen= isset($_POST['genero'])?$_POST['genero']:"";
$rol = "arrendador";
$accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
$action= isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
//variable para login
$usuex;
if($action=="Registrarse como arrendador"){
    require_once '../Modelo/classArrendador.php';
    require_once '../Modelo/insertArrendador.php';
    $con= new conArrendador();
    $arrendador= new Arrendador($nom, $mail, $user, $tel, $pass, $gen, $rol);
    $con->insertar($arrendador);
    header("location: ../index.html");
}

?>
