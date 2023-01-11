<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2.2</title>
</head>
<body>
    <?php
    $tableau= array(
        'Nom'=> Bobo,
        'Prénom'=> Titi,
        'MDP'=> tiboLPB,
    );
    ?>

    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>MDP</th>
        </tr>
        <tr>

            <?php
                echo "<td>".$tableau{'Nom'}."</td>";

                echo "<td>".$tableau['Prénom']."</td>";
                
                echo "<td>".$tableau['MDP']."</td>";

    ?>
    
 
</body>
</html>