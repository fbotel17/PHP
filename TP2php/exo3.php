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
    
    $note = array (8,4,15,9,10,16,17,12,14,6,3,5);
    include 'functions.php';
    tab3($note);
    echo "La moyenne est de : ".moyenne($note);
    ?>
</body>
</html>