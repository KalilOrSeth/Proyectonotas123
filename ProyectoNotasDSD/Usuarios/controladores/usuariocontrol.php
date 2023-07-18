<?php
include_once('../../Conexion.php');
include_once('../modelo/usuarios.php');

if($_POST)
{
    $Usuariousu = $_POST['txtNombre'];
    $Passwordusu = $_POST['txtcontrasena'];

    $modelo = new Usuario();

if($modelo->login($Usuariousu,$Passwordusu))
{
    header('Location:../../Adminitrador/pages/index.php');
    
}else{
    header('Location:../../index.php');
}


}else{
    echo "<script>alert('Datos incorrestos');
    window.location='../../index.php';</script>";
}




?>