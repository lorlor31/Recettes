<?php include "./datas.php";
//Variables crrspdt aux datas
$name= $recipe['name'] ;
$persons= $recipe['persons']  ;
$ingredients=$recipe['ingredients'] ;
$steps=$recipe['steps'] ;
$image=$recipe['image'] ;
//Variables nécessaires
$isActiveEditionMode=false ;

?>

<main> 
<!-- /*
 <h1 <?php if($name=='Riz au skia') { ?>
    class="titreRose "> 
            <?php }  ?> 
            <?= $name ?> </h1>   
            */ -->
    <h1>
        <?= $name ?> 
    </h1>


    <section class="section" id="firstPart">
        <div class="picture">
            <h2>
                <?= $name ?> pour  
                <span class="numOfPers" data-persons= <?= $persons ?> > <?= $persons ?> </span> 
                <?php include "./tpl/toggleEditionButton.tpl.php"; ?>

                <label class="numOfPersLabel invisible" for="numOfPersInput" > <label>
                <form>
                <input class="numOfPersInput invisible" data-persons= <?= $persons ?>  type="number" name="numOfPersInput" value=<?= $persons ?> > </input> 
                </form>
                personnes
            </h2>
            <img src="./images/<?=$image?>"/>
        </div>


        <div class="ingredients">
            <ul>
                <?php foreach ($ingredients as $ingredient => $amount){?>
                <li> <?php echo ucfirst("$ingredient :");?>  <span> <?=$amount[0]?> </span> <?php echo ($amount[1] ? $amount[1] : "" ) ; ?>  </li>
                <?php }?>
            </ul> 
        </div>





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

