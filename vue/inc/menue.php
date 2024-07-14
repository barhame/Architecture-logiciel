<div class="nav-menue">
    <div class="menue">
        <ul>
            <li><a href="index.php">Accueil</a> </li>
            <?php
            require_once "model/dao/CategorieDao.php";
            $categorie = new CategorieDao();

            $data = $categorie->getAllCategories();
            foreach ($data as $element){
                ?>

                <li>

                    <a href="index.php?action=categorie&id=<?= htmlspecialchars($element->id) ?>">
                        <?php
                        echo htmlspecialchars($element->libelle);
                        ?>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>