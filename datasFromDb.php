<?php
//require __DIR__.'/Recette.php' ;

//PDO
$pdoRecettes = new PDO(
    'mysql:dbname=recettes;host=localhost;charset=UTF8',   // DSN 
    'root',     // username
    'A1Z2E3R4',     // password
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING       // en mode dev (options)
    ]
);

$pdoUsers = new PDO(
    'mysql:dbname=users;host=localhost;charset=UTF8',   // DSN 
    'root',     // username
    'A1Z2E3R4',     // password
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING       // en mode dev (options)
    ]
);
;

//Recup datas des users => $users 
function dBFetchUsers($pdoUsers ) {
    $requeteSQL = 'SELECT * FROM user ;' ;
    $PDO_Statement =$pdoUsers->query($requeteSQL) ;
    $results = $PDO_Statement->fetchAll() ;
    return $results ;
    }
$usersFromDb=dBFetchUsers($pdoUsers );
$users=[];
$usersLoginID=[]; //crsspdce nom-pwd
foreach($usersFromDb as $user) {
    $users[]=$user['name'];
    $usersLoginID[$user['name']]= $user['pwd'];
}

//Recup data dse recettes => $recipes
//Cmt récuperer les data pas null en sql 
// sSELECT * FROM recette WHERE ingredient IS NOT NULL
//ms pour ts les items
function dbFromRecette($pdoRecettes) {
    $requeteSQL = 'SELECT * FROM `recette` ;' ;
    $PDO_Statement =$pdoRecettes->query($requeteSQL) ;
    $results = $PDO_Statement->fetchAll(PDO::FETCH_ASSOC) ;
    return $results ;
}
    
$recipes=[] ;
foreach (dbFromRecette($pdoRecettes) as $recipeFromDb) {
    $recipes[]=$recipeFromDb ;
}

