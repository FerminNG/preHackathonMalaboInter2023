<?php


require '../conexion/conexion.php';

$nombre= $conn->real_escape_string($_POST['nombre']);
$descripcion= $conn->real_escape_string($_POST['descripcion']);
$tipos= $conn->real_escape_string($_POST['tipos']);

    $sql= "INSERT INTO residuos (Nombre,Descripcion,Tipo)
    VALUES ('$nombre','$descripcion','$tipos')";
   
    if($conn->query($sql)){
        $id=$conn->insert_id;

        header('Location: ../admin/residuos.php?mensaje=insertado'); 
    }else{
        header('Location: ../admin/residuos.php?mensaje=error'); 
    }
    
   




