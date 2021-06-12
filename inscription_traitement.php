<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="" />
		<title>controller</title>
	</head>

	<body>

		<?php
		$bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', 'root');
		

		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', 'root');
		}
		catch (Exception $e)
		{
				die('Erreur : ' . $e->getMessage());
		}

		
		$req = $bdd->prepare('INSERT INTO utilisateur(nom, prenom, username, password, question, reponse) VALUES(?, ?, ?, ?, ?, ?)');
		$req->execute(array(
			$_POST['nom'],
			$_POST['prenom'],
			$_POST['username'],
			$_POST['password'],
			$_POST['question'],
			$_POST['reponse']
		));


		header('Location: confirmation.php');
		?>

	</body>

</html>


