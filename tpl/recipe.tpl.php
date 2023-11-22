<?php include "./datas.php";

$name= $recipe['name'] ;
$persons= $recipe['persons']  ;
$ingredients=$recipe['ingredients'] ;
$steps=$recipe['steps'] ;?>


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
        <li> <?php echo ucfirst("$ingredient : $amount" );?>  </li>
        <?php }?>
        </ul> 
    </section>

    <section class="section" id="etapes">
        <h2> Etapes de la recette </h2>
        <p>
            <ol>
            <?php foreach ($steps as $step){?>
                <li> <?php echo ucfirst($step)?>  </li>
            <?php }?>
            </ol>
        </p>
    </section>

    <section class="section" id="commentaires">
        <h2> Commentaires </h2>
    </section>
</main>

