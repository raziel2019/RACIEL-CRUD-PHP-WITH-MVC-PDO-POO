<?php
require_once '../../models/Menu.php';
require_once '../../models/Menu_Padre.php';
// ORM
$modMenu = new Menu();
$modMenu_Padre = new Menu_Padre();


$id = $_GET['id'];
$menu = $modMenu->getMenu($id);
$menusHijo = $modMenu->getMenus();
$menu_padre = $modMenu_Padre->getMenuPadre();


require_once '../../views/menu/show.php';
