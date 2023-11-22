<?php include "./datas.php";
$index=$_GET['id'];
var_dump($index);
$recipe= $recipes[$index] ;
include "./tpl/recipe.tpl.php";



