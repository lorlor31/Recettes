
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
    