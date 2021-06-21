<?php include 'connexion_bdd.php'; ?>
<?php
	$req = $bdd->prepare('SELECT id_user, nom, prenom, username, password, question, reponse FROM utilisateur WHERE username= ?');
	$req->execute(array
		($_POST['username']
	));
	$resultat = $req->fetch();
	session_start();
	$_SESSION['modification']['id_user'] = $resultat['id_user'];

	header('location: modification_mdp_etape2.php');
?>