<div class="container">
    <?php
    if(isset($article) && (!empty($article))):
    ?>
    <div class="contain">
        <div class="contain-header">
            <h3>
                <a href="index.php?action=article&id=<?= $article->id ?>"><?= $article->titre ?></a>
            </h3>
        </div>
        <div class="contenue">
            <p>
                <?= $article->contenu ?>
            </p>
        </div>
        <div class="detail">
            <p>Date creat: <?= $article->dateCreation."   date modif: ".$article->dateModification ?></p>
        </div>
    </div>
    <?php else:?>
    <div class="no-data">
        <p>
            No data record......
        </p>
    </div>
    <?php endif;?>
</div>