<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8" />
        <title>delete </title>
        <link rel="stylesheet" href="css_cab.css" />
    </head>
<body>
<?php
  $numRPPS = $_GET['numRPPS'];
  $nomM = $_GET['nomM'];
  $spcialite = $_GET['spcialite'];
  $ville = $_GET['ville'];
  $adresse = $_GET['adresse'];
  $connect = mysqli_connect('localhost','root','root') or die ("erreur de connexion");//connexion au serveur
  mysqli_select_db ($connect, 'cabinet_medical') or die ("erreur de connexion base");//selection de la base de donnee
  $req = mysqli_query ($connect, "DELETE FROM MEDECIN WHERE numRPPS =$numRPPS");
  echo $req; // tester la requete sur phpmyadmin
  echo "delete"; // vérifier avec phpmyadmin
  header("location:index.php")
?>
</body>
</html>