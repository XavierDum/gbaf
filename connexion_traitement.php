<?php

try {
	$bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', 'root');
} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('SELECT id_user, username, password FROM utilisateur WHERE username= ?');
$req->execute(array
	($_POST['username']
));
$resultat = $req->fetch();

session_start();

$_SESSION['user']['id_user'] = $resultat['id_user'];
$_SESSION['user']['username'] = $resultat['username'];

echo $_SESSION['user']['username'];
header('location: index.php');
?>	