<?php


require '../conexion/conexion.php'; 
session_start();

$usuario = 1;# $_SESSION['codigo'];



$residuo = $conn->real_escape_string($_POST['residuo']);
$cantidad = $conn->real_escape_string($_POST['cantidad']);
$fechaRegistro = date("Y-m-d");

$pUnita = "SELECT precio FROM productos WHERE Id = '$residuo'";
$ResultPUnit = $conn->query($pUnita);
$datoPUnit = mysqli_fetch_array($ResultPUnit);
$PUnitar = $datoPUnit['precio'];

 $precioT = $PUnitar * $cantidad;

$sql = "INSERT INTO compra (cantidad,FechaRegistro,precio,producto,Cliente)
    VALUES ('$cantidad','$fechaRegistro','$precioT','$residuo','$usuario')";

if ($conn->query($sql)) {
    $id = $conn->insert_id;

    header('Location: ../users/compras.php?mensaje=insertado');
} else {
    header('Location: ../users/compras.php?mensaje=error');
}
