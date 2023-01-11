<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8" />
        <title>Tableau</title>
        <link rel="stylesheet" href="css_cab.css" />
    </head>
<body>
<?php
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=cabinet_medical', 'root', 'root');
}
$reponse = $bdd->query('SELECT * FROM MEDECIN');
$numRPPS = $_GET['numRPPS'];
// début du tableau
echo '<table>'."\n";
// première ligne on affiche les titres prénom et surnom dans 2 colonnes
echo '<tr class="class01">';
echo '<td>#id</td>';
echo '<td>nom</td>';
echo '<td>spetial</td>';
echo '<td>ville</td>';
echo '<td>adresse</td>';
echo '<td>Mise a jour</td>';
echo '<td>Delete</td>';
echo '<td>ajouter user</td>';
echo '</tr>'."\n";

// Partie "Boucle"
// lecture et affichage des résultats sur 2 colonnes, 1 résultat par ligne.    
while ($donnees = $reponse->fetch()) {
echo '<tr class="class02">';
echo '<td class="id">'.$donnees['numRPPS'].'</td>';
echo '<td class="nom">'.$donnees['nomM'].'</td>';
echo '<td class="spetial">'.$donnees['spcialite'].'</td>';
echo '<td class="ville">'.$donnees['ville'].'</td>';
echo '<td class="adresse">'.$donnees['adresse'].'</td>';
echo '<td class="mise a jour">'."<a href='../cabinet_medical/miseajourmed.html'>Mettre a jour</a>"."</td>";
echo '<td class="Delete">'."<a href='../cabinet_medical/deletemed.html'>Delete</a>"."</td>";
echo '<td class="ajouter user">'."<a href='../cabinet_medical/ajoutmed.html'>Ajouter</a>"."</td>";
echo '</tr>'."\n";
}
echo '</table>'."\n";
// fin du tableau.
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=cabinet_medical', 'root', 'root');
}
$reponse = $bdd->query('SELECT * FROM PATIENT');
// début du tableau
echo '<table>'."\n";
// première ligne on affiche les titres prénom et surnom dans 2 colonnes
echo '<tr class="class01">';
echo '<td>numSS</td>';
echo '<td>nomP</td>';
echo '<td>prenom</td>';
echo '<td>sex</td>';
echo '<td>datenaiss</td>';
echo '<td>numRPPS</td>';
echo '<td>Mise a jour</td>';
echo '<td>Delete</td>';
echo '</tr>'."\n";

// Partie "Boucle"
// lecture et affichage des résultats sur 2 colonnes, 1 résultat par ligne.    
while ($donnees = $reponse->fetch()) {
echo '<tr class="class02">';
echo '<td class="numSS">'.$donnees['numSS'].'</td>';
echo '<td class="nomp">'.$donnees['nomP'].'</td>';
echo '<td class="prenom">'.$donnees['prenomM'].'</td>';
echo '<td class="sex">'.$donnees['sexe'].'</td>';
echo '<td class="datenaiss">'.$donnees['dateNaiss'].'</td>';
echo '<td class="numRPPS">'.$donnees['numRPPS'].'</td>';
echo '<td class="mise a jour"></td>';
echo '<td class="Delete"></td>';
echo '</tr>'."\n";
}
echo '</table>'."\n";

?>

</body>
</html>