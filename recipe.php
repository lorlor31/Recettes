<?php include "./datas.php";
$index=$_GET['id'];
var_dump($index);
$recipe= $recipes[$index] ;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$name?> </title>
    <link rel="stylesheet" href="./css/recipe.css">
</head>

<body>

<?php  
include "./tpl/recipe.tpl.php";
include "./tpl/nav.tpl.php";
include "./tpl/backToHome.tpl.php"; 
?>

</body>
</html>
