<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("class/personnage2.php"); ?>
    <title>Exo3</title>
</head>

<body>

    <?php

    $perso1 = new personnage("Julien");
    $perso1->afficheVie();

    ?>

    <pre>
    require("class/personnage2.php");

    class personnage{
        private $pseudo;
        private $vie;

        public function __construct($psuedoUser){
            $this -> vie =  100;
            $this -> pseudo = $psuedoUser;
        }

        public function afficheVie(){
            echo $this -> vie;
            echo $this -> pseudo;
        }

    }

    $perso1 = new personnage("Julien");
    $perso1->afficheVie();
    </pre>

</body>

</html>