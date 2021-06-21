<?php
    session_start();
    include 'connexion_bdd.php';

    $acteur = $_POST['acteur'];

    $req = $bdd->prepare('INSERT INTO post(id_user, id_acteur, post) VALUES (?, ?, ?)');
    $req->execute(array(
        $_SESSION['user']['id_user'],
        $_POST['acteur'],
        htmlspecialchars($_POST['post'])
    ));
    
    if ($acteur == 1) {
        header('Location: partenaire_formationco.php');
    }

    if ($acteur == 2) {
        header('Location: partenaire_protectpeople.php');
    }

    if ($acteur == 3) {
        header('Location: partenaire_dsa.php');
    }

    if ($acteur == 4) {
        header('Location: partenaire_cde.php');
    }

?>
