<?php include "./datas.php";
 include "./functions.php";
$index=$_GET['id'];
$recipe= $recipes[$index] ;
$name=$recipe['name'] ;
$pageTitle=$name;
?>



<?php  
include "./tpl/header.tpl.php";
include "./tpl/recipe-edition.tpl.php";
include "./tpl/nav.tpl.php";
include "./tpl/backToHome.tpl.php"; 
?>
<script src="js/script.js"></script>
</body>
</html>
