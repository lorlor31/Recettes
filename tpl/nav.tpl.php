<nav>
    <?php foreach ($recipes as $index=>$recipe) { ?>
        <a href="recipe.php?id=<?= $index ?>"><?=$recipe['name']?> </a>
    <?php } ?>
</nav>