<!doctype html>
<html>
<head>
    <title>Mise a jour</title>
</head>
<body>
    <?php 
     $login = $_GET['login'];
     $mdp = $_GET['pass'];
     $link = $_GET['id'];
     $connect = mysqli_connect('localhost','root','root') or die ("erreur de connexion");//connexion au serveur
     mysqli_select_db ($connect, 'utilisateur') or die ("erreur de connexion base");//selection de la base de données
    
    $req = mysqli_query($connect, "UPDATE UTILISATEUR SET login='$login', password='$mdp' WHERE id='$link'");
    echo "echo = ". $req; // tester la requete sur phpmyadmin
    header ("afficheUtil.php")
    
    ?>