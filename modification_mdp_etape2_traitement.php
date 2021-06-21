<?php session_start(); ?>
<?php include 'connexion_bdd.php'; ?>
<?php
	$req = $bdd->prepare('SELECT reponse FROM utilisateur WHERE id_user= ?');
	$req->execute(array
		($_SESSION['modification']['id_user']
	));
	$resultat = $req->fetch();

	if($resultat['reponse'] == $_POST['reponse']){
		header('location: modification_mdp_etape3.php');
	}else{
		echo 'mauvaise réponse: <a href="modification_mdp_etape2.php"> Revenir à la question </a>';
	}
?>