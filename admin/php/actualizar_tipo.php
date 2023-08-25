<?php 

require '../conexion/conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];




$sql= "UPDATE  tipos SET Nombre='$nombre' WHERE Id=$id";


if($conn->query($sql)){
    $id=$conn->insert_id;

    header('Location: ../admin/tipos.php?mensaje=actualizado'); 
}else{
    header('Location: ../tipos.php?mensaje=error');
}