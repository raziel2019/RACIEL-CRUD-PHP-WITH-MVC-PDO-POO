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
            foreach ($menusHijo as $menus) :
        ?>
          <?php 
       
       
       foreach ($menu_padre as $padre) :
                if ($menus->Dependencia==$padre->Menu_id)
                if ($padre->id == 1)
                echo "<li><a class='dropdown-item' href='../../controllers/menu/showController.php?id=$menus->id'>$menus->Nombre</a></li>";
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
            foreach ($menusHijo as $menus) :
        ?>
          <?php 
       
       
       foreach ($menu_padre as $padre) :
                if ($menus->Dependencia==$padre->Menu_id)
                if ($padre->id == 2)
                echo "<li><a class='dropdown-item' href='../../controllers/menu/showController.php?id=$menus->id'>$menus->Nombre</a></li>";
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
    <p class="d-inline-block text-white p-2 fs-5">Listado de <?php echo $menu->Nombre; ?></p>    
	</div>
			<label for="dni"><?php echo $menu->Descripcion; ?></label>
			<br>		
			<a href="../../views/menu/index.php" class="btn btn-primary">Volver</a>

	  </div>
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   </body>
</html>