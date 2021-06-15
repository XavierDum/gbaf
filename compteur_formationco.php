<?php
    include 'connexion_bdd.php';

    $req= $bdd->query("SELECT COUNT(vote) AS total_1 FROM vote WHERE vote=1");
    $resultat = $req->fetch();
    $total_aime = $resultat['total_1'];

    $req= $bdd->query("SELECT COUNT(vote) AS total_0 FROM vote WHERE vote=0");
    $resultat = $req->fetch();
    $total_aime_pas = $resultat['total_0'];
    
    echo $total_aime . " j'aime" . '</br>';
    echo $total_aime_pas . " je n'aime pas" . '</br>';
?>