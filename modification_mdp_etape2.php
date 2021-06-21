<?php session_start(); ?>
<?php $title = "Modification du mot de passe"; ?>
<?php include 'header.php'; ?>
<?php include 'connexion_bdd.php'; ?>

<?php
$req = $bdd->prepare('SELECT question FROM utilisateur WHERE id_user= ?');
	$req->execute(array
		($_SESSION['modification']['id_user']
	));
	$resultat = $req->fetch();

	echo '<p class="formulaire">Question secrtète: ' . $resultat['question'] . '</p>';
?>

<section>
	<form method="post" action="modification_mdp_etape2_traitement.php">				
	<p class="formulaire">
		<label for="reponse"> Réponse à la question </label>
		<input type="text" id="reponse" name="reponse" required />
		<input type="submit" value="Valider" />
	</p>
	</form>
</section>

<?php include 'footer.php'; ?>