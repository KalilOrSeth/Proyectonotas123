<?php

include_once('../../Conexion.php');
include_once('../../Materia/modelos/material.php');
$con = Administrador();

$ID_MATERIA=$_GET["Idmaterias"];

$sql="DELETE FROM materias WHERE Idmateria='$ID_MATERIA'";
$query = mysqli_query($con, $sql);

if($query){
    print"<script>alert(\"Materia eliminada\");
    window.location='../../pages/index.php'</script>";
}else{
    print"<script>alert(\"Materia no eliminada\");
    window.location='../../Materia/pages/eliminarmateria.php'</script>";
}

?>