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


            <body>
        <div class="users-form">
            <h1 class="Titulo"> Editar Materia</h1>
            <form action="../../Materia/editarmateria" method="POST">
                <input type="Number" name="Idmateria" placeholder="Id de la materia" value="<?= $row['Idmateria']?>"style="height: 40px;width: 250px;border: solid 1px;left: 550px;position: relative;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                <p class= "MiniT">MATERIA</p>
                <input type="text" name="Materia" placeholder="Materia" value="<?= $row['Materia']?>"style="height: 40px;width: 250px;border: solid 1px;left: 550px;position: relative;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">

                <input class="SubmM" type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>