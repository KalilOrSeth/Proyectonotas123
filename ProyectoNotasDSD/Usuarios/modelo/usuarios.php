<?php
include_once('../../Conexion.php');

class Usuario extends Conexion
{
    public function __construct()
    {
        $this->db=parent::__construct();
    }
  
    public function login($Usuario,$contrasena)
    {
        $statement = $this->db->prepare("SELECT * FROM Usuarios WHERE Usuario=:Usuario AND Passwoord=:contrasena");
        $statement->bindParam(':Usuario',$Usuario);
        $statement->bindParam(':contrasena',$contrasena);
        $statement->execute();
        if($statement->fetch())
        {
            $result=$statement->fetch(PDO::FETCH_ASSOC);
            $_SESSION['Usuario']= $result['Nombreusu']." ".$result['Apellidousu'];
            $_SESSION['id']=$result['id_usuario'];
            $_SESSION['Perfil']=$result['Perfil'];
            $_SESSION['start']=time();
            $_SESSION['expire']=$_SESSION['start']+(1*60);
            return true;
        }
        return false;
    }

    public function validarsesion()
    {
        if($_SESSION[id]==null)
        {
            echo "<script>alert('Validar informacion');
            window.location='../../index.php';</script>";
        }
        $now = time();
        if($now > $_SESSION['expire'])
        {
            session_destroy();
            echo "<script>alert('Debe ingresar nuevamente');
            Window.location='../../index.php';</script>";
        }

    }


    public function cerrasesion()
    {
        session_start();
        session_destroy();
        echo "<script>alert('Confirma el cierre de sesion');
        window.location='../../index.php';</script>";

    }

    public function validarroles()
    {

    }
}




?>