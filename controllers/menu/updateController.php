<?php
require_once '../../models/Menu.php';
require_once '../../models/Menu_Padre.php';
// ORM
$modMenu = new Menu();
$modMenu_Padre = new Menu_Padre();

$id = $_GET['id'];

if (isset($_POST['modificar'])) {
    $modMenu->update($id, $_POST['Nombre'], $_POST['Descripcion'], (!empty($_POST['Dependencia']))    ?  $_POST['Dependencia']    : NULL );
    header("Location: ../../views/menu/index.php");
} 
$menus = $modMenu->getMenu($id);
$menuPadre = $modMenu_Padre->getMenuPadre();

require_once '../../views/menu/update.php';
