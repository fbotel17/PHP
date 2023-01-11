<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo7</title>
</head>

<body>

<form  method="get">
 Votre nom: <input type="text" name="nom">
 <br>
 <input type="submit">
</form>

 <?php 

$_SESSION[User]=$_GET['nom'];
echo "<font color='purple'> nom entré est : " .$_SESSION[User]."</font> ";

?>

</body>

</html>
