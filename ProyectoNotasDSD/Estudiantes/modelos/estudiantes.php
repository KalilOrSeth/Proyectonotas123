<?php
include_once('../../Conexion.php');

class Administrador extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function addadmi($NombreEst, $ApellidoEst, $DocumentoEs, $Correo, $MateriaEs, $Docente, $Promedio, $FRegistro)
    {
        $statement = $this->db->prepare("INSERT INTO estudiantes (NombreEst, ApellidoEst, DocumentoEs, Correo, MateriaEs, Docente, Promedio, FRegistro)
        VALUES (:NombreEst, :ApellidoEst, :DocumentoEs, :Correo, :MateriaEs, :Docente, :Promedio, :FRegistro)");
        $statement->bindParam(':NombreEst', $NombreEst);
        $statement->bindParam(':ApellidoEst', $ApellidoEst);
        $statement->bindParam(':DocumentoEs', $DocumentoEs);
        $statement->bindParam(':Correo', $Correo);
        $statement->bindParam(':MateriaEs', $MateriaEs);
        $statement->bindParam(':Docente', $Docente);
        $statement->bindParam(':Promedio', $Promedio);
        $statement->bindParam(':FRegistro', $FRegistro);

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

    public function getadmin()
    {
        $resultset = [];
        $sql = "SELECT * FROM estudiantes WHERE NombreEst='Administrador'";
        $result = $this->db->query($sql);
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch()) {
                $resultset[] = $row;
            }
        }
        return $resultset;
    }

    public function getidad($id)
    {
        $statement = $this->db->prepare("SELECT * FROM estudiantes WHERE IdEstudiante = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    public function updatead($Id, $NombreEst, $ApellidoEst, $DocumentoEs, $Correo, $MateriaEs, $Docente, $Promedio, $FRegistro)
    {
        $statement = $this->db->prepare("UPDATE estudiantes SET NombreEst = :NombreEst, ApellidoEst = :ApellidoEst, DocumentoEs = :DocumentoEs, Correo = :Correo, MateriaEs = :MateriaEs, Docente = :Docente, Promedio = :Promedio, FRegistro = :FRegistro WHERE IdEstudiante = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':NombreEst', $NombreEst);
        $statement->bindParam(':ApellidoEst', $ApellidoEst);
        $statement->bindParam(':DocumentoEs', $DocumentoEs);
        $statement->bindParam(':Correo', $Correo);
        $statement->bindParam(':MateriaEs', $MateriaEs);
        $statement->bindParam(':Docente', $Docente);
        $statement->bindParam(':Promedio', $Promedio);
        $statement->bindParam(':FRegistro', $FRegistro);

        if ($statement->execute()) {
            echo "<script>
            alert('Usuario actualizado');
            window.location = '../../Administrador/pages/index.php';
            </script>";
        } else {
            echo "<script>
            alert('Error al actualizar el usuario');
            window.location = '../../Administrador/pages/editar.php';
            </script>";
        }
    }

    public function deletead($id)
    {
        $statement = $this->db->prepare("DELETE FROM estudiantes WHERE IdEstudiante = :Id");
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

    public function getEstudiantes()
    {
        $statement = $this->db->prepare("SELECT * FROM estudiantes");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deleteEstudiante($idEstudiante)
    {
        $statement = $this->db->prepare("DELETE FROM estudiantes WHERE idEstudiante = :idEstudiante");
        $statement->bindParam(':idEstudiante', $idEstudiante);
        $statement->execute();
    }
}

?>
