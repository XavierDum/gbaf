<?php
    session_start();
    include 'connexion_bdd.php';

    $req = $bdd->prepare('INSERT INTO post(id_user, id_acteur, post) VALUES (?, ?, ?)');
    $req->execute(array(
        $_SESSION['user']['id_user'],
        $_POST['acteur'],
        htmlspecialchars($_POST['post'])
    ));

    header('Location: partenaire.php?acteur=' . $_POST['acteur']);
    

?>
