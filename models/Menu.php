<?php

class Menu
{
    private $db;
    private $menus;
    private $menu;
    //Constructor
    public function __construct()
    {
        require_once 'Conectar.php';

        $this->db = Conectar::conexion();

        $this->menus = array();
        $this->menu = array();
    }
    //Función del All
    public function getMenus()
    {
        try {
            $stmt = $this->db->query("SELECT * FROM menu");

            while ($filas = $stmt->fetch(PDO::FETCH_OBJ)) {
                $this->menus[] = $filas;
            }
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }

        return $this->menus;
    }
    //Función del Show
    public function getMenu($id)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM menu WHERE id = ? ");
            $stmt->bindParam(1, $id);
            $stmt->execute();
            $this->menu = $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die('Error ' . $e->getMessage());
        }

        return $this->menu;
    }
    //Función del Create
    public function create($Nombre, $Descripcion, $Dependencia)
    {
        if (!empty($Nombre)) {
            if (!empty($Descripcion)) {
                #region create-con-array
                try {
                    $stmt = $this->db->prepare("INSERT INTO menu(Nombre, Descripcion, Dependencia) VALUES (?, ?, ?)");
                    $stmt->execute(array($Nombre, $Descripcion, $Dependencia));
                } catch (Exception $e) {
                    die('Error ' . $e->getMessage());
                }
                $result = 0;
            } else {
                $result = 1;
            }
        } else {
            $result = 2;
        }
        return $result;
    }
    //Función del Update
    public function update($id, $Nombre, $Descripcion, $Dependencia)
    {
        try {
            $stmt = $this->db->prepare("UPDATE menu SET Nombre = ?, Descripcion = ?, Dependencia = ? WHERE id = ?");
            $stmt->execute(array($Nombre, $Descripcion, $Dependencia, $id));
        } catch (Exception $e) {
            die('Error' . $e->getMessage());
        }
    }
    //Función del Delete
    public function delete($id)
    {
        try {
            $stmt = $this->db->prepare('DELETE FROM menu WHERE id = ?');
            $stmt->bindParam(1, $id);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Error ' . $e->getMessage());
        }
    }
}

