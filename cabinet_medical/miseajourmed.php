<!doctype html>
<html>
<head>
    <title>Mise a jour</title>
</head>
<body>
    <?php 
     $numRPPS = $_GET['numRPPS'];
     $nomM = $_GET['nomM'];
     $spcialite = $_GET['spcialite'];
     $ville = $_GET['ville'];
     $adresse = $_GET['adresse'];
     $connect = mysqli_connect('localhost','root','root') or die ("erreur de connexion");//connexion au serveur
  mysqli_select_db ($connect, 'cabinet_medical') or die ("erreur de connexion base");//selection de la base de données
    $req = mysqli_query($connect, "UPDATE MEDECIN SET spcialite='$spcialite',ville='$ville',adresse='$adresse', nomM='$nomM' WHERE numRPPS='$numRPPS'");
    echo "echo = ". $req; // tester la requete sur phpmyadmin
    //header("location:index.php")
    
    ?>