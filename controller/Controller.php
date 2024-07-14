<?php

require_once 'model/dao/CategorieDao.php';
require_once 'model/dao/ArticleDao.php';
require_once 'model/domaine/Article.php';

class Controller
{
    public function showAccueil()
    {
        $articledao = new ArticleDao();
        $categorieDao = new CategorieDao();

        $categories = $categorieDao->getAllCategories();
        $articles = $articledao->getAllArticle();

        include 'vue/Accueil.php';
    }
   public function showArticle($id)
    {
        $articledao = new ArticleDao();
        $categorieDao = new CategorieDao();

        $article = $articledao->getArticleById($id);
        $categorie = $categorieDao->getAllCategories();

        include 'vue/Articles.php';
    }

    public function showCategorie($id)
    {
        $categorieDao = new CategorieDao();
        $articleDao = new ArticleDao();


        $article = $articleDao->getArticleByCategories($id);
        $categories = $categorieDao->getAllCategories();

        require_once 'vue/ArticleByCategorie.php';

    }

    public function categorieList()
    {
        $categorieDAo = new CategorieDao();
        $data = $categorieDAo->getAllCategories();
        return 'vue/inc/menue.php';
    }
    public function showErreurPage()
    {
        echo 'page not found';
    }
}