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
  
  $connect = mysqli_connect('localhost','toto','toto') or die ("erreur de connexion");
  mysqli_select_db($connect,'utilisateur') or die ("erreur de connexion base");//selection de la base de données
   
  $req = "SELECT * FROM UTILISATEUR ;";
  $result = mysqli_query($connect, $req);
   
 while ( $ligne=mysqli_fetch_assoc($result)){
  
$id = $ligne['id'];
$login = $ligne['login'];
$passwd = $ligne['password'];
echo $id.' : ' .$login.' : '.$passwd.'<br />';
}
?>
 </body>
</html>