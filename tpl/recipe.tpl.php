//Utiliser la class pour ranger les données et s'y référer


<?php
//Variables crrspdt aux datas
$id= $recipe['id'] ;
$name= $recipe['titre'] ;
$persons= $recipe['personne']  ;
//Création tableau avec les ingredients de type "ingredient1=>pâtes"
$ingredients= [] ;
$amounts=[] ;
$steps = [] ;
$ingredAmountArr=[] ;//tabl.asso ingre=>quantite


foreach($recipe as $RecipeProperty=>$value) {
    if (str_contains($RecipeProperty,'ingredient') && $value!=null) {
        $ingredients[] = $value ;
    }
    if (str_contains($RecipeProperty,'step') && $value!=null){
        $steps[] = $value ;
    }
    if (str_contains($RecipeProperty,'quantite') && $value!=null) {
        $amounts[] = $value ;
    }
}
for ( $i=0 ; $i<count($ingredients) ; $i++) {
    $ingredAmountArr[$ingredients[$i]]=$amounts[$i] ;
    d($ingredAmountArr);
}
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
                <input class="numOfPersInput invisible" data-persons= <?=$persons?> type="number" 
                name="numOfPersInput" value=<?= $persons ?> > </input>
                </form>
                personnes
            </h2>
            <img src="./images/<?=$image?>"/>
        </div>


        <div class="ingredients">
            <ul>
                <?php foreach ($ingredAmountArr as $ingredient => $amount){?>
                    <li>
                        <span class="ingredient"> <?=$ingredient?> :  </span>
                        <span class="amount" data-amount= <?= $amount?>> <?=$amount?> </span>
                <?php  } ?>

<!-- //recuperation de l'unité crrspdt en BDD -->
<?php 


    function dbFromIngredient($pdoRecettes,$ingredient) {
        $requeteSQL = "SELECT * FROM ingredient WHERE `ingredient` LIKE '$ingredient'  ;" ;
        $PDO_Statement =$pdoRecettes->query($requeteSQL) ;
        $results = $PDO_Statement->fetchAll(PDO::FETCH_ASSOC);
        return $results ;
    }
    // $tab1=dbFromIngredient($pdoRecettes,'riz')   ;
    // d($tab1[2]['unite']);
        foreach ($ingredients as $ingredient){
        $ingredUnitesFromDb[]=dbFromIngredient($pdoRecettes,$ingredient)[0]  ;
        }

        //$ingredUnites = array_merge ($ingredUnitesFromDb) ;
        // foreach ($ingredUnitesFromDb as $key=>$value) {
        //     $ingredUnites[]=$value ;
        // }
        // foreach ($ingredUnites as $key=>$value) {
        //     $ingrUnes[]=$value ;
       //} 
        d($ingredUnitesFromDb);
        foreach ($ingredUnitesFromDb as $key=>$ingredUnite) { ?>
            <span><?=$ingredUnite['ingredient']?></span>

                    </li>
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

