<?php
if($_POST['txtNombre'] == "Dogez" && $_POST['txtcontrasena'] == "12345")
{
    session_start();
    //DEFINIR VARIABLES DE SESION
    $_SESSION['usuario']=$_POST['txtNombre'];
    $_SESSION['validacion']=true;
    $_SESSION['start']=time();
    $_SESSION['expire']= $_SESSION['start'] + (1*60);

    header("Location: ../../Administrador/pages/index.php");
}else
{
    echo "<script>alert('Datos incorrectos');
    window.location='../../index.php';
    </script>";
}




?>