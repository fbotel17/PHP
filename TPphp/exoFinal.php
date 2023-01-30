<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire de connexion</title>
</head>

<body>
    <?php
    if (isset($_POST['disconnect'])) {
        session_unset();
        session_destroy();
    }

    if (isset($_POST['envoyer']) && $_POST['login'] == 'julien' && $_POST['password'] == '1234') {
        echo 'vous etes connecté';
    ?>
        <form action="" method="post">
            <input type="submit" value="disconnect" name="disconnect">
        </form>
    <?php
    } else {
    ?>
        <form action="" method="post">
            <label>login :</label>
            <input type="text" id="login" name="login">

            <label>password :</label>
            <input type="text" id="password" name="password">

            <input type="submit" value="envoyer" name="envoyer">
        </form>
    <?php
        if (isset($_POST['envoyer'])) {
            if ($_POST['login'] != 'julien' && $_POST['password'] != '1234') {
                echo "mauvais login et mauvais password";
            } else if ($_POST['login'] != 'julien') {
                echo "mauvais login";
            } else if ($_POST['password'] != '1234') {
                echo "mauvais password";
            }
        }
    }
    ?>
</body>

</html>