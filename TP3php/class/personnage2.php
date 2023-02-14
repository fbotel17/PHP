<?php
class personnage{
    private $pseudo;
    private $vie;

    public function __construct($psuedoUser){
        $this -> vie =  100;
        $this -> pseudo = $psuedoUser;
    }

    public function afficheVie(){
        echo "Points de vie : " .$this -> vie;
        echo "<br> Pseudo : " .$this -> pseudo;
    }

}
?>