<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoFinal</title>
</head>
<body>
    
<?php
    include 'functions.php';
    $MotDePasse = "1234";

    if(formulaireConnexion($MotDePasse)==true)
    {
        echo "lien secret";
        ?>
        <a href="http://google.com/" target="_blank">
        </a>
        <?php
    }
    
?>
</body>
</html>