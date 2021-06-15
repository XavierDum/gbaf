
		<?php
		session_start();

		include 'connexion_bdd.php';

		$acteur = 1;

		echo $acteur;
		echo $_POST['vote'];
		echo $_SESSION['user']['id_user'];

		$req = $bdd->prepare('INSERT INTO vote(id_user, id_acteur, vote) VALUES (?, ?, ?)');
		$req->execute(array(
			$_SESSION['user']['id_user'],
			$acteur,
			$_POST['vote']
		));
		header('Location: partenaire_formationco.php');
		?>	


