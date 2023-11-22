<?php include "./datas.php";

//TODO
//reussir à dynamiser les liens des articles pour n'avoir plus qu'n seul recipe.php
// vérifier l'existence de la page sinon 404
//modier les datas pour avoir les quantites eds ingredients et attribut nbdepersonnes
//faire un algo pour les pluriels de personnes
// faire n algo pour avoir la recette en fct du nb de prsonnes
// faire un mode édition 

//COMPRENDRE CETTE LIGNE =>
//dynamisation d une classe
// // <header class="left <?php if(isset($currentPage) && $currentPage === 'contact'): 
/*?>left--contact<?php endif; ?>">*/
//et celle là aussi attribution d'un index d'après une valeur recue en GET
// $index = intval($_GET['index']);
// $recipe=$recipes[index] ;
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


 <h1 <?php if($name=='Riz au skia') { ?>
    class="titreRose "> 
            <?php }  ?> <?= $name ?> </h1>   
    <section class="section" id="ingredients">
        <h2>
        <?php echo "Ingrédients pour $persons personnes" ;?> 
        </h2>
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
