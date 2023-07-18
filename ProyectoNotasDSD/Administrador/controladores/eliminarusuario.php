<?php
include_once('../../Conexion.php');
include_once('../../Administrador/modelos/administrador.php');
$admin = new Administrador();
//Verficar envio del formulario
if($_SERVER['REQUEST_METHOD']=='POST')
{
$Id = $_POST['id'];
$result = $admin->deletead($Id);
if($result)
{
    print"<script>alert(\"Usuario actualizado\");
    window.location='../../Administrador/pages/index.php'</script>";
}
else
{
    print"<script>alert(\"Usuario actualizado\");
    window.location='../../Administrador/pages/eliminar.php'</script>";
}
}
?>