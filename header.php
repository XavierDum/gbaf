<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title><? echo $title ?></title>
	</head>

	<body>
		<header>
<! header affiché lorsqu'une session est en cour -->
		<?php if(isset($_SESSION['user'])) { ?>
			<div class= "banniere">
			<a href="index.php"><img src="images/logo.png"></a>
			<div>
			<?php
				echo'<a href= "user.php">' .  $_SESSION['user']['prenom'] . '  ' . $_SESSION['user']['nom'] . '</a>';
			?>
			<p><a href= deconnexion.php>se déconnecter</a></p>
			</div>
			</div>
			
<! header affiché lorsqu'on est pas encore connecté -->
		<? } else { ?>
			<div>
			<a href="connexion.php"><img src="images/logo.png"></a>
			</div>
		<? } ?>		
		</header>