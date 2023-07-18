<?php
include_once('../../Conexion.php');
include_once('../../Estudiantes/modelos/estudiantes.php');

$admin = new Administrador();

$Nombreuso = $_POST['txtnombre'];
$Apellidouso = $_POST['txtapellido'];
$Documentos = $_POST['txtdocumento'];
$Correo = $_POST['txtcorreo'];
$Materia = $_POST['txtmaterias'];
$Docentes = $_POST['txtaDocentes'];
$Decimal = $_POST['txtpromedio'];
$Date = $_POST['txtfecha'];

$admin->addadmi($Nombreuso, $Apellidouso, $Documentos, $Correo, $Materia, $Docentes, $Decimal, $Date);
