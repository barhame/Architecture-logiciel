<?php
require_once './model/Categorie.php';
require_once './model/Article.php';
$categorie = new Categorie();
if(!isset($_GET['option']) && !isset($_GET['id'])){
    $ar = new Article();
    $artt = $ar->getAllArticle();
    echo "<div class=\"entete\"><h2>Accueil</h2></div>";
    foreach ($artt as $newArticle){
        echo "<div class=\"contain\"><div class=\"contain-header\"><h3>".
            $newArticle['titre']."</h3></div><div class=\"contenue\"><p>"
            .$newArticle['contenu']."</p></div><div class=\"detail\"> date creat: "
            .$newArticle['dateCreation']."  date modif: ".$newArticle['dateModification']."</div></div>";
    }
}
else{
$option = $_GET['option']; /** sante ou education sport, politique*/
$id = $_GET['id']; /* sport => 1, sante => 2, education => 3, politique => 4 */

$cat = $categorie->getCategorieById($id);
    if($id != 0 && $option != null)
    if($option == $cat['libelle'] && $cat['id'] == $id) {
        $article = new Article();
        $art = $article->getArticleByCategorie($id);

        echo "<div class=\"entete\"><h2>".$cat['libelle']."</h2></div>";
        foreach ($art as $newArticle){
            echo "<div class=\"contain\"><div class=\"contain-header\"><h3>".
                $newArticle['titre']."</h3></div><div class=\"contenue\"><p>"
                .$newArticle['contenu']."</p></div><div class=\"detail\"> date creat: "
                .$newArticle['dateCreation']."  date modif: ".$newArticle['dateModification']."</div></div>";
        }
        if($art == null){
            echo "<div class=\"erreur\"><h4>No data record</h4> </div>";
        }
    }
}
