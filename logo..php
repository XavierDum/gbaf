<?php
    $img = $bdd->prepare(" SELECT logo FROM acteur WHERE id_acteur= ? ");
    $img->execute(array
        ($acteur
    ));
    $logo = $img->fetch();
?>
<?php echo '<img src= "' .  $logo['logo'] . '">' ; ?>