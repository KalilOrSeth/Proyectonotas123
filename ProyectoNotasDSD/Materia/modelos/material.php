<?php
include_once('../../Conexion.php');

class Administrador extends conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    // Registrar usuarios
    public function addadmi($Materia)
    {
        // Crear sentencia SQL
        $statement = $this ->db->prepare("INSERT INTO materias(Materia)
        VALUES(:Materia)");
        $statement->bindParam(':Materia',$Materia);
        
        if ($statement->execute()) {
            echo "Materia registrada";
            header('Location: ../pages/index.php');
        } else {
            echo "Materia no registrado";
            header('Location: ../pages/agregar.php');
        }
    }

    // Funcion para consultar todos los usuarios administradores
    public function getadmin()
    {
        
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM materias 
        WHERE Materia ='Administrador'");
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
    }

    // Funcion para consultar usuario segun su ID
    public function getidad($id)
    {
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM materias WHERE Idmateria = :id AND Materia = 'Administrador'");
        $statement->bindParam(':id', $id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
    }

    // Actualizar los datos del usuario
    public function updatead($Id,$Materia)
    {
        $statement = $this->db->prepare("INSERT INTO materias(Materia)
        VALUES(:Materia)");
        $statement->bindParam(':Materia',$Materia);

        if ($statement->execute()) {
            echo "El usuario se actualizó correctamente";
            header('Location: ../pages/index.php');
        } else {
            header('Location: ../pages/editar.php');
        }
    }

    // Funcion para eliminar un usuario
    public function deletead($id)
    {
        $statement = $this->db->prepare("DELETE FROM materias Where Idmateria =:Id ");
        $statement->bindParam(':Id',$Id);

        if ($statement->execute()) {
            echo "Usuario eliminado";
            header('Location: ../pages/index.php');
        } else {
            echo "Error al eliminar el usuario";
            header('Location: ../pages/eliminar.php');
        }
    }
}
?>