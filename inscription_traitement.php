<?php
	include 'connexion_bdd.php';

	$pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$req = $bdd->prepare('INSERT INTO utilisateur(nom, prenom, username, password, question, reponse) VALUES(?, ?, ?, ?, ?, ?)');
	$req->execute(array(
		htmlspecialchars($_POST['nom']),
		htmlspecialchars($_POST['prenom']),
		htmlspecialchars($_POST['username']),
		$pass_hache,
		htmlspecialchars($_POST['question']),
		htmlspecialchars($_POST['reponse'])
	));

	header('Location: confirmation_inscription.php');
?>



