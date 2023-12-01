#TODO 25NOV2023
plusierus pbs de concerption à résoude
=> bouton /lien pour toggler de la recette edition ou pas ?? 
1/ si c un lien => on change de page, on voit pas l'naimation 
2/ si c un bouton, on arrive à changer de page mais le lien n'est actif que sur le a pas sur le button
=> calcul des quantités , le faire niveau client ouserveur ?
niveau back on a les données, mias comment récupérer l'input du nb de personnes ?
niveau client : on n'a pas récupéré les datas ? il va falloir le faire ??


#TODO
- reussir à dynamiser les liens des articles pour n'avoir plus qu'n seul recipe.php
- vérifier l'existence de la page sinon 404
- modifier les datas pour avoir les quantites eds ingredients et attribut nbdepersonnes
- faire un algo pour les pluriels de personnes
- faire n algo pour avoir la recette en fct du nb de prsonnes
- faire un mode édition 

#COMPRENDRE CES LIGNES cours JC
- dynamisation d une classe :
  	```<header class="left <?php if(isset($currentPage) && $currentPage === 'contact'):?>left--contact<?php endif; ?>">```

- et celle là : aussi attribution d'un index d'après une valeur recue en GET :```$index = intval($_GET['index']);
 $recipe=$recipes[index] ;```
    