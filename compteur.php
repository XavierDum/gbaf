<?php
include 'connexion_bdd.php';
$id = $donnees['id_acteur'] ;

    $req= $bdd->query("SELECT COUNT(vote) AS total_1 FROM vote WHERE id_acteur=$id AND vote=1 ");
    $resultat = $req->fetch();
    $total_like = $resultat['total_1'];
  
    $req= $bdd->query("SELECT COUNT(vote) AS total_0 FROM vote WHERE id_acteur=$id AND vote=0 ");
    $resultat = $req->fetch();
    $total_dislike = $resultat['total_0'];


    echo $total_like . ' <img src="images/like.png">' . '</br>';
    echo $total_dislike . ' <img src="images/dislike.png">' . '</br>';
?>