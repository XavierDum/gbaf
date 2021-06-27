<?php
	session_start();

	include 'connexion_bdd.php';

	$acteur = $_POST['acteur'];
	$req = $bdd->prepare('INSERT INTO vote(id_user, id_acteur, vote) VALUES (?, ?, ?)');
	$req->execute(array(
		$_SESSION['user']['id_user'],
		$_POST['acteur'],
		$_POST['vote']
	));
	
    header('Location: partenaire.php?acteur=' . $_POST['acteur']);
    
?>	


