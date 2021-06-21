<?php
	$reponse = $bdd->query("SELECT id_user, date_com, post FROM post WHERE id_acteur= '$acteur' ");
    while($donnees = $reponse->fetch())
    {
        $req = $bdd->prepare('SELECT username FROM utilisateur WHERE id_user= ?');
        $req->execute(array
            ($donnees['id_user']
        ));
        $resultat = $req->fetch();

        echo '<p><strong>' . $resultat['username'] . ':</p></strong>
        <p> ' . $donnees['post'] . '   <font color= "silver"><i>' . $donnees['date_com'] . '</font></i></p></br>';
    }
?>  