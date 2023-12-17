<nav>
    <?php foreach ($recipes as $recipe) { ?>
        <a href="recipe.php?id=<?= $recipe['id'] ?>"><?=$recipe['titre']?> </a>
    <?php } ?>
</nav>