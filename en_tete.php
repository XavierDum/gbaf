<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title>GBAF</title>
	</head>

	<body>

	<header>
	<a href="connexion.php"><img src="images/logo.png"></a>
			<div id="identifiant">
			<?php
				echo $_SESSION['user']['prenom'] . '  ' . $_SESSION['user']['nom'];
			?>
			</div>
	</header>

	</body>

</html>