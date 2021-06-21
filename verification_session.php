<?php
	if(isset($_SESSION['user']['id_user'])) {
	} else {
		header('Location: demande_session.php');
	}
?>