<div class="ingredients">
    <h2>
        <?php echo "Ingrédients pour $persons personnes" ;?> 
    </h2>
    <ul>
        <?php foreach ($ingredients as $ingredient => $amount){?>
        <li> <?php echo ucfirst("$ingredient : $amount" );?>  </li>
        <?php }?>
    </ul> 
</div>