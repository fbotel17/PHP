<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8" />
        <title>delete </title>
        <link rel="stylesheet" href="css.css" />
    </head>
<body>
<?php
  $login = $_GET['login'];
  $mdp = $_GET['pass'];
  $connect = mysqli_connect('localhost','root','root') or die ("erreur de connexion");//connexion au serveur
  mysqli_select_db ($connect, 'utilisateur') or die ("erreur de connexion base");//selection de la base de donn�es
  $id = $_GET["id"];
  $req = mysqli_query ($connect, "DELETE FROM UTILISATEUR WHERE id =".$id);
  echo $req; // tester la requete sur phpmyadmin
  echo "utilisateur delete"; // vérifier avec phpmyadmin
?>
</body>
</html>