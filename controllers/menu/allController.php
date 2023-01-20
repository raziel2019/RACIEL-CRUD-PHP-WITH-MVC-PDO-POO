<?php
require_once '../../models/Menu.php';
require_once '../../models/Menu_Padre.php';
// ORM
$modMenu = new Menu();
$modMenuPadre = new Menu_Padre();

$menus = $modMenu->getMenus();
$menu_padre = $modMenuPadre->getMenuPadre();

require_once '../../views/menu/all.php';
