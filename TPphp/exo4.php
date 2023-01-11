<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo4</title>
</head>
 <body>
 <?php
 echo "<p>Bonjour, voici un algorithme capable de trouver les solutions d'une equation du second degre (ax²+bx+c)  </p>";
 
 $a = rand(-10, 10);
 $b = rand(-10, 10);
 $c = rand(-10, 10);
 $Delta = round($b*$b - (4*$a*$c));
 $X0 = round(-$b/2*$a);
 $X1 = round((-$b - sqrt($Delta))/2*$a);
 $X2 = round((-$b + sqrt($Delta))/2*$a);
 
echo "<p>a = $a</p>";
echo "<p>b = $b</p>";
echo "<p>c = $c</p>";
echo "donc nous avons : $a x²+ $b x+ $c ";


 if($Delta < 0)
    {
        echo "<p> Delta = $Delta donc delta < 0 -> il n'existe pas de solution reelle <p>";
       
    }
    else if($Delta == 0)
    {
        echo "<p>  Delta = $Delta donc -> il n'existe qu'une solution reelle notee x0 qui est : $X0 <p> ";
    }
    else if($Delta > 0)
    {
        echo " <p>Delta = $Delta donc delta > 0 -> il existe deux solutions reelles : <p>";
        echo "<p>x1 est : $X1  <p>";
        echo "<p>x2 est : $X2 <p>";
 
    }
 
?>
 
<a href="index.php">Retour</a>
 </body>
</html>
