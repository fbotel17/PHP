<html>
 <head>
  <title>Exo 2</title>
 </head>
 <body>
 <?php
 //Exercice 1 et 2
echo date('Y-m-d H:i:s'), "<br>";  // 2012-10-11 15:35:53
echo date('l j F Y, H:i'), "<br>"; // Thursday 11 October 2012, 15:35
echo date('d F Y'), "<br>";        // 11 October 2012
echo date('d/m/Y'), "<br>";        // 11/10/12
$ip = $_SERVER['REMOTE_ADDR'];
echo "IP Address et: $ip", "<br>";
echo "Bonjour ceci est votre IP: $REMOTE_ADDR", "<br>";
echo "Bonne matinee", "<br>";
echo "Bon apres-midi", "<br>";
echo "Bonne soiree", "<br>";



?>
 </body>
</html>