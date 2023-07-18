<?php
include_once('../../Conexion.php');
include_once('../../Administrador/modelos/administrador.php');
//crear el objeto
$admin= new Administrador();

$Nombreuso =$_POST['txtnombre'];
$Apellidouso=$_POST['txtapellido'];
$Usuario=$_POST['txtusuario'];
$Passwordusu=($_POST['txtcontrasena']);

$Perfil=$_POST['txtperfil'];
$Estadouso=$_POST['txtestado'];
$admin->  addadmi($Nombreuso,$Apellidouso,$Usuario,$Passwordusu,$Perfil,$Estadouso);

?>