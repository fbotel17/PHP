<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1</title>
</head>
<body>
    
    <?php
    echo "<p>tableau 1</p>";
    $tab = array ('NOM' => array("TABOULET", "LAUPEZ", "TEPABO","PIPI"),
            'PRENOM' => array("HUGO", "DAMIENS", "TIBO","CACA")
        );
    include 'functions.php';
    tab($tab);
    echo "<p>tableau 2</p>";
    tab($tab);
    ?>
</body>
</html>