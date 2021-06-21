<?php session_start(); ?>
<?php
	include 'connexion_bdd.php';

	$id_modif = $_SESSION['user']['id_user'];
	$req = $bdd->prepare(" UPDATE utilisateur SET nom= ?, prenom= ?, username= ?, question= ?, reponse= ? WHERE id_user = $id_modif ");
	$req->execute(array(
		htmlspecialchars($_POST['nom']),
		htmlspecialchars($_POST['prenom']),
		htmlspecialchars($_POST['username']),
		htmlspecialchars($_POST['question']),
		htmlspecialchars($_POST['reponse'])
	));

	header('location: confirmation_modification.php');
?>