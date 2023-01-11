<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3</title>
</head>
<body>
    <?php
    $tableau= array(
        'Nom'=> array ("0"=>"Bobo",
                        "1"=>"Bibi",
                        "2"=>"Baba",
                        "3"=>"Bebe",
                        "4"=>"Byby"),
        'Prénom'=> array ("0"=>"Titi",
                        "1"=>"Tata",
                        "2"=>"Toto",
                        "3"=>"Tyty",
                        "4"=>"Tete"),
        'MDP'=> array ("0"=>"titiBG",
                        "1"=>"tataLPB",
                        "2"=>"toto2010",
                        "3"=>"tytyGaming",
                        "4"=>"tetefortnite"),
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
        for($i=0; $i<5; $i++)
        {
            ?>
            <tr>
            <?php
            echo "<td align='center'>".$tableau['Nom']{$i}."</td>";
            echo "<td align='center'>".$tableau['Prénom']{$i}."</td>";
            echo "<td align='center'>".$tableau['MDP']{$i}."</td>";
            ?>
            </tr>
            <?php
        }
        ?>
    </tr>
    </table>
 
</body>
</html>