<?php
require_once './model/Categorie.php';
require_once  './model/Article.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Acceuil</title>
</head>
<body>
<div class="header">
    <h1>Actualitées Politechniciennes</h1>
</div>
<div class="nav-menue">
    <div class="menue">
        <ul>
            <li><a href="index.php?action=dao/route">Accueil</a> </li>
            <?php
            $categorie = new Categorie();
            $data = $categorie->getAllCategories();
            foreach ($data as $element){
            ?>

            <li>
                <a href="index.php?action=dao/route&option=<?= $element['libelle']?>&id= <?= $element['id']?>">
                    <?php
                        echo $element['libelle'];
                    ?>
                </a>
            </li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>
<div class="container">

        <?php
        if(isset($_GET['action'])){
            include_once $_GET['action'].'.php';
        }else{
            $article = new Article();
            $art = $article->getAllArticle();
            echo "<div class=\"entete\"><h2>Accueil</h2></div>";
            foreach ($art as $newArticle){
                echo "<div class=\"contain\"><div class=\"contain-header\"><h3>".
                    $newArticle['titre']."</h3></div><div class=\"contenue\"><p>"
                    .$newArticle['contenu']."</p></div><div class=\"detail\"> date creat: "
                    .$newArticle['dateCreation']."  date modif: ".$newArticle['dateModification']."</div></div>";
            }
        }
        ?>
</div>
</body>
</html>