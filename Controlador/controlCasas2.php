<?php
$conn= mysqli_connect('localhost', 'property', '123456', 'property-deluxe' );
$nom= isset($_POST['nomp'])?$_POST['nomp']:"";
$direc=isset($_POST['direc'])?$_POST['direc']:"";
$precio=isset($_POST['precio'])?$_POST['precio']:"";
$depa=isset($_POST['depa'])?$_POST['depa']:"";
$descu=isset($_POST['descu'])?$_POST['descu']:"";
$id = isset($_GET['id'])?$_GET['id']:"";
$accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
$idU= isset($_POST['idPropiedad'])?$_POST['idPropiedad']:"";


$enlace ="<a href='../Controlador/controlador3.php?accion=Modificar&id=";
if(  $accion=="eliminar"){
   echo $id;
   echo $accion;
   require_once '../Modelo/daoCasa.php';
    $dao = new DaoCasa();
    $dao->eliminar($id);
   echo "<p>Registro Eliminado exitosamente...</p>";
    echo "<a href='../Vista/vistaAdminP.php'>Regresar</a>";
}

if($id != "" && $accion=="modisficar"){
    echo "<a href='../controlador2.php'>Regresar</a>";
}


if($id != "" && $accion=="modisficar"){
    require_once '../Modelo/daoCasa.php';
    $dao = new DaoCasa();
    $cliente = $dao->mostrarCasa($id); 
    $html = <<<'EOD'
    <!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../Estilos/Ctrlcliente/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<title>Cliente</title>
</head>
<body>
<br><h1>Modificar Propiedad</h1>
EOD;
echo $html;
    echo "<div class='container'>    
    <form action='controlador3.php' method='post' enctype='multipart/form-data'>
    <div class='form-group mb-2 row'>            
        <div class='col'>
        <label>
                Imagen actual de portada:
        </label>
        <img src='../portada/".$cliente['foto']."' alt='' width='150px'>
        <input class='form-control' size='20' type='text' name=''  required value='".$cliente["foto"]."' readonly />
        </div>
        
    </div>
    <input type='hidden' name='idPropiedad' required value='".$cliente["idPropiedad"]."'/>


    <div class='form-group  mb-2 row'>
    <div class='col'>
        <label>
            Información (Nombre):
        </label>
        <input type='text' class='form-control' name='nomp' required value='".$cliente["nom"]."'  />
    </div>
    </div>

    <div class='form-group  mb-2 row'>
    <div class='col'>
        <label>
        Dirección:
        </label>
        <textarea class='form-control' name='descu' id='text'te cols='30' rows='10' placeholder='".$cliente["descu"]."' value='".$cliente["descu"]."' required>".$cliente["descu"]."</textarea>
        
    </div>
    </div>

    <div class='form-group  mb-2 row'>
    <div class='col'>
        <label>
            Descripción:
        </label>
        <input type='text' autocomplete='off' class='form-control' name='direc' required placeholder='".$cliente["direc"]."' value='".$cliente["direc"]."' />
        
    </div>
    </div>

    <div class='form-group  mb-2 row'>
    <div class='col'>
        <label>
        Precio:
        </label>
        <input type='number' name='precio' autocomplete='off' placeholder='".$cliente["precio"]."' value='".$cliente["precio"]."'>
    </div>
    </div>

    
    <div class='form-group  mb-2 row'>
    <div class='col'>
        <label>
            departamento actual:
        </label>
        <input type='text' name='depa' class='form-control' required value='".$cliente["depa"]."' readonly>
    </div>
    <div class='col'>
        <label>
        Departamento Nuevo:
        </label>
        <select name='depa'>
        <option selected disabled=''>Departamento en el que se ubica.</option>
        <option value='Ahuachapán'>Ahuachapán</option>
        <option value='Cabañas'>Cabañas</option>
        <option value='Chalatenango'>Chalatenango</option>
        <option value='Cuscatlán'>Cuscatlán</option>
        <option value='La Libertad'>La Libertad</option>
        <option value='Morazán'>Morazán</option>
        <option value='La Paz'>La Paz</option>
        <option value='Santa Ana'>Santa Ana</option>
        <option value='San Miguel'>San Miguel</option>
        <option value='San Salvador'>San Salvador</option>
        <option value='San Vicente'>San Vicente</option>
        <option value='Sonsonate'>Sonsonate</option>
        <option value='La Unión'>La Unión</option>
        <option value='Usulután'>Usulután</option>
    </select>
        
    </div>
    </div>
    
    <br>
    <div class='form-group  mb-2 row'>
    <div class='col'>
        <label>
           Cambiar Imagen de portada:
        </label>
        <input type='file' name='images' accept='image/*'>
    </div>
    </div>
    <br>

    
    
    
    
    <fieldset>
    <input type='submit' name='accion' value='Modificar' class='botonR' required>
    
    <td>".$enlace . $cliente['idPropiedad'] ."'><i class='fas fa-edit'></i></a></td>
    
    </fieldset>
    </form>";
    
    
}


?>