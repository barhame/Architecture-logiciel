<?php
require_once 'DB.php';
require_once 'model/domaine/Article.php';
class ArticleDao
{
    private $db;
    public function __construct()
    {
        $this->db = (new DB)::getInstance();
    }
    public function getAllArticle()
    {
        $data =  $this->db->query("select * from article");
        return $data->fetchAll(PDO::FETCH_CLASS,'Article');
    }
    public function getArticleById($id)
    {
        $article = $this->db->query("select * from article where id = ".$id);
        return $article->fetch(PDO::FETCH_OBJ);
    }
    public function getArticleByCategories($id){
        $articles = $this->db->query("select * from article where categorie = ".$id);
        return $articles->fetchAll(PDO::FETCH_CLASS,'Article');
    }
}