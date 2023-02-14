<?php
class personnage{
    private $pseudo;
    private $vie;

    public function __construct($psuedoUser){
        $this -> vie =  100;
        $this -> pseudo = $psuedoUser;
    }

    public function afficheViePseudo(){
        echo "<br>Je suis  " .$this -> pseudo ." et j'ai : " .$this -> vie. " points de vie";
    }

    public function affichePseudo(){
        return $this -> pseudo;
    }

    public function attaquer($PersoAattaquer){
       $PersoAattaquer-> defense(50);
       echo "<br>Je suis ". $this -> pseudo . " et j'attaque ".$PersoAattaquer->affichePseudo();
    }

    public function defense($ValeurDattaque){
        $this->vie -= $ValeurDattaque;
    }


}
?>