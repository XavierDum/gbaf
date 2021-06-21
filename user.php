<?php session_start(); ?>
<?php include 'verification_session.php'; ?>
<?php $title = "Mon compte"; ?>
<?php include 'header.php'; ?>

	<section>
		<?php
			include 'connexion_bdd.php';
			$req = $bdd->prepare('SELECT nom, prenom, username, question, reponse FROM utilisateur WHERE id_user= ?');
			$req->execute(array
				($_SESSION['user']['id_user']
			));
			$resultat = $req->fetch();
		?>
		<h1>Mes informations</h1>
		<?php
			echo $resultat['nom'] . '</br>';
			echo $resultat['prenom'] . '</br>';
			echo $resultat['username'] . '</br>';
			echo $resultat['question'] . '</br>';
			echo $resultat['reponse'] . '</br>';
		?>
		<a href = user_modification.php>Modifier les informations</a>
		<p><a href = modification_mdp_etape3.php>Changer de mot de passe</a></p>
	</section>	

<?php include 'footer.php';  ?>