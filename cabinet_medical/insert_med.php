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
  $numRPPS = $_GET['numRPPS'];
  $nomM = $_GET['nomM'];
  $spcialite = $_GET['spcialite'];
  $ville = $_GET['ville'];
  $adresse = $_GET['adresse'];
  $connect = mysqli_connect('localhost','root','root') or die ("erreur de connexion");//connexion au serveur
  mysqli_select_db ($connect, 'cabinet_medical') or die ("erreur de connexion base");//selection de la base de données

  $req = " INSERT INTO MEDECIN (numRPPS, nomM, spcialite, ville, adresse) VALUES ('$numRPPS','$nomM','$spcialite','$ville','$adresse');";
  
  echo $req; // tester la requete sur phpmyadmin
  mysqli_query($connect, $req);
  echo "utilisateur ajouté"; // vérifier avec phpmyadmin
  header("location:index.php")
  ?>
  </body>
</html>