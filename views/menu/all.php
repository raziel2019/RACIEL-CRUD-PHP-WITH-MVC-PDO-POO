<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Evaluación técnica PHP</title>
</head>
<body>

   
    <nav>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active">MENUS</a>
            </li>

        
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Catalogos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php 
            foreach ($menus as $menu) :
        ?>
          <?php 
       
       
       foreach ($menu_padre as $padre) :
                if ($menu->Dependencia==$padre->Menu_id)
                if ($padre->id == 1)
                echo "<li><a class='dropdown-item' href='../../controllers/menu/showController.php?id=$menu->id'>$menu->Nombre</a></li>";
            endforeach; 
       
       ?>
        
         
            <?php 
        endforeach; 
        ?>
        </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         Marcas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php 
            foreach ($menus as $menu) :
        ?>
          <?php 
       
       
       foreach ($menu_padre as $padre) :
                if ($menu->Dependencia==$padre->Menu_id)
                if ($padre->id == 2)
                echo "<li><a class='dropdown-item' href='../../controllers/menu/showController.php?id=$menu->id'>$menu->Nombre</a></li>";
            endforeach; 
       
       ?>
        
         
            <?php 
        endforeach; 
        ?>
          </ul>
        </li>
        </ul>
    </nav>
    <div class="container">
    <div class="bg-primary mt-5">
    <p class="d-inline-block text-white p-2 fs-5">Menu</p>    
    <a class="d-inline p-2 mt-2 me-3 float-end btn btn-success text-white" href="../../controllers/menu/createController.php">+ Nuevo</a>

</div>
        <table class="table">
        <thead class="table-secondary">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Menu Padre</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        <?php 
            foreach ($menus as $menu) :
        ?>
            <tr>
            <td><?php echo htmlspecialchars($menu->id);     ?></td>
                <td><?php echo htmlspecialchars($menu->Nombre);     ?></td>
                <td><?php    
                
                            if($menu->Dependencia == 1){
                                echo "Catalogos";
                            } else if ($menu->Dependencia == 2) {
                                echo "Marcas";
                            } else { 
                                echo "";
                            }
                            ?>
                </td>              
                <td><?php echo htmlspecialchars($menu->Descripcion);     ?></td>
                 <td>
                    <a href="../../controllers/menu/updateController.php?id=<?php echo $menu->id; ?>"><img style="margin-right:10px;" src="../../recursos/edit.png" width="30px" height="30px">Editar</a>
                    <a href="../../controllers/menu/deleteController.php?id=<?php echo $menu->id; ?>"><img src="../../recursos/delete.png" width="30px" height="30px">Eliminar</a>
                </td>

            </tr>
        <?php 
            endforeach; 
        ?>
    </table><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>