<?php
//connexion à la base de donnée
	include 'connexion_bdd.php';

//selection des champs pour ouvrir une session
	$req = $bdd->prepare('SELECT id_user, nom, prenom, username, password, question, reponse FROM utilisateur WHERE username= ?');
	$req->execute(array
		($_POST['username']
	));
	$resultat = $req->fetch();

	//vérification  du mot de passe
	//ouverture de la session ou renvoi vers une page d'erreur
	$isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);
	if ($isPasswordCorrect) {
		session_start();
		$_SESSION['user']['id_user']  = $resultat['id_user'];
		$_SESSION['user']['nom']      = $resultat['nom'];
		$_SESSION['user']['prenom']   = $resultat['prenom'];
		$_SESSION['user']['username'] = $resultat['username'];
		$_SESSION['user']['password'] = $resultat['password'];
		$_SESSION['user']['question'] = $resultat['question'];
		$_SESSION['user']['reponse']  = $resultat['reponse'];
		header('location: index.php');
	} else {
		header('location: erreur_password.php');
	}
?>	