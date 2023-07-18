<?php
include_once('../../Conexion.php');
include_once('../../Materia/modelos/material.php');
//crear el objeto
$admin= new Administrador();

$Nombrema =$_POST['txtnombre'];
$Passwordusu=MD5($_POST['txtcontrasena']);
$admin->  addadmi($Nombrema);

?>