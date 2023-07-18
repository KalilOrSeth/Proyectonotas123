<?php
include_once('../../Conexion.php');

class Administrador extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    // Registrar usuarios
    public function addadmi($Nombredoc, $Apellidodoc, $Documentodoc, $Correodoc, $Materiadoc, $Notas)
    {
        $statement = $this->db->prepare("INSERT INTO docentes (Nombredoc, Apellidodoc, Documentodoc, Correodoc, Materiadoc, Notas)
        VALUES (:Nombredoc, :Apellidodoc, :Documentodoc, :Correodoc, :Materiadoc, :Notas)");
        $statement->bindParam(':Nombredoc', $Nombredoc);
        $statement->bindParam(':Apellidodoc', $Apellidodoc);
        $statement->bindParam(':Documentodoc', $Documentodoc);
        $statement->bindParam(':Correodoc', $Correodoc);
        $statement->bindParam(':Materiadoc', $Materiadoc);
        $statement->bindParam(':Notas', $Notas);
        
        if ($statement->execute()) {
            echo "Usuario registrado";
            header('Location: ../../administrador/pages/index.php');
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
        $sql = "SELECT * FROM docentes WHERE Nombredoc='Administrador'";
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
        $statement = $this->db->prepare("SELECT * FROM docentes WHERE id_docente = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    // Actualizar los datos del usuario
    public function updatead($Nombredoc, $Apellidodoc, $Documentodoc, $Correodoc, $Materiadoc, $Notas)
    {
        $statement = $this->db->prepare("UPDATE docentes SET Nombredoc = :Nombredoc, Apellidodoc = :Apellidodoc, Documentodoc = :Documentodoc,
        Correodoc = :Correodoc, Materiadoc = :Materiadoc WHERE id_usuario = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':Nombreuso', $Nombreuso);
        $statement->bindParam(':Apellidousu', $Apellidouso);
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':Passwoord', $Password);
        $statement->bindParam(':Estado', $Estado);

        if ($statement->execute()) {
            echo "El usuario se actualizó correctamente";
            header('Location: ../pages/index.php');
            exit;
        } else {
            header('Location: ../pages/editar.php');
            exit;
        }
    }

    // Funcion para eliminar un usuario
    public function deletead($id)
    {
        $statement = $this->db->prepare("DELETE FROM docentes WHERE id_docente = :Id");
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