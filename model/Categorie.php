<?php

require_once 'db/DB.php';
class Categorie
{
    private $id;
    private $libelle;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /*
     * get all categories
     */
    function getAllCategories()
    {
        $sql = "select * from categorie";
        $db = new DB();
        $data = $db->getAll($sql);

        return $data;
    }

    function getCategorieById($id)
    {
        $arrayID = [
            ':id'=>$id
        ];
        $db = new DB();
        $sql = "select * from categorie where id= :id";
        $stmt  = $db->getSingleElement($sql, $arrayID);
        if($stmt !== false)
            return $stmt;
        else
            return  null;
    }
}