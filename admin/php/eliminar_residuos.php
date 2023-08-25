<?php

require '../conexion/conexion.php';


$Id = $conn->real_escape_string($_POST['Id']);




 $sql= "DELETE FROM residuos WHERE Id=$Id";

if($conn->query($sql)){
    header('Location: ../admin/residuos.php?mensaje=eliminado');
}else{

    header('Location: ../admin/residuos.php?mensaje=error');
    
}





?>