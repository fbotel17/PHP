<?php
class personnage{
    private $pseudo;
    private $vie;

    public function __construct(){
        $this -> vie =  100;
    }

    public function afficheVie(){
        echo $this -> vie;
    }

}
?>