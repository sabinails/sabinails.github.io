<?php
$localhopst = "localhost";
$user = "root";
$password = "";
$db = "d";

$conexion = new mysqli($localhost,$user,$password,$db) or die ("error");

$marca = $_POST["marca"];
$existencia = $_POST["existencia"];
$precio = $_POST["precio"];
$codigo = $_POST["codigo"];


$insercion = "INSERT INTO i(marca,existencia,precio,codigo) VALUES ('$marca','$existencia','$precio','$codigo')";

$ejecucion = mysqli_query($conexion, $insercion) or die ("no funciona");

echo "<script> location.href = 'registro.html'; </script>"; 
?>