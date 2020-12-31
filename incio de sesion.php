<?php

$claveu = $_POST['claveu'];
$contraseña = $_POST['contraseña'];

//conexion a la base de datos
$conexion = mysqli_connect("localhost","root","2506","esxpediente");
$consulta = "SELECT * FROM registro WHERE claveusuario ='$claveu' AND contraseña = '$contraseña'";
$resultado = mysqli_query ($conexion, $consulta);  

$filas=mysqli_num_rows($resultado);
if($filas>0){
    header("location:validacion.html");
}
else{
    echo"Error al ingresar los datos ";
}
mysqli_free_result($resultado);
mysqli_close($conexion);


?>