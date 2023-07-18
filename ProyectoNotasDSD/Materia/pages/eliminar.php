<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editar Materia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>


<form  action="../../Materias/controladores/eliminarmateria.php " method="POST">
      
     <input type="number" id="Id"name="Idmaterias" class="form-control" placeholder="Id"  value="<?= $row['Idmateria']?>" style="height: 40px;width: 250px;border: solid 1px;left: 550px;position: relative;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
     <br>
     <input type="number" id="Id"name="Materia" class="form-control" value="<?= $row['Materia']?>" placeholder="Nombre Materia" style="height: 40px;width: 250px;border: solid 1px;left: 550px;position: relative;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
     <br>
     
     <input name="values" type="submit"class="form-control" placeholder="Enviar"style="height: 40px;width: 250px;border: solid 1px;left: 550px;position: relative;
   font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
   
</form>
    
    
</body>
</html>