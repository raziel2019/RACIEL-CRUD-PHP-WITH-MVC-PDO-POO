<?php
require_once '../../models/Menu.php';
require_once '../../models/Menu_Padre.php';
// ORM
$modMenu = new Menu();
$modMenu_Padre = new Menu_Padre();

$menus = $modMenu->getMenus();
$menuPadre = $modMenu_Padre->getMenuPadre();
$nulo = 'NULL';

$nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : "";
$descripcion = isset($_POST['Descripcion']) ? $_POST['Descripcion'] : "";
$dependencia =  (!empty($_POST['Dependencia']))    ?  $_POST['Dependencia']    : NULL ;



if (isset($_POST['crear'])) {
    switch ($modMenu->create($nombre, $descripcion, $dependencia)) {
        case 0:
            header("Location: ../../views/menu/index.php");
            break;
        case 1:
            $mensaje = "Debes introducir la Descripcion";
            break;
        case 2:
            $mensaje = "Debes introducir el Nombre";
            break;
        default:
            $mensaje = "";
            break;
    }
} else {
    $mensaje = "";
}

require_once '../../views/menu/create.php';
