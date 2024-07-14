<?php

require_once 'model/domaine/Categorie.php';
require_once 'DB.php';
class CategorieDao
{
    private $db;
    function __construct()
    {
        $this->db = (new DB)::getInstance();
    }

    public function getAllCategories()
    {
        $data = $this->db->query("select * from categorie");
        $categories = $data->fetchAll(PDO::FETCH_CLASS, 'Categorie');

        return $categories;
    }

    public function getCategoriesById($id)
    {
        $data = $this->db->query("select * from categorie where id = ".$id);
        return $data->fetch(PDO::FETCH_OBJ);
    }
}