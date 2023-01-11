<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>

 <div>
    <?php
    //variable prenant un nombre aléatoire entre 0 et 100
    $VarAl= rand(0,100);
    
    //conditition si nombre paire afficher en rouge, impaire en bleu
    if($VarAl%2 == 1)
    {
        ?>
        <div style="background-color:blue;color:cyan"><?php echo $VarAl?> je suis impair </div>
        <?php
    }
    else
    {
        ?>
        <div style="background-color:red;color:cyan"><?php echo $VarAl?> je suis pair </div>
        <?php
    }
    ?>
</div>

</body>
</html>