<?php 
require_once('../../Conexion.php');
require_once('../../Administrador/modelos/administrador.php');
if($_POST){
    $admin = new Administrador();
    $id = $_POST['Id'];
     $Nombreusu= $_POST['txtnombre'];
     $Apellidousu=$_POST['txtapellido'];
     $Usuario=$_POST['txtusuario'];
     $Passwordusu=$_POST['txtcontrasena'];
     $Perfil=$_POST['txtperfil'];
     $Estadousu= $_POST['txtestado'];

     $admin->updatead($id,$Nombreusu,$Apellidousu,$Usuario,$Passwordusu,$Perfil,$Estadousu);
     if($admin){
        print"<script>alert(\"Usuario actualizado\");
        window.location='../../Administrador/pages/index.php'</script>";

     }else{
        print"<script>alert(\"usuario no actualizado\");
        window.location='../../Administrador/pages/editar.php'</script>";
     }

}
?>