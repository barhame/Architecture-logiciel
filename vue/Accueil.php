<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/style/styles.css">
    <title>Accuiel</title>
</head>
<body>
<?php
include_once 'inc/entete.php';
?>
<div id="container" class="container">
    <?php if(isset($articles)): ?>

        <?php foreach ($articles as $article): ?>
            <div class="contain">
                <div class="contain-header">
                <h3>
                    <a href="index.php?action=article&id=<?= $article->id ?>" class="teste"><?= $article->titre ?></a>
                </h3>
                </div>
                <div class="contenue">
                <p> <?php
                    echo substr($article->contenu, 0, 300).'.....';
                 ?> </p>
                </div>
                <div class="detail"> date creat: "
                    <?= $article->dateCreation."  date modif: ".$article->dateModification ?>
                </div>
            </div>
        <?php endforeach; ?>

    <?php endif; ?>
</div>
<?php require_once "inc/menue.php";?>
</body>
</html>