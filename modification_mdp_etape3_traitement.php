<?php session_start(); ?>
<?php
    include 'connexion_bdd.php';

	$id_mdp = $_SESSION['modification']['id_user'];
	$pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$req = $bdd-> prepare("UPDATE utilisateur SET password = ? WHERE id_user = $id_mdp");
	$req->execute(array($pass_hache));

	header('location: confirmation_nouveau_mdp.php');
?>