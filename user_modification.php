<?php session_start(); ?>
<?php include 'verification_session.php'; ?>
<?php $title = "Mon compte"; ?>
<?php include 'header.php'; ?>

	<section>
	<h1>Entrez les nouvelles informations</h1>
			<form method="post" action="user_modification_traitement.php">
					<input type="text" id="nom" name="nom" value= "<? echo $_SESSION['user']['nom'] ?>" required /></br>
					<input type="text" id="prenom" name="prenom" value= "<? echo $_SESSION['user']['prenom'] ?>" required /></br>
					<input type="text" id="username" name="username" value= "<? echo $_SESSION['user']['username'] ?>" required /></br>
					<input type="text" id="question" name="question" value= "<? echo $_SESSION['user']['question'] ?>" required /></br>
					<input type="text" id="reponse" name="reponse" value= "<? echo $_SESSION['user']['reponse'] ?>" required /></br>
					<input type="submit" value="Valider" />
				</p>
			</form>
	</section>	

<?php include 'footer.php';  ?>