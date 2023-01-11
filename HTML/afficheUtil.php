<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8" />
        <title>Presentation </title>
        <link rel="stylesheet" href="css.css" />
        <link rel="html" href="deleteuser.html" />
    </head>
<body>
<?php
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=utilisateur', 'root', 'root');
}
$reponse = $bdd->query('SELECT * FROM UTILISATEUR');

// début du tableau
echo '<table>'."\n";
// première ligne on affiche les titres prénom et surnom dans 2 colonnes
echo '<tr class="class01">';
echo '<td>#ID</td>';
echo '<td>login</td>';
echo '<td>Pass</td>';
echo '<td>Mise a jour</td>';
echo '<td>Delete</td>';
echo '</tr>'."\n";

// Partie "Boucle"
// lecture et affichage des résultats sur 2 colonnes, 1 résultat par ligne.    
while ($donnees = $reponse->fetch()) {
echo '<tr class="class02">';
echo '<td class="ID">'.$donnees['id'].'</td>';
echo '<td class="Login">'.$donnees['login'].'</td>';
echo '<td class="Pass">'.$donnees['password'].'</td>';
echo '<td class="mise a jour"><form action = "../HTML/miseajouruser.html">
<input type="submit" name="Mettre a jour" value="Mettre a jour">
</form></td>';
echo '<td class="Delete"><form action = "../HTML/deleteuser.html">
<input type="submit" name="delete user" value="delete user">
</form></td>';
echo '</tr>'."\n";
}
echo '</table>'."\n";
// fin du tableau.

?>

<form action = "../HTML/formulaire.html">
<input type="submit" name="Ajouter un utilisateur" value="Ajouter un utilisateur">
</form>


</body>
</html>