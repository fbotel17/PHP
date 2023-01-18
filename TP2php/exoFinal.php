<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoFinal</title>
</head>
<body>
    
<form action="" method="post">
  <label for="username">Nom d'utilisateur :</label>
  <input type="text" id="username" name="username">
  <br>
  <label for="password">Mot de passe :</label>
  <input type="password" id="password" name="password">
  <br><br>
  <input type="submit" value="Se connecter">
</form>

<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Vérifiez les informations de connexion
if ($username == "root" && $password == "root") {
    // Les informations sont correctes, connectez l'utilisateur
    session_start();
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;
    header("Location: exo2.php");
} else {
    // Les informations sont incorrectes, affichez un message d'erreur
    echo "Nom d'utilisateur ou mot de passe incorrect";
}
?>
</body>
</html>