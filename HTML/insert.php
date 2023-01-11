<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8" />
        <title>
            Formulaire
        </title>
    </head>
<body>
<?php
  $login = $_GET['login'];
  $mdp = $_GET['pass'];
  $connect = mysqli_connect('localhost','root','root') or die ("erreur de connexion");//connexion au serveur
  mysqli_select_db ($connect, 'utilisateur') or die ("erreur de connexion base");//selection de la base de données
  $req = " INSERT INTO UTILISATEUR (login, password) VALUES ('$login','$mdp');";
  echo $req; // tester la requete sur phpmyadmin
  mysqli_query($connect, $req);
  echo "utilisateur ajouté"; // vérifier avec phpmyadmin
  ?>
  </body>
</html>