<?php include "./datas.php";

//TODO
//modier les datas pour avoir les quantites eds ingredients et attribut nbdepersonnes
//faire un algo pour les pluriels de personnes
// faire n algo pour avoir la recette en fct du nb de prsonnes
// faire un mode édition 


$name=$recipe['name'] ;
$persons=$recipe['persons'] ;
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
        <h2> <?php echo "Ingrédients pour $persons personnes" ;?> </h2>
        <ul>
        <?php foreach ($ingredients as $ingredient => $amount){?>
        <li> <?php echo "$ingredient : $amount" ;?>  </li>
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
