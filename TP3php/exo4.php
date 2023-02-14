<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("class/personnage3.php"); ?>
    <title>Exo4</title>
</head>

<body>

    <?php

    $perso1 = new personnage("Titi");
    $perso2 = new personnage("Toto");
    $perso1->afficheViePseudo();
    $perso2->afficheViePseudo();
    $perso1->attaquer($perso2);
    $perso1->afficheViePseudo();
    $perso2->afficheViePseudo();

    ?>

    <pre>
    require("class/personnage3.php");

    
    class personnage{
    private $pseudo;
    private $vie;

    public function __construct($psuedoUser){
        $this -> vie =  100;
        $this -> pseudo = $psuedoUser;
    }

    public function afficheViePseudo(){
        echo "Je suis  " .$this -> pseudo ." et j'ai : " .$this -> vie. " points de vie";
    }

    public function affichePseudo(){
        return $this -> pseudo;
    }

    public function attaquer($PersoAattaquer){
       $PersoAattaquer-> defense(50);
       echo "Je suis ". $this -> pseudo . " et j'attaque ".$PersoAattaquer->affichePseudo();
    }

    public function defense($ValeurDattaque){
        $this->vie -= $ValeurDattaque;
    }


}

    $perso1 = new personnage("Titi");
    $perso2 = new personnage("Toto");
    $perso1->afficheViePseudo();
    $perso2->afficheViePseudo();
    $perso1->attaquer($perso2);
    $perso1->afficheViePseudo();
    $perso2->afficheViePseudo();
    </pre>

</body>

</html>