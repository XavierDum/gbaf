<?php
	include 'connexion_bdd.php';

	$pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$req = $bdd->prepare('INSERT INTO utilisateur(nom, prenom, username, password, question, reponse) VALUES(?, ?, ?, ?, ?, ?)');
	$req->execute(array(
		$_POST['nom'],
		$_POST['prenom'],
		$_POST['username'],
		$pass_hache,
		$_POST['question'],
		$_POST['reponse']
	));

	header('Location: confirmation_inscription.php');
?>



