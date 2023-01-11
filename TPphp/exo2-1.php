<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2.1</title>
</head>
<body>
    <p style=">tableau sans affichage :</p>
<?php
$a= array( 
0 => 7,
1 => 8,
2 => 0,
3 => 156,
4 => -10,
);

for ($i=0; $i<5; $i++)
{
    echo "[".$a[$i]."]";
}
?>
<p></p>
<table border="1">
<caption>Tableau</caption>
<tr>
    <?php
    for($i=0; $i<5; $i++)
    {
        echo "<td align='center'>".$a[$i]."</td>";
    }
    ?>
</tr>
</table>
</body>
</html>