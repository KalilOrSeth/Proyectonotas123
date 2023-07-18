<?php

include_once('../../Conexion.php');
include_once('../../Materia/modelos/material.php');;

$con =Administrador();

$ID_MATERIA = $_POST["Idmateria"];
$MATERIA = $_POST['Materia'];

$sql= "UPDATE Materia SET Materia='$MATERIA' WHERE Idmateria='$ID_MATERIA'";
$query=mysqli_query($con, $sql);
if($query){
    Header("Location: ../../Materia/pages/index.php");
};

?>