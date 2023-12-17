<?php 
require './kint.phar' ;
require "./datasFromDb.php" ;
require "./functions.php";
$index=$_GET['id'];
$recipe= $recipes[$index-1] ;
$title=$recipe['titre'] ;
$pageTitle=$title;
?>



<?php  
require "./tpl/header.tpl.php";
require "./tpl/recipe.tpl.php";
require "./tpl/nav.tpl.php";
require "./tpl/backToHome.tpl.php"; 
?>
<script src="js/script.js"></script>
</body>
</html>
