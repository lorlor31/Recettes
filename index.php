<?php 
require __DIR__.'/kint.phar' ;
require "./datasFromDb.php" ;
$pageTitle='Speedy Recettes';
;?>

<?php require"./tpl/header.tpl.php";?>
<link rel="stylesheet" href="./css/index.css">
</head>

<?php require"./tpl/index.tpl.php";?>
<?php require"./tpl/nav.tpl.php" ;?> 

<script src="js/script-index.js"></script>
</body>

</html>

