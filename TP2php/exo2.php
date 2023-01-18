<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
</head>
<body>
    
    <?php
    $nom = "Nom";
    $prenom = "Prenom";
    $age = "Age";

    echo "<p>tableau 1</p>";
    $tab = array ('NOM' => array("TABOULET", "LAUPEZ", "TEPABO","PIPI"),
            'PRENOM' => array("HUGO", "DAMIENS", "TIBO","CACA"),
            'AGE'=> array("12", "18", "19", "56")
        );
    include 'functions.php';
    tab2($tab, $nom, $prenom, $age);
    echo "<p>tableau 2</p>";
    tab2($tab, $nom, $prenom, $age);
    ?>
</body>
</html>