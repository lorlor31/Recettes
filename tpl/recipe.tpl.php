<?php include "./datas.php";


$name=$recipe['name'] ;
$ingredients=$recipe['ingredients'] ;
$steps=$recipe['steps'] ;?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$name?> </title>
    <link rel="stylesheet" href="./css/recipe.css">
</head>

<body>

<main> 
    <h1> <?= $name ?> </h1>  
    <section class="section" id="ingredients">
        <h2> Ingrédients </h2>
        <ul>
        <?php foreach ($ingredients as $ingredient){?>
        <li> <?=$ingredient?>  </li>
        <?php }?>
        </ul> 
    </section>

    <section class="section" id="etapes">
        <h2> Etapes de la recette </h2>
        <p>
            <ol>
            <?php foreach ($steps as $step){?>
                <li> <?=$step?>  </li>
            <?php }?>
            </ol>
        </p>
    </section>

    <section class="section" id="commentaires">
        <h2> Commentaires </h2>
    </section>
</main>
</body>

</html>

<?php  include "./tpl/backToHome.tpl.php"; 
