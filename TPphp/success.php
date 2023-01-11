<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>

 <div>
    Ouaiiiis c'est réussi !!
</div>
<div>
<input type="button" onclick="window.location.href = 'final.php';" name="deconect" value="Déconnecter">
</div>

//  echo "<p>session : " . $_SESSION['User']."</p>";
    //  echo "<p>mot de passe : " . $_PASSWORD['User']."</p>";
    if($_SESSION['User']=="Julien" and $_PASSWORD['User']=="1234")
    {
        echo "Vous etes connecté !";
        ?>
        <input type="button" onclick="window.location.href = 'final.php';" name="deconect" value="Déconnecter">
        <?php
    }
    else if($_SESSION['User']!="Julien")
    {
        echo "le login est inconnu";
    }
    else if($_SESSION['User']=="Julien" and $_PASSWORD['User']!="1234")
    {
        echo "le mot de passe est incorrect";
    }




    $_SESSION['User']=$_POST['nom'];
$_PASSWORD['User']=$_POST['motDePasse'];

//  echo "<p>session : " . $_SESSION['User']."</p>";
//  echo "<p>mot de passe : " . $_PASSWORD['User']."</p>";
if($_SESSION['User']=="Julien" and $_PASSWORD['User']=="1234")
 {
     echo "Vous etes connecté !";
     ?>
    <input type="button" onclick="window.location.href = 'final.php';" name="deconect" value="Déconnecter">
     <?php
 }
else if($_SESSION['User']!="Julien")
{
    echo "le login est inconnu";
}
 else if($_SESSION['User']=="Julien" and $_PASSWORD['User']!="1234")
{
    echo "le mot de passe est incorrect";
}
</body>
</html>