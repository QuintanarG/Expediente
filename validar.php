<?php

$matricula = $_POST['matricula'];


//conexion a la base de datos
$conexion = mysqli_connect("localhost","root","2506","esxpediente");
$consulta = "SELECT * FROM registro WHERE matricula ='$matricula'";
$resultado = mysqli_query ($conexion, $consulta);  

$filas=mysqli_num_rows($resultado);
if($filas>0){
    header("location:menu.html");
}
else{
    echo"Error al ingresar los datos ";
}
mysqli_free_result($resultado);
mysqli_close($conexion);