<?php
require_once '../../models/Menu.php';

// ORM
$modCli = new Menu();

$id = $_GET['id'];

$modCli->delete($id);
header("Location: ../../views/menu/index.php");

