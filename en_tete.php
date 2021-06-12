<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title>GBAF</title>
	</head>

	<body>

	<header>
			<img src="images/logo.png">
			<div id="identifiant">
			<?php
				echo 'Bonjour ' . $_SESSION['user']['username'] . ' , vous êtes le ' . $_SESSION['user']['id_user'] . ' ème';
			?>
			</div>
	</header>

	</body>

</html>