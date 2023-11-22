<?php
//calculer les quantites en fct du nb de personnes
function calcIngredientAmount ($amountTotal,$nbPersStart,$nbPersEnd){
    $amountForOnePers=$amountTotal/$nbPersStart;
    $amountForNbPersEnd=$amountForOnePers*$nbPersEnd ;
    return $amountForNbPersEnd;
}

