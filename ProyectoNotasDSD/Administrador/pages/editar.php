<?php
include_once('../modelos/validar.php');

?>

<html lang="en">
<head>
  <title>Actualizar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-image:  linear-gradient(100deg, #cbffdc 0, #baffdc 16.67%, #abffda 33.33%, #9df2d5 50%, #92e3cf 66.67%, #89d5c9 83.33%, #83c9c4 100%)">
    <nav>
        <ul class="nav">
            <li class="nav-item" style="background-color: aliceblue; border: solid 1px;position: relative; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                <a class="nav-link" href="#">Materias</a>
            </li>
            <li class="nav-item" style="background-color: aliceblue; border: solid 1px;position: relative; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                <a class="nav-link" href="../../docentes/pages/agregar.php">Docentes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="background-color: aliceblue; border: solid 1px;position: relative; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" href="">Estudiantes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="background-color: red; border: solid 1px;position: relative; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" href="#">Cerrar Sesion</a>
            </li>
        </ul>
    </nav>

<h2>Sesion Actual: <?php echo $_SESSION["usuario"]?></h2>
<h1>ACTUALIZAR</h1>
<?php
include_once('../../Conexion.php');
include_once('../modelos/administrador.php');
$Id = $_GET['id'];

$admin = new Administrador();
$row = $admin->getidad($Id);
if($row){


?>

<form action="../../Administrador/controladores/actualizarusuario.php" method="POST">
    <input type="hidden" name="Id" value="<?php echo $Id?>">
  <label for="fname">NOMBRE</label><br>
  <input type="text" placeholder="ingresar nombre" id="Nombreusu'" name="txtnombre"value="<?php echo $row['Nombreusu'] ?>"><br>
  <label for="fname">APELLIDO:</label><br>
  <input type="text" placeholder="ingresar apellido" id="ape" name="txtapellido"value="<?php echo $row ['Apellidousu'] ?>" ><br>
  <label for="lname">USUARIO</label><br>
  <input type="text" placeholder="ingresar usuario" id="usu" name="txtusuario"value="<?php echo $row ['Usuario'] ?>"><br>
  <label for="lname">CONTRASEÑA:</label><br>
  <input type="password" placeholder="ingresar contraseña" id="cont" name="txtcontrasena"value="<?php echo $row ['Passwoord'] ?>"><br><br>
  

  <div class="form-group">
    <p> PERFIL:
      <label for="perfil"></label>
      <select name="txtperfil"value="<?php echo $row ['Perfil']?>">
        <option></option>
        <option value="Administrador">ADMINISTRADOR</option>
        <option value="Docentes">DOCENTES</option>
</select>
</p>
<div class="form-group">
    <p> ESTADO:
      <label for="estado"></label>
      <select name="txtestado"value="<?php echo $row ['Estado']?>">
        <option></option>
        <option value="Activo">ACTIVO</option>
        <option value="Inactivo">INACTIVO</option>
</select>
</p>

<input type="submit" value="ACTUALIZAR" id="boton"  ><br>

<?php } ?>
</form> 


</body>
</html>