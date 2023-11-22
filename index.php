<?php include "./datas.php" ;
$currentPage='index';
;?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Index </title>
</head>

<body>

<nav>
    <?php foreach ($recipes as $index=>$recipe) { ?>
        <a href="recipe.php?id=<?= $index; ?>"><?=$recipe['name']?> </a>
    <?php } ?>
</nav>

</html>