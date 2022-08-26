<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/verMas.css">
    <title>Ver mas</title>
</head>
<body>
    <?php
    if(!isset($casa)){
        require_once "../Modelo/conexionLogin.php";
        require_once "../Modelo/daoCasa.php";
    }else
        require_once "../Modelo/conexionLogin.php";
        require_once "../Modelo/daoCasa.php";
    $id=$_GET['idCasa'];
    $dao = new DaoCasa();
    $casa = $dao->listadoCasa($id);
    
    $select=$pdo->query("SELECT *  FROM casa WHERE idPropiedad =" . $id);
    $perFila=$select->fetch(PDO::FETCH_ASSOC);
    echo $perFila['idPropiedad'];
    
    ?>
</body>
</html>