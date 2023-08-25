<?php

require '../conexion/conexion.php';


$Id = $conn->real_escape_string($_POST['Id']);




 $sql= "DELETE FROM tipos WHERE Id=$Id";

if($conn->query($sql)){
    header('Location: ../admin/tipos.php?mensaje=eliminado');
}else{

    header('Location: ../admin/tipos.php?mensaje=error');
    
}





?>