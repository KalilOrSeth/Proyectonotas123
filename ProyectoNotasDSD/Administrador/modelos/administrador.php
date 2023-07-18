<?php
include_once('../../Conexion.php');

class Administrador extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    // Registrar usuarios
    public function addadmi($Nombreuso, $Apellidouso, $Usuario, $Password, $Perfil, $Estado)
    {
        $statement = $this->db->prepare("INSERT INTO usuarios (Nombreusu, Apellidousu, Usuario, Passwoord, Perfil, Estado)
        VALUES (:Nombreusu, :Apellidousu, :Usuario, :Passwoord, :Perfil, :Estado)");
        $statement->bindParam(':Nombreusu', $Nombreuso);
        $statement->bindParam(':Apellidousu', $Apellidouso);
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':Passwoord', $Password);
        $statement->bindParam(':Perfil', $Perfil);
        $statement->bindParam(':Estado', $Estado);
        
        if ($statement->execute()) {
            echo "Usuario registrado";
            header('Location: ../pages/index.php');
            exit;
        } else {
            echo "Usuario no registrado";
            header('Location: ../pages/agregar.php');
            exit;
        }
    }

    // Funcion para consultar todos los usuarios administradores
    public function getadmin()
    {
        $resultset = [];
        $sql = "SELECT * FROM usuarios WHERE Perfil='Administrador'";
        $result = $this->db->query($sql); 
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch()) {
                $resultset[] = $row;
            }
        }
        return $resultset;
    }

    // Funcion para consultar usuario segun su ID
    public function getidad($id)
    {
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE id_usuario = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);
    
        return $row;
    }
   

    // Actualizar los datos del usuario
    public function updatead($Id, $Nombreuso, $Apellidouso, $Usuario, $Password,$Perfil, $Estado)
    {
        $statement = $this->db->prepare("UPDATE usuarios SET id_usuario=:Id,Nombreusu = :Nombreuso, Apellidousu = :Apellidousu, Usuario = :Usuario,
        Passwoord = :Passwoord, Estado = :Estado, Perfil =:Perfil WHERE id_usuario = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':Nombreuso', $Nombreuso);
        $statement->bindParam(':Apellidousu', $Apellidouso);
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':Passwoord', $Password);
        $statement->bindParam(':Perfil', $Perfil);
        $statement->bindParam(':Estado', $Estado);

        if ($statement->execute()) {
            echo "<scrpt>
            alert('usuario atualizado');
            window.location = '../../Admistrador/pages/index.php';
            </script>";
        } else {
            echo "<scrpt>
            alert('usuario no actualizado');
            window.location = '../../Administrador/pages/editar.php';
            </script>";
        }
    }

    // Funcion para eliminar un usuario
    public function deletead($id)
    {
        $statement = $this->db->prepare("DELETE FROM usuarios WHERE id_usuario = :Id");
        $statement->bindParam(':Id', $id);

        if ($statement->execute()) {
            echo "Usuario eliminado";
            header('Location: ../pages/index.php');
            exit;
        } else {
            echo "Error al eliminar el usuario";
            header('Location: ../pages/eliminar.php');
            exit;
        }
    }
}
?>