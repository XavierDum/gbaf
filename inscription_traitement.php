<?php
// vérification des données saisi par l'utilisateur
	$nom = valid_donnees($_POST["nom"]);
	$prenom = valid_donnees($_POST["prenom"]);
	$username = valid_donnees($_POST["username"]);
	$password = valid_donnees($_POST["password"]);
	$password_check = valid_donnees($_POST["password_check"]);
	$question = valid_donnees($_POST["question"]);
	$reponse = valid_donnees($_POST["reponse"]);
	
	function valid_donnees($donnees){
		$donnees = trim($donnees);
		$donnees = stripslashes($donnees);
		$donnees = htmlspecialchars($donnees);

		return $donnees;
	}
// vérification que le mot de passe soit bien écrit
//si oui insertion des données saisi dans la base de données
	if ($password == $password_check) {
		include 'connexion_bdd.php';
		$req = $bdd->prepare('INSERT INTO utilisateur(nom, prenom, username, password, question, reponse) VALUES(?, ?, ?, ?, ?, ?)');
		$req->execute(array(
			$nom,
			$prenom,
			$username,
			password_hash($password, PASSWORD_DEFAULT),
			$question,
			$reponse
		));
		header('Location: confirmation_inscription.php');
	} else {
		header('Location: inscription.php'); 
	}
?>



