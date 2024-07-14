<?php

require_once "./db/DB.php";
$db = new DB();
class Article
{

    private $id;
    private $titre;
    private $contenue;
    private $dateCreation;
    private $dateModification;
    private $categorie;

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
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getContenue()
    {
        return $this->contenue;
    }

    /**
     * @param mixed $contenue
     */
    public function setContenue($contenue)
    {
        $this->contenue = $contenue;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param mixed $dateCreation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    /**
     * @return mixed
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }

    /**
     * @param mixed $dateModification
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /*
     * get all article
     */
    function  getAllArticle()
    {
        global $db;
        $sql = "select * from article";
        $data = $db->getAll($sql);
        return $data;
    }
    /*
     * get article by categorie
     */
    function getArticleByCategorie($categorie)
    {
        global $db;
        $cat = [
            ':categorie' => $categorie
        ];
        $sql = "select * from article where categorie= :categorie";
       $data = $db->getArticleByCategories($sql, $cat);
       if($data !== false)
            return $data;
       else
           return null;
    }
}