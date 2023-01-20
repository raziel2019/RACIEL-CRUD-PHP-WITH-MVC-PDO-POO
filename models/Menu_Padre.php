<?php

class Menu_Padre
{
    private $db;
    private $menuPadre;
    //Constructor
    public function __construct()
    {
        require_once 'Conectar.php';

        $this->db = Conectar::conexion();

        $this->menuPadre = array();
    }
    // Función del All
    public function getMenuPadre()
    {
        try {
            $stmt = $this->db->query("SELECT * FROM menu_padre");

            while ($filas = $stmt->fetch(PDO::FETCH_OBJ)) {
                $this->menuPadre[] = $filas;
            }
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }

        return $this->menuPadre;
    }
   
}
