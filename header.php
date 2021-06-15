<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title><? echo $title ?></title>
	</head>

	<body>
		<header>
		<?php if(isset($_SESSION['user'])) { ?>
			<div class= "banniere">
			<a href="connexion.php"><img src="images/logo.png"></a>
			<div>
			<?php
				echo $_SESSION['user']['prenom'] . '  ' . $_SESSION['user']['nom'];
			?>
			</div>
			</div>
		<? } else { ?>
			<div>
			<a href="connexion.php"><img src="images/logo.png"></a>
			</div>
		<? } ?>		
		</header>