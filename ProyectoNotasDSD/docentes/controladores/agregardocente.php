<?php
include_once('../../Conexion.php');
include_once('../../docentes/modelos/docente.php');
//crear el objeto
$admin= new Administrador();

$Nombreuso =$_POST['txtnombre'];
$Apellidouso=$_POST['txtapellido'];
$correo=$_POST['txtcorreo'];
$documento=$_POST['txtdocumento'];
$notas=$_POST['txtnotas'];
$materia=$_POST['txtmateria'];

$admin->  addadmi($Nombreuso, $Apellidouso, $documento, $correo,  $notas , $materia);



?>