
<?php
require_once '../Modelo/conexionClass.php';
$conn= mysqli_connect('localhost', 'property', '123456', 'property-deluxe' );
$nom= isset($_POST['nomp'])?$_POST['nomp']:"";
$direc=isset($_POST['direc'])?$_POST['direc']:"";
$precio=isset($_POST['precio'])?$_POST['precio']:"";
$depa=isset($_POST['depa'])?$_POST['depa']:"";
$descu=isset($_POST['descu'])?$_POST['descu']:"";
$id = isset($_SESSION['id'])?$_SESSION['id']:"";

$idU= isset($_POST['elid'])?$_POST['elid']:"";

$IMG = $_FILES['images']['tmp_name']; //así obtiene el archivo FILE
    $IMGNAME = $_FILES['images']['name'];     //así obtiene el nombre del archivo FILE
    $RUTA = "../portada/".$IMGNAME;       //aqui especifica la ruta en donde cargar la imagen

    //ASI SUBE EL ARCHIVO AL SERVIDOR
	  if (!move_uploaded_file($IMG, $RUTA)) {
		  $return = false;
	  }
if (!$conn) {
    echo "Error: No se pudo conectar a MySQL. Error " . mysqli_connect_errno() . " : ". mysqli_connect_error() . PHP_EOL;
    die;
}else{
    $sql = "UPDATE casa SET nom=:nom, direc=:direc,  precio=:precio, depa=:depa, descu=:descu, foto=:foto  WHERE idPropiedad=:idCasa";
    try{
        $cn = new Conn();        
        $dbh = $cn->getConnect();
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':idCasa',$idU);
        $stmt->bindParam(':nom',$nom);
        $stmt->bindParam(':direc',$direc);
        $stmt->bindParam(':precio',$precio);
        $stmt->bindParam(':depa',$depa);
        $stmt->bindParam(':descu',$descu);
        $stmt->bindParam(':foto',$IMGNAME);
        
        $stmt->execute();
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    mysqli_query($conn, $sql);
    $lastid = mysqli_insert_id($conn); 
    echo "Ultimo ID : ".$idU; 
    //codigo para insertar la imagenes en la tabla
    $imageCount= count($_FILES['image']['name']);

   for($i=0; $i<$imageCount; $i++){
       $imageName= $_FILES['image']['name'][$i];
       $imageTempName= $_FILES['image']['tmp_name'][$i];
       $targetPath= "../upload/".$imageName;
       if(move_uploaded_file($imageTempName, $targetPath)){
        $sqlImg= "INSERT INTO imagenes(image, id_Pro)VALUES('$imageName', '$idU')";

        $result = mysqli_query($conn, $sqlImg);   
       }
   }
   if($result){
    header("Location: ../vista/vistaAdminP.php");
   }

}