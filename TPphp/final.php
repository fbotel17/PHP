<?php
//on débute la session
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo8</title>
</head>

<body>

    <?php

    
    //condition si login et mdp sont valide alors on affiche un message de réussite ainsi qu'un bouton de déconnexion
    if (isset($_POST['nom']) && $_POST['nom'] == "Julien" and isset($_POST['motDePasse']) && $_POST['motDePasse'] == "1234") 
    {
        //une fois la condition validé, les valeurs entrées sont attribués dans les variables session.
        $_SESSION['User'] = $_POST['nom'];
        $_SESSION['Password'] = $_POST['motDePasse'];

        //affiche message de réussite avec le login
        echo "Vous etes connecté sous le login ".$_SESSION['User']." !";
   
        
   ?>
        <!-- bouton de déconnexion -->
        <form method="POST">
            <input type="submit" name="deconect" value="Déconnecter">
        </form>
        <?php

        //si le bouton a été cliqué alors on déconnecte et supprime la session
        if (isset($_POST["deconect"])) {
            session_unset();
            session_destroy();
        }
    } 
    //si les variables rentrées ne sont pas valides
    else 
    {
        //si le login est corect mais que le mot de passe n'est pas bon alors on affiche mot de passe incorrect
        if (isset($_POST['nom']) && $_POST['nom'] == "Julien" && isset($_POST['motDePasse'])  && $_POST['motDePasse'] != "1234") 
        {
            echo "le mot de passe est incorrect";
        } 
        else 
        {
            echo "login inconnu";
        }

        ?>

        <form method="post">
            <p>
                Login: <input type="text" name="nom">
            </p>
            <p>
                Mot de passe : <input type="text" name="motDePasse">
            </p>
            <input type="submit" name="Connect" value="Connect">
            <input type="reset" name="Supprimer" value="Supprimer">
        </form>
    <?php

    }




    ?>

</body>

</html>