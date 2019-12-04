
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$con=mysqli_connect('localhost','root','','FormularioEmpleados') or die ('error conecion con servidor');
$sql="INSERT INTO bbdatos VALUES('".$_POST["name"]."','".$_POST["email"]."','".$_POST["message"]."')";
$resultado=mysqli_query($con,$sql) or die('Error en query');
mysqli_close($con);
    if($resultado){
        header("Location: index.html");
    }
    else{
        echo "Error sending message";
    }
}
?>