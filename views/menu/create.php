<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Menu</title>
</head>
<body>
<div class="container mt-5">
    <h1>Crear usuarios</h1>
        <form action="" method="post">
        <label for="fichaTecnica">Menu Padre</label>
            <select class="form-control" name="Dependencia">
            <option value="<?php echo NULL ?>">Sin menu padre</option>
            <?php
              
              foreach($menuPadre as $dependencia) :
            ?>
            <option value="<?php echo $dependencia->id?>"><?php echo "$dependencia->Nombre";?></option>
            <?php
              endforeach;
            ?> 
            </select><br>
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="Nombre" id="nombre" value="<?php echo $nombre; ?>" maxlength="80"><br>

            <label for="descripcion">Descripcion:</label>
            <input type="text" class="form-control" name="Descripcion" id="descripcion" value="<?php echo $descripcion; ?>" maxlength="100"><br>

          
            <a href="../../views/menu/index.php" class="btn btn-danger">Cancelar</a>
            <input type="submit" name="crear" value="Insertar" class="btn btn-primary float-end"><br><br>
            <?php echo $mensaje; ?>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
